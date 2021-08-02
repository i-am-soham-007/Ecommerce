<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Section;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\ProductsAttribute;
use App\Models\ProductsImage;
use App\Models\Brand;
use Session;
use Image;
class ProductsController extends Controller
{
    //

    public function products()
    {
        $products = Product::with(['category','subcategory','section'])->where('status',1)->orwhere('status',0)->get();
        // $products = Product::with(['category' =>function($query){
        //     $query->select('id','category_name');
        // },'section' =>function($query){ $query->select('id','name');}])->where('status',1)->orwhere('status',0)->get();
        //$products = json_decode(json_encode($products),true);
        //echo '<pre>'; print_r($products); die();
        return view('master-admin.product.list')->with(compact('products'));
    }
    public function UpdateStatus(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            $status = ($data['status'] == 'Active') ? 0 : 1;
            Product::where('id',$data['product_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'product_id' => $data['product_id']]);
        }
    }
    public function deleteProduct($id)
    {
        Product::WHERE('id',$id)->update(['status'=>2]);
        return redirect()->back()->with('success','Product has been deleted success');
    }

    public function addEditProduct(Request $request,$id =null){
        if($id == ""){
            $title = "Add Product";
            $product = new Product;
            $productdata = array();
            $message = "Product has been added";
        }else{
            $title = "Edit Product";
            $product = Product::find($id);
            $productdata = Product::find($id);
            $productdata = json_decode(json_encode($productdata),true);
            $message = "Product has been updated";
        }

        if($request->isMethod('post'))
        {
            $data = $request->all();

            $rules = [
                'category_id' => 'required',
                'brand_id' => 'required',
                'product_name' => 'required|regex:/^[\pL\s\-]+$/u',
                'product_code' => 'required|regex:/^[\w-]*$/',
                'product_price' => 'required|numeric',
                'product_color' =>'required|regex:/^[\pL\s\-]+$/u'
            ];
            $customMessages = [
                'category_id.required' => 'Category is Required',
                'brand_id.required' => 'Brand is Required',
                'product_name.required' => 'Product Name is Required',
                'product_name.regex' => 'Valid Product Name is Required',
                'product_code.required' => 'Product Code is Required',
                'product_code.regex' => 'Valid Product Code is Required',
                'product_price.required' => 'Product Price is Required',
                'product_price.regex' => 'Valid Product Price is Required',
                'product_color.required' => 'Product Color is Required',
                'product_color.regex' => 'Product Color is Required'
            ];
            
            $this->validate($request, $rules, $customMessages);

            $is_featured = empty($data['is_featured']) ? "No" : "Yes";
            $data['fabric'] = empty($data['fabric']) ? "" : $data['fabric'];
            $data['pattern'] = empty($data['pattern']) ? "" : $data['pattern'];
            $data['sleeve'] = empty($data['sleeve']) ? "" : $data['sleeve'];
            $data['fit'] = empty($data['fit']) ? "" : $data['fit'];
            $data['occassion'] = empty($data['occasion']) ? "" : $data['occasion'];
            $data['wash_care'] = empty($data['wash_care']) ? "" : $data['wash_care'];
            $data['product_weight'] = empty($data['product_weight']) ? "" : $data['product_weight'];
            $data['product_discount'] = empty($data['product_discount']) ? 0 : $data['product_discount'];
            $data['description'] = empty($data['description']) ? "" : $data['description'];
            $data['meta_title'] = empty($data['meta_title']) ? "" : $data['meta_title'];
            $data['meta_keyword'] = empty($data['meta_keyword']) ? "" : $data['meta_keyword'];
            $data['meta_description'] = empty($data['meta_description']) ? "" : $data['meta_description'];

            //Image Upload
            if($request->hasFile('main_image'))
            {
                $image_tmp = $request->file('main_image'); 
                if($image_tmp->isValid())
                {
                    $image_name = $image_tmp->getClientOriginalName();
                    $extension = $image_tmp->getClientOriginalExtension();
                    $imageName = $image_name.'-'.rand(111,9999).'.'.$extension;
                    $large_image_path = 'master-admin/assets/productImage/large/'.$imageName;
                    $medium_image_path = 'master-admin/assets/productImage/medium/'.$imageName;
                    $small_image_path = 'master-admin/assets/productImage/small/'.$imageName;
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(520,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(260,300)->save($small_image_path);
                    $product->main_image = $imageName;
                }
            }

            //Video Upload
            if($request->hasFile('product_video'))
            {
                $video_tmp = $request->file('product_video'); 
                if($video_tmp->isValid())
                {
                    $video_name = $video_tmp->getClientOriginalName();
                    $extension = $video_tmp->getClientOriginalExtension();
                    $videoName = $video_name.'-'.rand(111,9999).'.'.$extension;
                    $video_path = 'master-admin/assets/productVideo/'.$videoName;
                    $video_tmp->move($video_path,$videoName);
                    $product->product_video = $videoName;
                }
            }
            
            //Save 
            $subcategoryDetails = SubCategory::find($data['subcategory_id']);
           // echo json_encode($categoryDetails); die;
            $product->section_id = $subcategoryDetails['section_id'];
            $product->brand_id = $data['brand_id'];
            $product->category_id = $data['category_id'];
            $product->subcategory_id = $data['subcategory_id'];
            $product->product_name = $data['product_name'];
            $product->product_code = $data['product_code'];
            $product->product_color = $data['product_color'];
            $product->product_price = $data['product_price'];
            $product->status = 1;
            $product->product_discount = $data['product_discount'];
            $product->product_weight = $data['product_weight'];
            $product->description = $data['description'];
            $product->wash_care = $data['wash_care'];
            $product->fabric = $data['fabric'];
            $product->pattern = $data['pattern'];
            $product->sleeve = $data['sleeve'];
            $product->fit = $data['fit'];
            $product->occassion = $data['occassion'];
            $product->meta_title = $data['meta_title'];
            $product->meta_keyword = $data['meta_keyword'];
            $product->meta_description = $data['meta_description'];

            $product->is_featured = $is_featured;
            $product->save();

            Session::flash('success',$message);
            return redirect('admin/product-list');
        }
        // Filter Array
        $fabricArray = array('Cotton','Polyester','Wool');
        $sleeveArray = array('Full Sleeve','Half Sleeve','Short Sleeve','Sleeveless');
        $patternArray = array('Checked','Plain','Printed','Self','Solid');
        $fitArray = array('Regular','Slim');
        $occasionArray = array('Casual','Formal');

        $subcategories = Section::with('subcategories')->get();
        $subcategories = json_decode(json_encode($subcategories),true);

        $categories = Category::where('status', 1)->get();
        $categories = json_decode(json_encode($categories),true);

        $brands = Brand::WHERE('status',1)->get();
        $brands = json_decode(json_encode($brands),true);

        //echo "<pre>"; print_r($subcategories); die;
        return view('master-admin.product.product')->with(compact('title','fabricArray','sleeveArray','patternArray','fitArray','occasionArray',
        'subcategories','categories','productdata','brands'));
    }


    public function deleteProductImage($id)
    {
        $productImage = Product::select('main_image')->where('id',$id)->first();
        $small_image_path =  'master-admin/assets/productImage/small/';
        $medium_image_path =  'master-admin/assets/productImage/medium/';
        $large_image_path =  'master-admin/assets/productImage/large/';
        if(file_exists($small_image_path.$productImage->main_image))
        {
            unlink($small_image_path.$productImage->main_image);
        }
        if(file_exists($medium_image_path.$productImage->main_image))
        {
            unlink($medium_image_path.$productImage->main_image);
        }
        if(file_exists($large_image_path.$productImage->main_image))
        {
            unlink($large_image_path.$productImage->main_image);
        }
        Product::WHERE('id',$id)->update(['main_image'=>'']);
        return redirect()->back()->with('success','Product Image has been deleted');

    }

    public function deleteProductVideo($id)
    {
        $productVideo = Product::select('product_video')->where('id',$id)->first();
        $video_path =  'master-admin/assets/productVideo/';
        if(file_exists($video_path.$productVideo->product_video))
        {
            unlink($video_path.$productVideo->product_video);
        }
        Product::WHERE('id',$id)->update(['product_video'=>'']);
        return redirect()->back()->with('success','Product video has been deleted');
    }


    // PRODUCTS ATTRIBUTES

    public function addAttributes(Request $request, $id)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();

            foreach($data['sku'] as $key => $value) {
                if(!empty($value)) {

                    $attrCountSKU = ProductsAttribute::where(['sku' => $value])->count();
                    if($attrCountSKU > 0) {
                        return redirect()->back()->with('error','SKU already exists. Please add another SKU');
                    }
                    $attrCountSize = ProductsAttribute::where(['product_id' => $id, 'size' => $data['size'][$key]])->count();
                    if($attrCountSize > 0) {
                        return redirect()->back()->with('error','Size already exists. Please add another Size');
                    }

                    $attribute = new ProductsAttribute;
                    $attribute->product_id = $id;
                    $attribute->sku = $value;
                    $attribute->size = $data['sku'][$key];
                    $attribute->price = $data['price'][$key];
                    $attribute->stock = $data['stock'][$key];
                    $attribute->status = 1;
                    $attribute->save();
                }
            }

            return redirect()->back()->with('success','Product Attributes has been added successfully');
            
        }
        $productdata =Product::select('id','product_name','product_name','product_code','product_color','main_image')->with('attributes')->where('status',1)->orwhere('status',0)->find($id);
        $productdata = json_decode(json_encode($productdata),true);

        $title = "Product Attributes";
        return view('master-admin.product.add-attributes')->with(compact('title','productdata'));
    }

