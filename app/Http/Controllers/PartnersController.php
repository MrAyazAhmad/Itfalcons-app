<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Our_Partners;

class PartnersController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $getpartner = Our_Partners::orderBy('id')->get();
        
        return view('dashboard/our_partners',compact('getpartner'));
    }

     public function addPartner(Request $request)
    {
        $request->validate([
            'partner_name' => 'required',
            /*'designation' => 'required',*/
            'company_logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();
        if ($company_logo = $request->file('company_logo')) {
            $destinationPath = 'public/image/partner/';
            $partnerImage = date('YmdHis') . "." . $company_logo->getClientOriginalExtension();
            $company_logo->move($destinationPath, $partnerImage);
            $input['company_logo'] = "$partnerImage";
        }
    
        Our_Partners::create($input);
        return redirect('our_partners')->with('success','Partner created successfully.');
    }
    public function updatePartner(Request $request)
    {
        $request->validate([
            'partner_name' => 'required',
        ]);
        $partner = Our_Partners::find($request->id);
        $partner->partner_name = $request->partner_name;
        if ($image = $request->file('company_logo')) {
            $destinationPath = 'public/image/partner/';
            $partnerImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $partnerImage);
            $partner->company_logo = "$partnerImage";
        }
        $partner->save();
        return redirect('our_partners')->with('success','Partner update successfully.');
    }

     public function getPartnerById($id)
    {
        $data = [];
        $partner = Our_Partners::find($id);
        return view('dashboard/editPartner',compact('partner'));
    }

     public function deletePartner($id)
    {
        $our_partner = Our_Partners::find($id);
        $our_partner->delete();
        return response()->json(['success'=>'Record has been deleted']);
    }
}
