<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    //
    function index(){
        $data['title'] = "Login into your account";
        $data['body'] = "This is login Page body text";
        return view('login.index', $data);
    }
}
