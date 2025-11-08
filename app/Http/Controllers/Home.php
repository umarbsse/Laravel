<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    function index(){
        $data['title'] = "Home";
        $data['body'] = "This is home Page body text is here";
        $data['user_list'] = array("Umer", "Ali","Ahmed","Ehsan");
        return view('home.index', $data);
    }
}
