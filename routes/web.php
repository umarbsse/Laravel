<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Signup;
use App\Http\Controllers\Login;
use App\Http\Controllers\FormHandle;
use App\Http\Controllers\Named_routes;
use App\Http\Controllers\Student;
use App\Http\Controllers\Employee;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\User;
use App\Http\Controllers\Students;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', '/home');






Route::get('/home', [Home::class, 'index']);
Route::get('/login', [Login::class, 'index']);
Route::get('/signup', [Signup::class, 'index']);


Route::view('user-form', 'form.user-form');

Route::post('addUser', [FormHandle::class, 'addUser']);




Route::view('url_home','urls.home');
Route::view('url_about','urls.about');
Route::view('url_about/{name}','urls.about');



Route::view('home/profile/umer/ali','urls.named_routes')->name('hm');
Route::view('home/profile/{name}','urls.named_routes')->name('user');


Route::get('show',[Named_routes::class,'show']);
Route::get('user',[Named_routes::class,'user']);



############################
## Route group with prefix #
############################
// Route::view('student/home','student.home');
// Route::get('student/list',[Student::class,'list']);
// Route::get('student/add',[Student::class,'add']);

// Merg same class route into prefix groups etc

Route::prefix('student')->group(function(){
    Route::view('/home','student.home');
    Route::get('/list',[Student::class,'list']);
    Route::get('/add',[Student::class,'add']);
});

###################################
### Route group with controller ###
###################################

// Route::get('list_emp',[Employee::class,'list']);   //OLD WAY OF DOING THAT
// Route::get('add_emp',[Employee::class,'add']);
// Route::get('delete_emp',[Employee::class,'delete']);


//Pass paramets in route controller
//Route::get('about_emp/{name}',[Employee::class,'about']);

Route::controller(Employee::class)->group(function(){
    Route::get('list_emp','list');
    Route::get('add_emp','add');
    Route::get('delete_emp','delete');
    
    Route::get('about_emp/{name}','about');
});


###################################
### Group Middleware route      ###
###################################

// Route::get('dashboard',[Dashboard::class,'index'])->middleware('middleware_country_age_check');
// Route::get('dashboard/setting',[Dashboard::class,'setting'])->middleware('middleware_country_age_check');
 Route::get('dashboard/readme',[Dashboard::class,'readme']);


Route::middleware("middleware_country_age_check")->group(function(){
    Route::get('dashboard',[Dashboard::class,'index']);
    Route::get('dashboard/setting',[Dashboard::class,'setting']);
});


Route::get('users',[User::class,'users']);
Route::get('users/list',[User::class,'list']);


Route::get('students',[Students::class,'getStudents']);
