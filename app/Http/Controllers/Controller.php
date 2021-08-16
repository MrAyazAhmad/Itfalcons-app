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
use App\Models\ServiceTech;
use App\Models\Testimonial;
use App\Models\Our_Partners;
use Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  	public function getIndex()
	{
		        $count = Portfolio::count();
        $skip = 6;
        $limit = $count - $skip; // the limit
        // $collections = Portfolio::skip($skip)->take($limit)->get();
        // dd($collections);
        // die();
        return view('index')->with('getContact', Contact::all())->with('getPortfolio', Portfolio::take(6)->get())
        ->with('collections', Portfolio::skip($skip)->take($limit)->get())->with('getService', Service::all())->with('getServicefooter', Service::all()->random(6))->with('getTeam', Team::all())->with('getTestimonial', Testimonial::all())->with('getPartners', Our_Partners::all())->with('getContactMap', Contact::all());
       
	}
	public function getPortfolioIndex($id)
	{
        $portfolio = Portfolio::find($id);
		$portfolioImg = PortfolioImages::where("portfolio_id","=",$portfolio->id)->get();
		
        return view('portfolio-details')->with('getPortfolio', $portfolio)->with('getPortfolioImg', $portfolioImg)->with('getServicefooter', Service::all()->random(6))->with('getService', Service::all());;
       
	}
	public function getServiceIndex($id)
	{

        $serviceTech = ServiceTech::all();
        $service = Service::find($id);
        $service = Service::find($id);		
        return view('inner-page')->with('getesrvicemain', $service)->with('getServicefooter', Service::all()->random(6))->with('serviceTech', $serviceTech);
       
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
