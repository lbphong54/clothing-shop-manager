<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm(){
        if (Auth::check()) {           
            
                return redirect('/home');
            }            
        return view('/login');
    }
    public function login(Request $request){
        
        if(Auth::guard('web')->attempt(['ten_dang_nhap' => $request->username,'password' => $request->password])){
            return redirect('/home');
        }
        
        return redirect('/login')->withInput()->with('error', 'Tên đăng nhập hoặc mật khẩu không đúng.');
    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
