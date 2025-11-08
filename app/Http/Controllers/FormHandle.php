<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormHandle extends Controller
{
    //
    function addUser(Request $req){
        $req->validate(
            [
                "username"=>'required|min:3|max:5',
                "email"=>'required|email',
                "city"=>'required|Uppercase',
            ],
            [
                "username.required"=>'Username can not be empty', //CUSTOM ERROR MSG PRINT IF not then by default print
                "username.min"=>'Username min charcter must be 3', //CUSTOM ERROR MSG PRINT IF not then by default print
                "username.max"=>'Username max charcter must be 5', //CUSTOM ERROR MSG PRINT IF not then by default print
                "city.Uppercase"=>'City must be in uppercase only', //CUSTOM ERROR MSG PRINT IF not then by default print
            ],

        );
        // echo "Username is = ".$req->username."<br/>";
        // echo "Username email = ".$req->email."<br/>";
        // echo "Username city  = ".$req->city."<br/>";
        return $req; //get all post data
        //print_r($_POST);
    }
}
