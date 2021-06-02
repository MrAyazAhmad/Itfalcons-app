<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Contact;
use App\Models\Portfolio;
use App\Models\PortfolioImages;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Our_Partners;
use Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  	public function getIndex()
	{
        return view('index')->with('getContact', Contact::all())->with('getPortfolio', Portfolio::all())->with('getService', Service::all())->with('getTeam', Team::all())->with('getTestimonial', Testimonial::all())->with('getPartners', Our_Partners::all());
       
	}
	public function getPortfolioIndex($id)
	{
        $portfolio = Portfolio::find($id);
		$portfolioImg = PortfolioImages::where("portfolio_id","=",$portfolio->id)->get();
		
        return view('portfolio-details')->with('getPortfolio', $portfolio)->with('getPortfolioImg', $portfolioImg);
       
	}
	public function getServiceIndex($id)
	{
        $service = Service::find($id);
		
        return view('inner-page')->with('getService', $service);
       
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
