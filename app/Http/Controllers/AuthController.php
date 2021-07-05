<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('pages.login');
    }

    public function login(Request $request)
    {
       $this->validate($request,[
           'login'=>'required',
           'password'=>'required'
       ]);

       if(Auth::attempt([
           'login'=>$request->login,
           'password'=>$request->password
       ])){
           return redirect('/admin/index');
       }
       return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
