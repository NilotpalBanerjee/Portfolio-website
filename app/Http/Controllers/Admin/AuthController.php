<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getLogin(){
        return view('backend.pages.login');
    }

    public function postLogin(Request $request){
        $request-> validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $validated=auth()->attempt([
            'email'=>$request->email,
            'password'=>$request->password
        ],$request->password);

        if($validated){
            return redirect()->route('dashboard')->with('success','Login Successfull');
        }else{
            return redirect()->back()->with('error','Invalid credentials');
        }
    }

    public function logout(Request $request){
        auth()->logout();
        return redirect()->route('getLogin')->with('success','You have been successfully logged out');
    }
}
