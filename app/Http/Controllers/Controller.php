<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Contact;
use App\Models\Portfolio;
use App\Models\PortfolioImages;
use Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  	public function getIndex()
	{
        return view('index')->with('getContact', Contact::all())->with('getPortfolio', Portfolio::all());
       
	}
	public function getPortfolioIndex($id)
	{
        $portfolio = Portfolio::find($id);
		$portfolioImg = PortfolioImages::where("portfolio_id","=",$portfolio->id)->get();
		
        return view('portfolio-details')->with('getPortfolio', $portfolio)->with('getPortfolioImg', $portfolioImg);
       
	}
	public function getLogin()
	{
        return view('auth/login');
       
	}
     public function getDashboard()
	{
            
      
        return view('dashboard/dashboard')->with('getContact', Contact::all());
	       }
}
