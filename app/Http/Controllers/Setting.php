<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Setting extends Controller
{
    function insert(){
        $result = DB::table('users')->insert([
            'name'=>'tony1',
            'email'=>'1tony@gmail.com',
            'password'=>'11221111'
        ]);
        if($result){
            return "Data inserted";
        }else{
            return "Data not inserted";
        }
    }
    function update(){
        $result = DB::table('users')->where('id',5)->update(['name'=>'asdasdasd']);
        if($result){
            return "Data updated";
        }else{
            return "Data not updated";
        }
    }
    function delete(){
        $result = DB::table('users')->where('id',5)->delete();
        if($result){
            return "Data deleted";
        }else{
            return "Data not deleted";
        }
    }
    function queries(){
        $get_all_record = DB::table('users')->get(); // SELECT * FROM users
        //echo "<pre>";print_r($get_all_record);echo "</pre>";
        $get_all_record = json_decode(json_encode($get_all_record), true); // Decode trick to convert object into array

        echo "<pre>";print_r($get_all_record);echo "</pre>";
        $get_all_record_where = DB::table('users')->where('email','umar@gmail.com')->get(); // SELECT * FROM users
        echo "<pre>";print_r($get_all_record_where);echo "</pre>";
        //$result = DB::table('users')->get();
        //return $result;
    }
}
