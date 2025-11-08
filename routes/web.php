<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Signup;
use App\Http\Controllers\Login;
use App\Http\Controllers\FormHandle;


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



Route::view('home/profile/umer/ali','urls.named_routes');
