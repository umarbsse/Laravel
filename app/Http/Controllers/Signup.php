<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Signup extends Controller
{
    //
    function index(){
        $data['title'] = "Signup into your account";
        $data['body'] = "This is Signup Page body text";
        return view('signup.index', $data);
    }
}
