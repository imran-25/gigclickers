<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //Login

    public function login(){
        return view('frontend.login');
    }

    //SignUp
    public function signup(){
        return view('frontend.layouts.master');
    }
}
