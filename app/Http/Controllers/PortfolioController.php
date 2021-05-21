<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $getportfolio = Portfolio::orderBy('id')->get();
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
}
