<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    //

    public function Brands(){
        $brands = Brand::all();
        return view('master-admin.brand.list')->with(compact('brands'));
    }

    public function UpdateBrandStatus(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            $status = ($data['status'] == 'Active') ? 0 : 1;
            Brand::where('id',$data['brand_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'brand_id' => $data['brand_id']]);
        }
    }

    public function addEditBrand(Request $request,$id = null){
        if($id ==""){
            $title = "Add Brand";
            $brand = new Brand;
            $message = "Brand has been added successfully";
        }else{
            $title = "Edit Brand";
            $brand = Brand::find($id);
            $message = "Brand has been updated successfully";
        }
        if($request->isMethod('post')){
            $data = $request->all();

            $rules = [
                'brand_name' => 'required|regex:/^[\pL\s\-]+$/u'
            ];
            $customMessages = [
                'brand_name.required' => 'Name is Required',
                'brand_name.regex' => 'Valid Name is Required'
            ];

            $this->validate($request, $rules, $customMessages);

            $brand->name = $data['brand_name'];
            $brand->logo = $data['brand_name'].".png";
            $brand->status = 1;
            $brand->save();
            return redirect()->back()->with('success',$message);
        }

        return view('master-admin.brand.add-brand')->with(compact('title','brand'));
    }

    public function deleteBrand($id)
    {
        Brand::WHERE('id',$id)->update(['status'=>2]);
        return redirect()->back()->with('success','Brand has been deleted success');
    }
}
