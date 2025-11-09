<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Employee extends Controller
{
    
    function list(){
        return 'List of employees';
    }
    function add(){
        return 'Add new employee';
    }
    function delete(){
        return 'delete employee';
    }
    function about($name){
        return $name;
    }
}
