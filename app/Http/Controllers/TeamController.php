<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $getteam = Team::orderBy('id')->get();
        
        return view('dashboard/team',compact('getteam'));
    }
    public function addTeam(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'public/image/team/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Team::create($input);
        return redirect('team')->with('success','Team created successfully.');
    }
    public function updateTeam(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
        ]);
        $team = Team::find($request->id);
        $team->name = $request->name;
        $team->designation = $request->designation;
        $team->fb = $request->fb;
        $team->twt = $request->twt;
        $team->inst = $request->inst;
        $team->lnkd = $request->lnkd;
        if ($image = $request->file('image')) {
            $destinationPath = 'public/image/team/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $team->image = "$profileImage";
        }
        $team->save();
        return redirect('team')->with('success','Team update successfully.');
    }
    public function getTeamById($id)
    {
        $data = [];
        $team = Team::find($id);
        return view('dashboard/editTeam',compact('team'));
    }

    public function deleteTeam($id)
    {
        $team = Team::find($id);
        $team->delete();
        return response()->json(['success'=>'Record has been deleted']);
    }
}
