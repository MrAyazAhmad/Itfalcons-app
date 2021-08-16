<?php
namespace App\Http\Controllers;
use App\Models\ProjectReq;
use Illuminate\Http\Request;
use App\Models\ServiceTech;
/*use Illuminate\Support\Facades\Mail; 
use App\Mail\ContactMail;*/

class ProjectReqController extends Controller
{
    public function sendDetail(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'technology' => 'required',
            'budget' => 'required',
            'deadline' => 'required',
            'requirement' => 'required',
            'contact' => 'required',
        ]);

        $input = $request->all();
     /*   dd($input);
        die();*/
        ProjectReq::create($input);
        return redirect()->back()->with('success','Details added Successfully.');


       /* $details =[
            'title'=>'mail from ITFalcons',
            'body'=>'Received notification !!!!!!! we will contact you soon...'
        ];
        Mail::to($request->email)->send(new ContactMail($details));
        return redirect('/')->with('Project','Project Requirement has been sent.');*/
    }

    public function index()
    {
        $projectreqs = ProjectReq::orderBy('id')->get();

        return view('dashboard/projectrequirement')->with('projectreqs',$projectreqs);
    }



    public function getProjectReqById($id)
    {
        $projectreq = ProjectReq::find($id);
        return response()->json($projectreq);
    }
}
