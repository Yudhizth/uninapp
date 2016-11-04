<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    if (Auth::check()){
            return Redirect::to('home');
        
        }else{
            return Redirect::to('login')->with('login_error','You must login first');
        }
});

Route::get('login', 'RegistrationController@login');
Route::post('login','RegistrationController@authenticate');

Route::get('register','RegistrationController@register');
Route::post('register','RegistrationController@store');

Route::get('home','MainController@home');


/*
Route::get('admin', function () {
	return view('admin_template');
});

Route::get('test', 'TestController@index');
*/