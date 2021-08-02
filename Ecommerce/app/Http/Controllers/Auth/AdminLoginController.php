<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Route;
class AdminLoginController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest:admin',['except' => ['logout']]);
    }
    public function ShowLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(Auth::guard('admin')->attempt(['email' =>$request->email,'password'=>$request->password],$request->remember))
        {
            return redirect()->route('admin.dashboard');
            //return redirect()->intended('admin.dashboard');
            //redirect()->intented(route('admin.dashboard'));
        }

        return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        $request->session()->flush();
        //$this->guard('admin')->logout();
        return redirect()->route('/');
    }
}
