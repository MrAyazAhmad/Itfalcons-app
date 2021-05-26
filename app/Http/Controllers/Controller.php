<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Contact;
use Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  public function getIndex()
	{
        return view('index')->with('getContact', Contact::all());
       
	}
	public function getLogin()
	{
        return view('auth/login');
       
	}
     public function getDashboard()
	{
            
      
        return view('dashboard/dashboard')->with('getContact', Contact::all());
	       }
}
