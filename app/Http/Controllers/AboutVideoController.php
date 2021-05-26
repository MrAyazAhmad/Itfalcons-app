<?php

namespace App\Http\Controllers;

use App\Models\AboutVideo;
use Illuminate\Http\Request;

class AboutVideoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        
        $getabout = AboutVideo::orderBy('id')->get();
        
        return view('dashboard/aboutVideo',compact('getabout'));
    }
    public function updateAboutVideo(Request $request)
    {
        $request->validate([
            'video' => 'required',
            'heading' => 'required',
            'des' => 'required',
            'sudes1' => 'required',
            'sudes2' => 'required',
            'sudes3' => 'required',
            'sudes4' => 'required',
            'des2' => 'required',
        ]);
        $about = AboutVideo::find($request->id);
        $about->video = $request->video;
        $about->heading = $request->heading;
        $about->des = $request->des;
        $about->sudes1 = $request->sudes1;
        $about->sudes2 = $request->sudes2;
        $about->sudes3 = $request->sudes3;
        $about->sudes4 = $request->sudes4;
        $about->des2 = $request->des2;
        
        $about->save();
        return redirect('aboutVideo')->with('success','Record update successfully.');
    }
    public function getAboutVideoById($id)
    {
        $about = AboutVideo::find($id);
        return view('dashboard/editAboutVideo',compact('about'));
    }
    public function getAboutDescriptionById($id)
    {
        $about = AboutVideo::find($id);
        return response()->json($about);
    }
}
