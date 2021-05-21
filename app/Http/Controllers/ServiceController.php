<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        // echo "hi";
        // die();
        $getservice = Service::orderBy('id')->get();
        
        return view('dashboard/service',compact('getservice'));
    }
    public function addService(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'info' => 'required',
            'icon' => 'required',
        ]);
        $input = $request->all();
        Service::create($input);
        return redirect('service')->with('success','Service created successfully.');
    }
    public function updateService(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'info' => 'required',
            'icon' => 'required',
        ]);
        $service = Service::find($request->id);
        $service->name = $request->name;
        $service->info = $request->info;
        $service->icon = $request->icon;
        
        $service->save();
        return redirect('service')->with('success','Service update successfully.');
    }
    public function getServiceById($id)
    {
        $service = Service::find($id);
        return view('dashboard/editService',compact('service'));
    }

    public function deleteService($id)
    {
        $service = Service::find($id);
        $service->delete();
        return response()->json(['success'=>'Record has been deleted']);
    }
}
