<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
public function home(){
    return view('front-web.home');
}

    public function uploadFacility(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'designation' => 'required|string|max:255',
        'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240'
    ]);

    $filename = null;
    $avatar = $request->file('avatar');
    $avatarName = time().'facility.'.$avatar->getClientOriginalExtension();
    $destinationPath = base_path('../aluniquefurniture_uploads/facilits/');
    $avatar->move($destinationPath, $avatarName);

    Facility::create([
        'name' => $request->name,
        'designation' => $request->designation,
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

}
