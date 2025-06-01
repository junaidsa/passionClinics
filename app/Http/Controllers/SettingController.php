<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Location;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $s =  Setting::where('id', 1)->first();
        return view('pages.site-setting', compact('s'));
    }

    public function storeLocation(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required',
            'address' => 'required',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:100'
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
                'phone' => $request->phone,
            ]);
            return redirect()->route('location.index')->with('success', 'Locations added successfully.');
        } else {
            return redirect()->back()->withErrors($validated)->withInput();
        }
    }

    public function updateLocation(Request $request, $id)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required',
        'address' => 'required',
        'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $location = Location::findOrFail($id);

    if ($request->hasFile('avatar')) {
        // Delete old image
        $oldImagePath = base_path('../aluniquefurniture_uploads/locations/' . $location->image);
        if (file_exists($oldImagePath)) {
            unlink($oldImagePath);
        }

        // Store new image
        $avatar = $request->file('avatar');
        $avatarName = time() . '_locations.' . $avatar->getClientOriginalExtension();
        $destinationPath = base_path('../aluniquefurniture_uploads/locations/');
        $avatar->move($destinationPath, $avatarName);

        $location->image = $avatarName;
    }

    $location->name = $request->name;
    $location->description = $request->description;
    $location->address = $request->address;
    $location->phone = $request->phone;
    $location->save();

    return redirect()->route('location.index')->with('success', 'Location updated successfully.');
}

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'email' => 'required',
            'address' => 'required',
            'description' => 'required',
            'description_ar' => 'required',
            'phone_number' => 'required',
            'youtube_url' => 'nullable',
            'opening_time' => 'required',
            'closing_time' => 'required',
            'slot_duration' => 'required',
            'awards' => 'required',
            'year_experience' => 'required',
            'happy_clients' => 'required',
            'video' => 'nullable|mimes:mp4,avi,mov,wmv|max:5120',
            'video_hero' => 'nullable|file|mimes:jpg,jpeg,png,gif,mp4,avi,mov,wmv|max:100',
        ]);

        $setting = Setting::findOrFail($id);

        if ($request->hasFile('video')) {
            $oldVideoPath = base_path('../aluniquefurniture_uploads/video/' . $setting->video);
            if ($setting->video && file_exists($oldVideoPath)) {
                unlink($oldVideoPath);
            }

            $video = $request->file('video');
            $videoName = time() . '_video.' . $video->getClientOriginalExtension();
            $destinationPath = base_path('../aluniquefurniture_uploads/video/');
            $video->move($destinationPath, $videoName);

            $setting->video = $videoName;
        }
        if ($request->hasFile('video_hero')) {
            $oldVideo_heroPath = base_path('../aluniquefurniture_uploads/video/' . $setting->video_hero);
            if ($setting->video_hero && file_exists($oldVideo_heroPath)) {
                unlink($oldVideo_heroPath);
            }

            $video_hero = $request->file('video_hero');
            $videoName_hero = time() . 'hero_video.' . $video_hero->getClientOriginalExtension();
            $destinationPath = base_path('../aluniquefurniture_uploads/video/');
            $video_hero->move($destinationPath, $videoName_hero);

            $setting->hero_section = $videoName_hero;
        }

        $setting->title = $request->title;
        $setting->email = $request->email;
        $setting->address = $request->address;
        $setting->title_ar = $request->title_ar;
        $setting->description_ar = $request->description_ar;
        $setting->phone_number = $request->phone_number;
        $setting->youtube_url = $request->youtube_url;
        $setting->opening_time = $request->opening_time;
        $setting->closing_time = $request->closing_time;
        $setting->slot_duration = $request->slot_duration;
        $setting->awards = $request->awards;
        $setting->year_experience = $request->year_experience;
        $setting->fb_url = $request->fb_url;
        $setting->x_url = $request->x_url;
        $setting->ins_url = $request->ins_url;
        $setting->happy_clients = $request->happy_clients;

        $setting->save();

        return redirect()->route('setting.index')->with('success', 'Setting updated successfully.');
    }
    public function viewLocation()
    {
        $location = Location::get();
        return view('location.index', compact('location'));
    }

    public function createLocation()
    {
        return view('location.create');
    }
    public function editLocation($id)
    {
        $location = Location::findOrFail($id);
        return view('location.edit',compact('location'));
    }
    public function locationsDestroy($id)
    {
        $location = Location::find($id);
        if ($location) {
            $location->delete();
            return response()->json(['success' => 'Location deleted successfully.']);
        } else {
            return response()->json(['error' => 'Location not found.'], 404);
        }
    }
    public function permissions(){
        $staff = User::where('role','doctor')->get();
        return view('pages.permissions',compact('staff'));
    }
    public function contactDestroy($id)
    {
        $location = Contact::find($id);
        if ($location) {
            $location->delete();
                return redirect()->back()->with('success', 'Contact deleted successfully.');
        } else {
               return redirect()->back()->with('error', 'Contact not found.');
        }
    }
}
