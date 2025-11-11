<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $table = "uni_students";

    function testFun(){
        return"This is dumy Modal Function";
    }
}
