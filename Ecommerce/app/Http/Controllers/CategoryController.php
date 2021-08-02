<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\Category;
use Session;
use Image;

class CategoryController extends Controller
{
    //

    public function categories()
    {
        $category = Category::with(['parentcategory'])->where('status',1)->orWhere('status',0)->get();
        return view('master-admin.category.list')->with('category',$category);
    }

    public function UpdateStatus(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            $status = ($data['status'] == 'Active') ? 0 : 1;
            Category::where('id',$data['category_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'category_id' => $data['category_id']]);
        }
    }

    public function addEditCategory(Request $request,$id =null){
        
        if($id == null){
            $title = "Add Category";
            $category = new Category;
            $categorydata = array();
            $getCategories = array();
            $message = "Category has been added";
        }else{
            $title = "Edit Category";
            $categorydata = Category::where('id',$id)->first();
            $categorydata =json_decode(json_encode($categorydata),true);
            $category = Category::find($id);
            $message = "Category has been updated";
        }

        if($request->isMethod('post'))
        {
            $data = $request->all();

            $rules = [
                'category_name' => 'required|regex:/^[\pL\s\-]+$/u',
                'category_url' => 'required',
                'category_image' =>'image'
            ];
            $customMessages = [
                'category_name.required' => 'Name is Required',
                'category_name.regex' => 'Valid Name is Required',
                'category_url.required' => 'Category Url is Required',
                'category_image.image' => 'Image is Required'
            ];
            
            $this->validate($request, $rules, $customMessages);
            
            if($request->hasFile('category_image'))
            {
                $img = $request->file('category_image');
                if($img->isValid())
                {
                    $extension = $img->getClientOriginalExtension();
                    $imageName = rand(111,9999).'.'.$extension;
                    $imagePath = 'master-admin/assets/categoryImage/'.$imageName;
                    Image::make($img)->resize(300,500)->save($imagePath);
                }else if(!empty($data['current_image']))
                {
                        $imageName = $data['current_image'];
                }else{
                    $imageName = "";
                }
            }else{
                $imageName ="";
            }

            $data['description'] = empty($data['description']) ? $data['description'] : "" ;
            $data['category_discount'] = empty($data['category_discount']) ? $data['category_discount'] : 0;
            $data['title'] = empty($data['title']) ? $data['title'] : "" ;
            $data['meta_desc'] = empty($data['meta_desc']) ? $data['meta_desc'] : "" ;

            $category->category_name = $data['category_name'];
            $category->category_image = $imageName;
            $category->category_discount = $data['category_discount'];
            $category->description = $data['description'];
            $category->url = $data['category_url'];
            $category->meta_title = $data['title'];
            $category->meta_description = $data['meta_desc'];
            $category->meta_keyword = $data['meta_keyword'];
            $category->status = 1;
            $category->save();

            Session::flash('success', $message);
            return redirect('admin/category-list');
        }
        
        
        return view('master-admin.category.add')->with(compact('title','categorydata','getCategories'));
    }

    public function appendCategory(request $request){
        if($request->ajax()){
            $data = $request->all();
            $getCategories = Category::with('subcategory')->where(['status'=>1])->get();
            $getCategories = json_decode(json_encode($getCategories),true);
           
            return view('master-admin.category.append')->with(compact('getCategories'));
        }
    }

    public function deleteCategoryImage($id)
    {
        $categoryImage = Category::select('category_image')->where('id',$id)->first();
        $imagePath =  'master-admin/assets/categoryImage/';
        if(file_exists($imagePath.$categoryImage->category_image))
        {
            unlink($imagePath.$categoryImage->category_image);
        }
        Category::WHERE('id',$id)->update(['category_image'=>'']);
        return redirect()->back()->with('success','Category Image has been deleted success');

    }

    public function deleteCategory($id)
    {
        Category::WHERE('id',$id)->update(['status'=>2]);
        return redirect()->back()->with('success','Category has been deleted success');

    }
}
