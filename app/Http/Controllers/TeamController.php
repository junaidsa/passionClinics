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
      $users =   User::orderBy('id','DESC')->where('role','doctor')->get();
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
            'name_ar' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5',
            'experience' => 'required',
            'about' => 'required',
            'category' => 'required',
            'category_ar' => 'required',
            'service_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:100',
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
        $staff->name_ar = $request->input('name_ar');
        $staff->service_id = $request->input('service_id');
        $staff->category = $request->input('category');
        $staff->category_ar = $request->input('category_ar');
        $staff->email = $request->input('email');
        $staff->experience = $request->input('experience');
        $staff->image = $image;
        $staff->about = $request->input('about');
        $staff->about_ar = $request->input('about_ar');
        $staff->personals_info = $request->input('personals_info');
        $staff->personals_info_ar = $request->input('personals_info_ar');
        $staff->fb_url = $request->input('fb_url');
        $staff->ins_url = $request->input('ins_url');
        $staff->x_url = $request->input('x_url');
        $plainPassword = $request->password;
        $staff->password = Hash::make($plainPassword);
        $staff->role = 'doctor';
        $staff->save();
            return redirect('admin/teams')->with('success', 'Account created successfully.');
    }
    public function edit($id) {
        $user = User::findOrFail($id);

        $service = Service::all();

        return view('teams.edit', compact('user', 'service'));
    }

    public function team_profile($id){
      $profile =   User::with('service')->find($id);
      return view('front-web.profile_team',compact('profile'));
    }

    public function delete($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return response()->json(['success' => 'Teams deleted successfully.']);
        } else {
            return response()->json(['error' => 'teams not found.'], 404);
        }
    }

    public function update(Request $request, $id)
{
    $validated = $request->validate([
        'name' => 'required',
        'name_ar' => 'required',
        'email' => 'required|email|unique:users,email,' . $id,
        'experience' => 'required',
        'about' => 'required',
        'category' => 'required',
        'category_ar' => 'required',
    ]);

    $staff = User::findOrFail($id);
    if ($request->hasFile('image')) {
        $image_pro = $request->file('image');
        $image = time() . '_profile.' . $image_pro->getClientOriginalExtension();
        $destinationPath = base_path('../aluniquefurniture_uploads/profile/');
        $image_pro->move($destinationPath, $image);
        $staff->image = $image;
    }

    $staff->name = $request->input('name');
    $staff->name_ar = $request->input('name_ar');
    $staff->category = $request->input('category');
    $staff->category_ar = $request->input('category_ar');
    $staff->email = $request->input('email');
    $staff->experience = $request->input('experience');
    $staff->about = $request->input('about');
    $staff->about_ar = $request->input('about_ar');
    $staff->personals_info = $request->input('personals_info');
    $staff->personals_info_ar = $request->input('personals_info_ar');
    $staff->fb_url = $request->input('fb_url');
    $staff->ins_url = $request->input('ins_url');
    $staff->x_url = $request->input('x_url');

    if ($request->filled('password')) {
        $staff->password = Hash::make($request->password);
    }

    $staff->save();

    return redirect('admin/teams')->with('success', 'Account updated successfully.');
}

}
