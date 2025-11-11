<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Students extends Controller
{
    //
    function getStudents(){
        $Student_modal = new \App\Models\Student;
        $data = array();
        $data['students'] = \App\Models\Student::all(); //Built in function to get all records

        $data['test_function'] = $Student_modal->testFun(); //Built in function to get all records
        
        echo $data['test_function'];
        return view('students.list',$data);
    }
}
