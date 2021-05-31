<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceTech;
use Illuminate\Http\Request;

class ServiceTechController extends Controller
{
    public function getServiceTech()
	{
        $service = Service::all();
        $serviceTech = ServiceTech::all();
		foreach ($serviceTech as $key => $value) {
            $change = Service::where("id","=",$value->service_id)->first();
            $value->service_id = $change->name;
        }
        return view('dashboard/serviceTech')->with('getService', $service)->with('getservicetech', $serviceTech);
       
	}
    public function addServiceTech(Request $request)
    {
        $request->validate([
            'service_id' => 'required',
            'technology' => 'required',
        ]);
        $input = $request->all();
        ServiceTech::create($input);
        return redirect('service_technology')->with('success','Technology created successfully.');
    }
    public function updateServiceTech(Request $request)
    {
        $request->validate([
            'technology' => 'required',
        ]);
        $service = ServiceTech::find($request->id);
        $service->technology = $request->technology;
        $service->save();
        return redirect('service_technology')->with('success','Technology update successfully.');
    }
    public function getServiceTechById($id)
    {
        $service = ServiceTech::find($id);
        $change = Service::where("id","=",$service->service_id)->first();
        $service->service_id = $change->name;
        return view('dashboard/editServiceTech',compact('service'));
    }
    public function deleteServiceTech($id)
    {
        $service = ServiceTech::find($id);
        $service->delete();
        return response()->json(['success'=>'Record has been deleted']);
    }


    public function projectDetail($id)
    {
        $service = Service::find($id);
        $change = ServiceTech::where("service_id","=",$service->id)->get();
        return view('form',compact('service','change'));
    }

}
