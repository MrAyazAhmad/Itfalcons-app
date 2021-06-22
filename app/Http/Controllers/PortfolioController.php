<?php

namespace App\Http\Controllers;

use App\Models\PortfolioImages;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
            'category' => 'required',
            'client' => 'required',
            'project_date' => 'required',
            'project_url' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();
        unset($input['image2[]']);
        $check ="";
        if ($image = $request->file('image')) {
            $destinationPath = 'public/image/portfolio/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
            $check = "$profileImage";
        }
        Portfolio::create($input);
        $portfolio = Portfolio::where('image','=', $input['image'])->first();
        $id = $portfolio->id;
        if ($image2 = $request->file('image2')) {
            foreach($image2 as $images) {
                $portfolioImg = new PortfolioImages();
                $destinationPath = 'public/image/portfolio/';
                $profileImage = $images->getClientOriginalName();
                $images->move($destinationPath, $profileImage);
                $portfolioImg->portfolio_img = "$profileImage";
                $portfolioImg->portfolio_id = $id;
                $portfolioImg->save();
            }
        }
        return redirect('portfolio')->with('success','Portfolio created successfully.');
    }
    public function updatePortfolio(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'info' => 'required',
            'type' => 'required',
            'category' => 'required',
            'client' => 'required',
            'project_date' => 'required',
            'project_url' => 'required',
            'description' => 'required',
        ]);
        $portfolio = Portfolio::find($request->id);
        
        $portfolio->name = $request->name;
        $portfolio->info = $request->info;
        $portfolio->type = $request->type;
        $portfolio->category = $request->category;
        $portfolio->client = $request->client;
        $portfolio->project_date = $request->project_date;
        $portfolio->project_url = $request->project_url;
        $portfolio->description = $request->description;
        if ($image = $request->file('image')) {
            $destinationPath = 'public/image/portfolio/';
            $profileImage = $image->getClientOriginalName();
            $image->move($destinationPath, $profileImage);
            $portfolio->image = "$profileImage";
        }
                if ($image2 = $request->file('image2')) {
            foreach($image2 as $images) {
                $portfolioImg = new PortfolioImages();
                $destinationPath = 'public/image/portfolio/';
                $profileImage = $images->getClientOriginalName();
                $images->move($destinationPath, $profileImage);
                $portfolioImg->portfolio_img = "$profileImage";
                $portfolioImg->portfolio_id = $portfolio->id;
                $portfolioImg->save();
            }
        }
        $portfolio->save();
        return redirect('portfolio')->with('success','Portfolio update successfully.');
    }
    public function getPortfolioById($id)
    {
        // $data = [];
        $portfolio = Portfolio::find($id);
        $portfolioimg = PortfolioImages::where('portfolio_id','=', $portfolio->id)->get();

        return view('dashboard/editPortfolio',compact('portfolio','portfolioimg'));
    }

    public function deletePortfolio($id)
    {
        $portfolio = Portfolio::find($id);
        $image_path = public_path("\image\portfolio\\").$portfolio->image;
        if (file_exists($image_path)) {
            @unlink($image_path);
            $portfolioimg = PortfolioImages::where('portfolio_id','=', $portfolio->id)->get();
            if ($portfolioimg) {
                foreach($portfolioimg as $images) {
                    @unlink(public_path("\image\portfolio\\").$images->portfolio_img);
                    $images->delete();
                }
            }
            $portfolio->delete();
        }
        return response()->json(['success'=>'Record has been deleted']);
    }
}
