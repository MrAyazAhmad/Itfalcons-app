<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
            'long_description'=>'required',
            's_image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
        ]);
        $input = $request->all();
           unset($input['s_image']);
        $check ="";
        if ($image = $request->file('s_image')) {
            $destinationPath = 'public/image/service/';
            $serviceImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $serviceImage);
            $input['s_image'] = "$serviceImage";
            $check = "$serviceImage";
        }
        Service::create($input);
        return redirect('service')->with('success','Service created successfully.');
    }
    public function updateService(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'info' => 'required',
            'icon' => 'required',
            'long_description'=>'required',
            's_image'=>'required',
            'description' => 'required',
        ]);
        $service = Service::find($request->id);
        $service->name = $request->name;
        $service->info = $request->info;
        $service->icon = $request->icon;
        $service->long_description = $request->long_description;
        $service->s_image = $request->s_image;
        $service->description = $request->description;
        if ($image = $request->file('s_image')) {
            $destinationPath = 'public/image/service/';
            $serviceImage = $image->getClientOriginalName();
            $image->move($destinationPath, $serviceImage);
            $service->s_image = "$serviceImage";
        }
        $service->save();
        return redirect('service')->with('success','Service updated successfully.');
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
