<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){
        $s =  Setting::where('id',1)->first();
        return view('pages.site-setting',compact('s'));
    }
    public function createLocation(){
        return view('location.create');
    }


    public function storeLocation(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required',
            'address' => 'required',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($validated) {
            $avatar = $request->file('avatar');
            $avatarName = time() . 'locations.' . $avatar->getClientOriginalExtension();
            $destinationPath = base_path('../aluniquefurniture_uploads/locations/');
            $avatar->move($destinationPath, $avatarName);
            $project = Location::create([
                'name' => $request->name,
                'description' => $request->description,
                'image' => $avatarName,
                'address' => $request->address,
            ]);
            return redirect()->route('location.index')->with('success', 'Locations added successfully.');
        } else {
            return redirect()->back()->withErrors($validated)->withInput();
        }
    }
    public function viewLocation(){
        $location = Location::get();
return view('location.index',compact('location'));
    }

}
