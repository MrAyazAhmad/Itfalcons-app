<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    //This function is used for authencation weather it is login pr not
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $gettestimonial = Testimonial::orderBy('id')->get();
        
        return view('dashboard/testimonial',compact('gettestimonial'));
    }
    public function addTestimonial(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'public/image/testimonial/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Testimonial::create($input);
        return redirect('testimonial')->with('success','Testimonial created successfully.');
    }
    public function updateTestimonial(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'description' => 'required',
        ]);
        $testimonial = Testimonial::find($request->id);
        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->description = $request->description;
        if ($image = $request->file('image')) {
            $destinationPath = 'public/image/testimonial/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $testimonial->image = "$profileImage";
        }
        $testimonial->save();
        return redirect('testimonial')->with('success','Testimonial update successfully.');
    }
    public function getTestimonialById($id)
    {
        $testimonial = Testimonial::find($id);
        return view('dashboard/editTestimonial',compact('testimonial'));
    }

    public function deleteTestimonial($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();
        return response()->json(['success'=>'Record has been deleted']);
    }
}
