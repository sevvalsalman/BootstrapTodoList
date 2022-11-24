<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('BootstrapTodolist.index');
    }


    public function login(Request $request)
    {
        $username=$request->email;
        $pass=$request->password;
        $isUser= User::where('email',$username)->where('password',$pass)->first();

    }



}
