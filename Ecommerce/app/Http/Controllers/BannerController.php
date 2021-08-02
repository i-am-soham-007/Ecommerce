<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Image;
use Session;
class BannerController extends Controller
{
    //
    public function Banners(){
        $banners = Banner::all();
        return view('master-admin.banner.list')->with(compact('banners'));
    }

    public function addEditBanner(Request $request,$id = null){
        if($id ==""){
            $title = "Add Banner Image";
            $banner = new Banner;
            $message = "Banner has been added successfully";
        }else{
            $title = "Edit Banner Image";
            $banner = Banner::find($id);
            $message = "Banner has been updated successfully";
        }
        if($request->isMethod('post')){
            $data = $request->all();
            
            if($request->hasFile('image'))
            {
                $image_tmp = $request->file('image'); 
                if($image_tmp->isValid())
                {
                    $image_name = $image_tmp->getClientOriginalName();
                    $extension = $image_tmp->getClientOriginalExtension();
                    $imageName = $image_name.'-'.rand(111,9999).'.'.$extension;
                    $image_path = 'master-admin/assets/bannerImage/'.$imageName;
                    Image::make($image_tmp)->resize(1170,480)->save($image_path);
                    $banner->image = $imageName;
                }
            }

            $banner->link = $data['link'];
            $banner->title = $data['title'];
            $banner->alt = $data['alt'];
            $banner->status = 1;
            $banner->save();
            Session::flash('success',$message);
            return redirect('admin/banner-list');
        }

        return view('master-admin.banner.banner')->with(compact('title','banner'));
    }

    public function UpdateBannerStatus(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            $status = ($data['status'] == 'Active') ? 0 : 1;
            Banner::where('id',$data['banner_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'banner_id' => $data['banner_id']]);
        }
    }

    public function deleteBanner($id)
    {
        $bannerImage = Banner::where('id',$id)->first();

        $banner_image_path =  'master-admin/assets/bannerImage/'.$bannerImage;
        if(file_exists($banner_image_path))
        {
            unlink($banner_image_path);
        }else{
            
        }
        Banner::WHERE('id',$id)->update(['status'=>2]);
        return redirect()->back()->with('success','Banner has been deleted success');
    }
}
