<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use View;
class MasterController extends Controller
{
    public function all(){
		
		$users = User::all();
		$users = User:: orderBy('id','desc')->paginate(5);
		
	    return View::make('user')->with('users',$users);
			
	}
}