    public function editAttributes(Request $request, $id)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();

            foreach($data['attrId'] as $key => $attr) {
                if(!empty($attr)) {

                    ProductsAttribute::where(['id' => $data['attrId'][$key]])->update(['price' =>$data['price'][$key], 'stock' => $data['stock'][$key]]);
                        return redirect()->back()->with('success','Product Attributes has been updated successfully');
                }
            }            
        }
    }

    public function UpdateAttributeStatus(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            $status = ($data['status'] == 'Active') ? 0 : 1;
            ProductsAttribute::where('id',$data['attribute_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'attribute_id' => $data['attribute_id']]);
        }
    }
    public function deleteAttribute($id)
    {
        ProductsAttribute::WHERE('id',$id)->update(['status'=>2]);
        return redirect()->back()->with('success','Attribute has been deleted successfully');
    }
    
    //
    public function addImages(Request $request,$id)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();
            if($request->has('images')){
                $images = $request->file('images');
                foreach($images as $key => $image){
                    $productImage = new ProductImage;
                    
                    $img =Image::make($image);
                    $extension = $extension->getClientOriginalExtension();
                    $imageName = rand(111,9999).time().".".$extension;

                    $large_image_path = 'master-admin/assets/productImage/large/'.$imageName;
                    $medium_image_path = 'master-admin/assets/productImage/medium/'.$imageName;
                    $small_image_path = 'master-admin/assets/productImage/small/'.$imageName;
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(520,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(260,300)->save($small_image_path);
                    $productImage->product_id = $id;
                    $productImage->image = $image;
                    $productImage->status = 1;
                    $productImage->save();
                    return redirect()->back()->with('success','Images has been added successfully');
                }
            }
            
        }
        $productdata = Product::with('images')->select('id','product_name','product_name','product_code','product_color','main_image')->find($id);
        $productdata = json_decode(json_encode($productdata),true);
        $title = "Product Image";

        return view('master-admin.product.add-images')->with(compact('title','productdata'));
    }

    public function UpdateImageStatus(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            $status = ($data['status'] == 'Active') ? 0 : 1;
            ProductsImage::where('id',$data['image_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'image_id' => $data['image_id']]);
        }
    }
    public function deleteImage($id)
    {
        $productImage = ProductsImage::select('image')->where('id',$id)->first();
        $small_image_path =  'master-admin/assets/productImage/small/';
        $medium_image_path =  'master-admin/assets/productImage/medium/';
        $large_image_path =  'master-admin/assets/productImage/large/';
        if(file_exists($small_image_path.$productImage->image))
        {
            unlink($small_image_path.$productImage->image);
        }
        if(file_exists($medium_image_path.$productImage->image))
        {
            unlink($medium_image_path.$productImage->image);
        }
        if(file_exists($large_image_path.$productImage->image))
        {
            unlink($large_image_path.$productImage->image);
        }
        ProductsImage::WHERE('id',$id)->update(['image'=>'','status'=>2]);
        return redirect()->back()->with('success','Image has been deleted successfully');
    }
}
