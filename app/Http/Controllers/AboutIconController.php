<?php

namespace App\Http\Controllers;

use App\Models\AboutIcon;
use Illuminate\Http\Request;

class AboutIconController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        
        $getabout = AboutIcon::orderBy('id')->get();
        
        return view('dashboard/aboutIcon',compact('getabout'));
    }
    public function addAboutIcon(Request $request)
    {
        $request->validate([
            'icon' => 'required',
            'number' => 'required',
            'work' => 'required',
        ]);
        $input = $request->all();
        AboutIcon::create($input);
        return redirect('aboutIcon')->with('success','Record created successfully.');
    }
    public function updateAboutIcon(Request $request)
    {
        $request->validate([
            'icon' => 'required',
            'number' => 'required',
            'work' => 'required',
        ]);
        $about = AboutIcon::find($request->id);
        $about->icon = $request->icon;
        $about->number = $request->number;
        $about->work = $request->work;
        
        $about->save();
        return redirect('aboutIcon')->with('success','Record update successfully.');
    }
    public function getAboutIconById($id)
    {
        $about = AboutIcon::find($id);
        return view('dashboard/editAboutIcon',compact('about'));
    }

    public function deleteAboutIcon($id)
    {
        $about = AboutIcon::find($id);
        $about->delete();
        return response()->json(['success'=>'Record has been deleted']);
    }
}
