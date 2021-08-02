<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Section;
use App\Models\Category;
use Image;
use Session;
class SubCategoryController extends Controller
{
    public function subcategories()
    {
        $subcategory = SubCategory::with(['section','parentsubcategory'])->where('status',1)->orWhere('status',0)->get();
        
        //$subcategory = json_decode(json_encode($subcategory), true);
       /// echo  '<pre>'; print_r($subcategory); die();
        return view('master-admin.sub-category.list')->with('subcategory',$subcategory);
    }

    public function UpdateStatus(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            $status = ($data['status'] == 'Active') ? 0 : 1;
            Subcategory::where('id',$data['subcategory_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'subcategory_id' => $data['subcategory_id']]);
        }
    }

    public function addEditSubCategory(Request $request,$id =null){
        
        if($id == null){
            $title = "Add SubCategory";
            $subcategory = new SubCategory;
            $subcategorydata = array();
            $getSubCategories = array();
            $message = "SubCategory has been added";
        }else{
            $title = "Edit SubCategory";
            $subcategorydata = SubCategory::where('id',$id)->first();
            $subcategorydata =json_decode(json_encode($subcategorydata),true);
            $getSubCategories = SubCategory::with('childsubcategory')->where(['parent_id'=>0,'section_id'=>$subcategorydata['section_id']])->get();
            $getSubCategories = json_decode(json_encode($getSubCategories),true);
            $subcategory = SubCategory::find($id);
            $message = "SubCategory has been updated";
        }

        if($request->isMethod('post'))
        {
            $data = $request->all();

            $rules = [
                'category_id' => 'required',
                'subcategory_name' => 'required|regex:/^[\pL\s\-]+$/u',
                'subcategory_url' => 'required',
                'subcategory_image' =>'image'
            ];
            $customMessages = [
                'category_id.required' => 'Category is Required',
                'subcategory_name.required' => 'Name is Required',
                'subcategory_name.regex' => 'Valid Name is Required',
                'subcategory_url.required' => 'Category Url is Required',
                'subcategory_image.image' => 'Image is Required'
            ];
            
            $this->validate($request, $rules, $customMessages);
            
            if($request->hasFile('subcategory_image'))
            {
                $img = $request->file('subcategory_image');
                if($img->isValid())
                {
                    $image_name = $img->getClientOriginalName();
                    $extension = $img->getClientOriginalExtension();
                    $imageName = $image_name.rand(111,9999).'.'.$extension;
                    $imagePath = 'master-admin/assets/subcategoryImage/'.$imageName;
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
            $data['subcategory_discount'] = empty($data['subcategory_discount']) ? $data['subcategory_discount'] : 0;
            $data['title'] = empty($data['title']) ? $data['title'] : "" ;
            $data['meta_desc'] = empty($data['meta_desc']) ? $data['meta_desc'] : "" ;
            
            $subcategory->category_id = $data['category_id'];
            $subcategory->parent_id = $data['parent_id'];
            $subcategory->section_id = $data['section_id'];
            $subcategory->subcategory_name = $data['subcategory_name'];
            $subcategory->subcategory_image = $imageName;
            $subcategory->subcategory_discount = $data['subcategory_discount'];
            $subcategory->description = $data['description'];
            $subcategory->url = $data['subcategory_url'];
            $subcategory->meta_title = $data['title'];
            $subcategory->meta_description = $data['meta_desc'];
            $subcategory->meta_keyword = $data['meta_keyword'];
            $subcategory->status = 1;
            $subcategory->save();

            Session::flash('success', $message);
            return redirect('admin/subcategory-list');
        }
        
        
        $getSections = Section::all();
        $getCategories = Category::all();
        return view('master-admin.sub-category.add')->with(compact('title','getSections','getCategories','subcategorydata','getSubCategories'));
    }

    public function appendSubCategory(request $request){
        if($request->ajax()){
            $data = $request->all();
            $getSubCategories = SubCategory::with('childsubcategory')->where(['section_id' => $data['section_id'],"parent_id"=>0,'status'=>1])->get();
            $getSubCategories = json_decode(json_encode($getSubCategories),true);
           
            return view('master-admin.sub-category.append')->with(compact('getSubCategories'));
        }
    }

    public function deleteSubCategoryImage($id)
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

    public function deleteSubCategory($id)
    {
        Category::WHERE('id',$id)->update(['status'=>2]);
        return redirect()->back()->with('success','Category has been deleted success');

    }
}
