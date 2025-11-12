<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Api extends Controller
{
    function index(){
        $data = array();
        $response = Http::get('https://jsonplaceholder.typicode.com/users/1');
        $data['response'] = json_decode($response->body());
        return view('api.index',$data);
    }
}
