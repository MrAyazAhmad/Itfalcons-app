<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriberuser;
use Session;


class SubscriberController extends Controller
{
    //
     public function subscriberuser(Request $request)
    {

        $subscriber = New Subscriberuser();
        $subscriber->email = $request->email;
        $subscriber->save();
       /* session::flash('success','You Subscribe successfully.');
                return redirect()->back();*/


        return redirect()->back()->with('success','You Subscribed successfully.....');
    
    }
}
