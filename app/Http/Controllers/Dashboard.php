<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    //
    function index(){
        return "this is dashboard Page";
    }
    function setting(){
        return "this is dashboard setting Page";
    }
    function readme(){
        return "This is dashboard readme Page";
    }
}
