<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function index(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->input();
            if(Auth::Attempt(['email'=> $data['email'], 'password' => $data['password']])){
                return redirect('dashboard');
            }else{

                return redirect('admin')->with('flash_message_error','Invalid Username or Password!');
            }
        }
        return view('admin.login');
    }
}
