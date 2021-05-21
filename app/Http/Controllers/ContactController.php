<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function getContactById($id)
    {
        $contact = Contact::find($id);
        return response()->json($contact);
    }
    public function updateContact(Request $request)
    {
        $contact = Contact::find($request->id);
        $contact->mapp = $request->mapp;
    	$contact->location = $request->location;
    	$contact->email = $request->email;
    	$contact->phone = $request->phone;
    	$contact->save();
    	return response()->json($contact);
    }
}
