<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use Auth;
use View;
use Redirect;
class MainController extends Controller
{
    //
    public function home(){
        if (Auth::check()){
            return View::make('test')->with('user',Auth::user());
        
        }else{
            return Redirect::to('login')->with('login_error','You must login first');
        }
    }
}