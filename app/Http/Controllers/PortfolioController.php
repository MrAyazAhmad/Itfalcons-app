<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $getportfolio = Portfolio::orderBy('id')->get();
        // dd($getportfolio);
        // die();
        return view('dashboard/portfolio',compact('getportfolio'));
    }
    public function addPortfolio(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'info' => 'required',
            'type' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'public/image/portfolio/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Portfolio::create($input);
        return redirect('portfolio')->with('success','Portfolio created successfully.');
    }
    public function updatePortfolio(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'info' => 'required',
            'type' => 'required',
        ]);
        $portfolio = Portfolio::find($request->id);
        $portfolio->name = $request->name;
        $portfolio->info = $request->info;
        $portfolio->type = $request->type;
        if ($image = $request->file('image')) {
            $destinationPath = 'public/image/portfolio/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $portfolio->image = "$profileImage";
        }
        $portfolio->save();
        return redirect('portfolio')->with('success','Portfolio update successfully.');
    }
    public function getPortfolioById($id)
    {
        $data = [];
        $portfolio = Portfolio::find($id);
        $data['id'] = $portfolio->id;
        $data['name'] = $portfolio->name;
        $data['info'] = $portfolio->info;
        $data['type'] = $portfolio->type;
        $data['image'] = $portfolio->image;
        // echo $data['name'];
        // echo $data['info'];
        // echo $data['image'];
        // dd($portfolio);
        // die();
        return view('dashboard/editPortfolio',compact('portfolio'));
    }

    public function deletePortfolio($id)
    {
        $portfolio = Portfolio::find($id);
        $portfolio->delete();
        return response()->json(['success'=>'Record has been deleted']);
    }
}
