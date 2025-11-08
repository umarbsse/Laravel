<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Named_routes extends Controller
{
    //
    function show(){
       // return view('urls.named_routes');
        //return redirect()->to('home/profile/umer/ali');
        return to_route('hm');
    }
    function user(){
       // return view('urls.named_routes');
        //return redirect()->to('home/profile/umer/ali');
        return to_route('user',["name"=>"umer"]);
    }
}
