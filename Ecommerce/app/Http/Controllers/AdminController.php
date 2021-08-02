<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Admin;
use Hash;
use Session;
use Image;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('master-admin.index');
    }

    public function Setting()
    {
        Session::put('page','settings');
        $admin = Admin::where('email', Auth::guard('admin')->user()->email)->first();
        //Auth::guard('admin')->user()->id;
        return view("master-admin.setting")->with('admin',$admin); 
    }

    public function chkCurrentPassword(Request $request)
    {
        $data = $request->all();
        if(Hash::check($data['cpass'],Auth::guard('admin')->user()->password))
        {
            echo "true";
        }else{
            echo "false";
        }
    }

    public function UpdateCurrentPassword(Request $request)
    {
        $data = $request->all();
        if(Hash::check($data['current_password'],Auth::guard('admin')->user()->password))
        {
            if($data['new_password'] == $data['confirm_password'])
            {
                Admin::where('id',Auth::guard('admin')->user()->id)->update(['password' => bcrypt($data['new_password'])]);
                Session::flash('success','Password has been updated Successfully');
            }else{
                Session::flash('error','New password and confirm password not matched');
            }
        }else{
            Session::flash('error','Your Current Password Is Incorrect');
        }
        return redirect()->back();
    }

    public function updateAdminDetails(Request $request)
    {
        Session::put('page','update-admin-details');
        if($request->isMethod('post'))
        {
            $data = $request->all();

            $rules = [
                'username' => 'required|alpha',
                'mobile' => 'required|numeric',
                'profile' =>'image'
            ];
            $customMessages = [
                'username.required' => 'Name is Required',
                'username.alpha' => 'Valid Name is Required',
                'mobile.required' => 'Mobile is Required',
                'mobile.numeric' => 'Valid Mobile is Required',
                'profile.image' => 'Image is Required'
            ];
            $this->validate($request,$rules,$customMessages);
            if($request->hasFile('profile'))
            {
                $img = $request->file('profile');
                if($img->isValid())
                {
                    $extension = $img->getClientOriginalExtension();
                    $imageName = rand(111,9999).'.'.$extension;
                    $imagePath = 'master-admin/assets/profile/'.$imageName;
                    Image::make($img)->resize(300,500)->save($imagePath);
                }else if(!empty($data['current_image']))
                {
                        $imageName = $data['current_image'];
                }else{
                    $imageName = "";
                }
            }
            Admin::where('email',Auth::guard('admin')->user()->email)->update(['username' =>$data['username'],"phone" =>$data['mobile'],"profile" => $imageName]);
            Session::flash('success','Admin Details updated successfully');
            return redirect()->back();
        }
        
        return view('master-admin.update-settings');
    }

    public function AddCategory()
    {
        Session::put('page','add-category');
        return view("master-admin.add-category");
    }




}
