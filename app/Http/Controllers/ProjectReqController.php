<?php

namespace App\Http\Controllers;

use App\Models\ProjectReq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; 
use App\Mail\ContactMail;

class ProjectReqController extends Controller
{
    public function sendDetail(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'technology' => 'required',
            'budget' => 'required',
            'deadline' => 'required',
            'requirement' => 'required',
        ]);
        $input = $request->all();
        ProjectReq::create($input);
        $details =[
            'title'=>'mail from ITFalcons',
            'body'=>'Received notification !!!!!!! we will contact you soon...'
        ];
        Mail::to($request->email)->send(new ContactMail($details));
        return redirect('/')->with('Project','Project Requirement has been sent.');
    }
}
