<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //php artisan model:show Student   inspecting modal use incommand line
    protected $table = "uni_students";

    function testFun(){
        return"This is dumy Modal Function";
    }
}
