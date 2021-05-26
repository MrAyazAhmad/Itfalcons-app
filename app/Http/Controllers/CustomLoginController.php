<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;
use Illuminate\Support\Facades\Hash;

class CustomLoginController extends Controller
{
    //
    public function authenticate(Request $request){
    	if(Auth::attempt(['email'=>$request->input('username'),'password'=> $request->input('password')]))
        {
    	echo "string";
    	die();
    }
    }
}
