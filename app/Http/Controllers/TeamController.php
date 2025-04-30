<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TeamController extends Controller
{
    public function index(){
      $users =   User::where('role','doctor')->get();
        return view('teams.index',compact('users'));
    }
    //
    public function create(){
       $service =  Service::get();
       return view('teams.create',compact('service'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5',
            'experience' => 'required',
            'about' => 'required',
            'personals_info' => 'required',
        ]);
        if (User::where('email', $request->email)->exists()) {
            return redirect()->back()->withErrors(['email' => 'The email has already been taken.'])->withInput();
        }

        $image = null;
        if ($request->hasFile('image')) {
            $image_pro = $request->file('image');
            $image = time() . '_profile.' . $image_pro->getClientOriginalExtension();
            $destinationPath = base_path('../aluniquefurniture_uploads/profile/');
            $image_pro->move($destinationPath, $image);
        }

        $staff = new User();
        $staff->name = $request->input('name');
        $staff->email = $request->input('email');
        $staff->experience = $request->input('experience');
        $staff->image = $image;
        $staff->about = $request->input('about');
        $staff->personals_info = $request->input('personals_info');
        $staff->fb_url = $request->input('fb_url');
        $staff->ins_url = $request->input('ins_url');
        $staff->x_url = $request->input('x_url');
        $plainPassword = $request->password;
        $staff->password = Hash::make($plainPassword);
        $staff->role = 'doctor';
        $staff->save();
            return redirect('admin/teams')->with('success', 'Account created successfully.');


    }
    public function team_profile($id){
      $profile =   User::with('service')->find($id);
      return view('front-web.profile_team',compact('profile'));
    }
}
