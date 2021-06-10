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
        // echo 'string';
        // die();
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
        $mail =new ContactMail($details);

        Mail::to($contactform->email)->send($mail);
        // return response()->json(['success'=>'Email has been Send']);
    	// return response()->json($contactform);
        return redirect()->back()->with('success','we will contact you soon...');
         
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
