<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class User extends Controller
{
    //
    function list(){
        $data = array();
        $data['users'] = DB::select("select * from users");
        return view('user.list',$data);
    }
    function users(){
        return DB::select("select * from users");
    }
}
