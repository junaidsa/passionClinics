<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Facility;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
public function home(){
    return view('front-web.home');
}
public function about(){
    return view('front-web.about');
}
public function service($id){
    $service =  Service::find($id);
    return view('front-web.single_service',compact('id','service'));

}
public function services(){
    return view('front-web.services');

}
public function dashboard(){
    return view('dashboard');
}

    public function uploadFacility(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'name_ar' => 'required|string|max:255',
        'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240'
    ]);

    $filename = null;
    $avatar = $request->file('avatar');
    $avatarName = time().'facility.'.$avatar->getClientOriginalExtension();
    $destinationPath = base_path('../aluniquefurniture_uploads/facilits/');
    $avatar->move($destinationPath, $avatarName);

    Facility::create([
        'name' => $request->name,
        'name_ar' => $request->name_ar,
        'avatar' => $avatarName,
    ]);

    return response()->json(['success' => true]);
}


public function deleteFacility($id)
{
    $item = Facility::findOrFail($id);
    $item->delete();
return response()->json(['success' => true]);
}
public function createFacility()
{
    $facility =  Facility::get();
    return view('facility',compact('facility'));
}
public function contact_list(){
    $contact =  Contact::get();
    return view('pages.contact_list',compact('contact'));
}
public function aboutEdit(){
    $ab =  About::find(1);
    return view('pages.about',compact('ab'));
}


public function aboutupdate(Request $request)
{
    $request->validate([
        'about_title'         => 'required|string|max:255',
        'about_title_ar'         => 'required|string|max:255',
        'about'               => 'required|string',
        'about_ar'               => 'required|string',
        'about_attachment'    => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        'about_attachment2'   => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
    ]);
    $about = About::find(1);
    if (!$about) {
        abort(404, 'About page not found.');
    }
    $about->about_title = $request->about_title;
    $about->about_title_ar = $request->about_title_ar;
    $about->about = $request->about;
    $about->about_ar = $request->about_ar;
    if ($request->hasFile('about_attachment')) {
        $mainImg = $request->file('about_attachment');
        $fileName1 = time().'about_attachment.'.$mainImg->getClientOriginalExtension();
        $destinationPath = base_path('../aluniquefurniture_uploads/pages/');
        $mainImg->move($destinationPath, $fileName1);
        $about->about_attachment = $fileName1;
    }
    if ($request->hasFile('about_attachment2')) {
        $file2 = $request->file('about_attachment2');
        $fileName2 = time().'about_attachment.'.$file2->getClientOriginalExtension();
        $destinationPath = base_path('../aluniquefurniture_uploads/pages/');
        $file2->move($destinationPath, $fileName2);
        $about->about_attachment2 = $fileName2;
    }
    if ($request->hasFile('about_team')) {
        $about_team = $request->file('about_team');
        $fileName3 = time().'about_team.'.$about_team->getClientOriginalExtension();
        $destinationPath = base_path('../aluniquefurniture_uploads/pages/');
        $about_team->move($destinationPath, $fileName3);
        $about->about_team = $fileName3;
    }
    $about->save();
    return redirect()->back()->with('success', 'About page updated successfully!');
}

public function contact_us(){
return view('front-web.contact_us');
}


public function insertContact(Request $request)
{
    $validated = $request->validate([
        'fname' => 'required|string|max:255',
        'lname' => 'required|string|max:255',
        'phone' => 'required',
        'email' => 'required|email',
        'message' => 'required'
    ]);

    $contact = new Contact();
    $contact->name = $request->fname . ' ' . $request->lname;
    $contact->email = $request->email;
    $contact->mobile_number = $request->phone;
    $contact->messages = $request->message;
    $contact->save();

    return redirect()->route('front.contact')->with('success', 'Message sent successfully.');
}


public function teams(){
    return view('front-web.teams');
}
public function calendar(){
    return view('pages.calendar');
}
public function clinic(){
    $teams = User::with('service')->where('role','doctor')->get();
    return view('front-web.e_clinic',compact('teams'));
}
}
