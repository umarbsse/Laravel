<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Student extends Controller
{
    function list(){
        return 'List of students';
    }
    function add(){
        return 'Add new student';
    }
}
