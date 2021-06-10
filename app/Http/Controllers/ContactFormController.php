<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForms;
use Illuminate\Support\Facades\Mail; 
use App\Mail\ContactMail;


class ContactFormController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     public function addContactform(Request $request)
    {
    	$contactform = new ContactForms();
    	$contactform->name = $request->name;
    	$contactform->email = $request->email;
    	$contactform->subject = $request->subject;
    	$contactform->message = $request->message;
    	$contactform->save();
        $details =[
            'title'=>'mail from ITFalcons',
            'body'=>'Received notification !!!!!!! we will contact you soon...'
        ];

        Mail::to($contactform->email)->send(new ContactMail($details));
                return back()->with('success', 'submitted');

    	//return response()->json($contactform);
         
    }

    public function index()
    {
    	$contactforms = ContactForms::orderBy('id')->get();
    	return view('dashboard/contactform_detail',compact('contactforms'));
    }



    public function getContactformById($id)
    {
        $contactform = ContactForms::find($id);
        return response()->json($contactform);
    }
}
