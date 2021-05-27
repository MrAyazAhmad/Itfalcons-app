<?php

namespace App\Http\Controllers;

use App\Models\PortfolioImages;
use Illuminate\Http\Request;

class PortfolioImageController extends Controller
{
    public function deletePortfolioImg($id)
    {
        
        $portfolio = PortfolioImages::find($id);
        
        $image_path = public_path("\image\portfolio\\").$portfolio->portfolio_img;
        if (file_exists($image_path)) {

            @unlink($image_path);
     
        }
        $portfolio->delete();
        return response()->json(['success'=>'Record has been deleted']);
    }

    public function updatePortfolioImg(Request $request)
    {
        $request->validate([
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $portfolio = PortfolioImages::find($request->id2);
        
        $image_path = public_path("\image\portfolio\\").$portfolio->portfolio_img;
        if (file_exists($image_path)) {
            @unlink($image_path);
        }
        if ($image = $request->file('image2')) {
            $destinationPath = 'public/image/portfolio/';
            $profileImage = $image->getClientOriginalName();
            $image->move($destinationPath, $profileImage);
            $portfolio->portfolio_img = "$profileImage";
        }
        $portfolio->save();
        return redirect('edit_portfolio/'.$portfolio->portfolio_id)->with('success','Image update successfully.');
    }
}
