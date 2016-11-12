<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');

//    if(Auth::check()){
//        return "The user is logged in";
//    }

//    $username = 'sdgsdfgsdf';
//    $password = "346456446";
//    if(Auth::attempt(['username'=>$username, 'password'=>$password])) {
//        return redirect()->intended('/admin');
//    };


    Auth::logout();

});



Auth::routes();

Route::get('/home', 'HomeController@index');
