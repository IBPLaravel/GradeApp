<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;

class AuthController extends Controller
{
    public function login(){
        //dd(Hash::make(123456));

        if(!empty(Auth::check())){
            if(Auth::user()->user_type == 1){
                return redirect('admin/admin/list');
            }else if (Auth::user()->user_type == 2){
                 return redirect('teacher/dashboard');
            }else if (Auth::user()->user_type == 3){
               return redirect('student/dashboard');
            }
        }
        return view('auth.login');
    }
    public function AuthLogin(Request $request){
        //dd($request->all());
            // Login olduğunda kullanıcının DB user type ına bağlı olarak yönleneceği sayfayı ayarlıyoruz 
        $remember = !empty($request->remember) ? true : false;
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)){
            if(Auth::user()->user_type == 1){
                return redirect('admin/admin/list');
            }else if (Auth::user()->user_type == 2){
                return redirect('teacher/dashboard');
             }else if (Auth::user()->user_type == 3){
                 return redirect('student/dashboard');
            }            
        }else{
            return redirect()->back()->with('error','Please enter current email and password');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect(url(''));
    }
}
