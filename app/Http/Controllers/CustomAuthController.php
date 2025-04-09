<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
    //
    public function login(){
        return view('auth.login');
    }

    public function regist(){
        return view('auth.regist');
    }
}
