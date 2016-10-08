<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use View;
use Illuminate\Support\Facades\Input;
use Auth;
use Redirect;
use Validator;
use Exception;
use Session;
use App\User;
use Hash;

class RegistrationController extends Controller
{
    //
    public function login() {
        return View::make('system/login');
    }

	public function authenticate () {
		$user = array(
			'email' => Input::get('email'),
			'password' => Input::get('password')
			
		);
		if(Auth::attempt($user))
		{
			return Redirect::to('home');
		}
		return Redirect::to('login')->with('login_error','Username atau Password salah gan');
	}

	public function register(){
		return View::make('system/registration');
	}
    
	public function store(){
		$rules= array (
			'email' => 'required|email|unique:users',
			'password' => 'required|same:password_confirmation',
			'name' => 'required'
		);
		$validation = Validator::make(Input::all(),$rules);
		if ($validation->fails()){
			return Redirect::to('register')->withErrors($validation)->withInput();
		}
			$user = new User;
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->name = Input::get('name');

			if($user->save()){
				Auth::loginUsingId($user->id);
				return Redirect::to('register')->with('register_success','Anda berhasil mendaftar, silakan login');

			}	
				return Redirect::to('register')->withInput();

	}
}
