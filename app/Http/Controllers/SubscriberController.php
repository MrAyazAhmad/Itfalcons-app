<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriberuser;


class SubscriberController extends Controller
{
    //
     public function subscriberuser(Request $request)
    {

        $subscriber = New Subscriberuser();
        $subscriber->email = $request->email;
        $subscriber->save();
        return redirect('/')->with('success','You Subscribe successfully.');
    }
}
