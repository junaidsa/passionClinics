<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Appointment;
use App\Models\Contact;
use App\Models\Difference;
use App\Models\Facility;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    //
    public function home()
    {
        return view('front-web.home');
    }
    public function about()
    {
        return view('front-web.about');
    }
    public function service($id)
    {
        $service =  Service::find($id);
        return view('front-web.single_service', compact('id', 'service'));
    }
    public function services()
    {
        return view('front-web.services');
    }
    public function offers()
    {
        return view('front-web.offers');
    }
    public function dashboard()
    {
        return view('dashboard');
    }

    public function uploadFacility(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:100'
        ]);

        $filename = null;
        $avatar = $request->file('avatar');
        $avatarName = time() . 'facility.' . $avatar->getClientOriginalExtension();
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
        return view('facility', compact('facility'));
    }
    public function createDifference()
    {
        $difference =  Difference::get();
        return view('difference', compact('difference'));
    }

    public function uploadDifference(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $avatar = $request->file('avatar');
        $avatarName = time() . 'difference.' . $avatar->getClientOriginalExtension();
        $destinationPath = base_path('../aluniquefurniture_uploads/difference/');
        $avatar->move($destinationPath, $avatarName);

        Difference::create([
            'title' => $request->title,
            'name_ar' => $request->name_ar,
            'avatar' => $avatarName,
        ]);

        return response()->json(['success' => true]);
    }



    public function deleteDifference($id)
    {
        $item = Difference::findOrFail($id);
        $item->delete();
        return response()->json(['success' => true]);
    }
    public function contact_list()
    {
        $contact =  Contact::get();
        return view('pages.contact_list', compact('contact'));
    }
    public function aboutEdit()
    {
        $ab =  About::find(1);
        return view('pages.about', compact('ab'));
    }


    public function aboutupdate(Request $request)
    {
        $request->validate([
            'about_title'         => 'required|string|max:255',
            'about_title_ar'         => 'required|string|max:255',
            'about'               => 'required|string',
            'about_ar'               => 'required|string',
            'about_attachment'    => 'nullable|image|mimes:jpg,jpeg,png,gif|max:100',
            'about_attachment2'   => 'nullable|image|mimes:jpg,jpeg,png,gif|max:100',
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
            $fileName1 = time() . 'about_attachment.' . $mainImg->getClientOriginalExtension();
            $destinationPath = base_path('../aluniquefurniture_uploads/pages/');
            $mainImg->move($destinationPath, $fileName1);
            $about->about_attachment = $fileName1;
        }
        if ($request->hasFile('about_attachment2')) {
            $file2 = $request->file('about_attachment2');
            $fileName2 = time() . 'about_attachment.' . $file2->getClientOriginalExtension();
            $destinationPath = base_path('../aluniquefurniture_uploads/pages/');
            $file2->move($destinationPath, $fileName2);
            $about->about_attachment2 = $fileName2;
        }
        if ($request->hasFile('about_team')) {
            $about_team = $request->file('about_team');
            $fileName3 = time() . 'about_team.' . $about_team->getClientOriginalExtension();
            $destinationPath = base_path('../aluniquefurniture_uploads/pages/');
            $about_team->move($destinationPath, $fileName3);
            $about->about_team = $fileName3;
        }
        $about->save();
        return redirect()->back()->with('success', 'About page updated successfully!');
    }

    public function contact_us()
    {
        return view('front-web.contact_us');
    }
    public function clinicAppointment($id)
    {
        $appointments = Appointment::orderBy('id')->with('customer', 'service', 'localtion', 'user')->where('user_id', $id)->orderBy('id')->get();
        $user = User::find($id);
        // $durationSetting = DB::table('settings')->where('id', 1)->value('slot_duration');
        return view('front-web.appointment', compact('id', 'appointments', 'user'));
    }

    public function appointmentStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'appointment_date'   => 'required',
            'staff'   => 'required',
            'slots'              => 'required|string',
            'message'               => 'nullable|string|max:1000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }
        $stff = User::find($request->staff);

        $appointment = new Appointment();
        $appointment->user_id               = $request->staff;
        $appointment->service_id              = $stff->service_id;
        $appointment->customer_id               = Auth::id();
        $appointment->slot               = $request->slots;
        $appointment->date               = $request->appointment_date;
        $appointment->location_id               = $request->location;
        $appointment->appointment_status     = 'pandding';
        $appointment->payment_status     = 'paid';
        $appointment->note               = $request->message;
        $appointment->save();

        return response()->json([
            'status'  => 'success',
            'message' => 'Appointment created successfully.',
        ]);
    }




    public function profile($id)
    {
        $user = User::findOrFail($id);
        return view('front-web.profile', compact('user'));
    }

    public function profileUpdate(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'name_ar' => 'nullable|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:20',
            'gender' => 'nullable|in:Male,Female',
        ]);

        $user->name = $request->name;
        $user->name_ar = $request->name_ar;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->save();

        return redirect()->route('front.profile', $user->id)->with('profile_success', 'Profile updated successfully.');
    }

    public function updatePassword(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:6',
        ]);

        if (!Hash::check($request->old_password, $user->password)) {
            return redirect()->back()->withErrors(['old_password' => 'Old password is incorrect']);
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->back()->with('password_success', 'Password updated successfully.');
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


    public function teams()
    {
        return view('front-web.teams');
    }
    public function calendar()
    {
        return view('pages.calendar');
    }
    public function clinic()
    {
        $teams = User::with('service')->where('role', 'doctor')->get();
        return view('front-web.e_clinic', compact('teams'));
    }
    public function userDashboard()
    {
        return view('front-web.userdashboard', compact());
    }

    public function blog()
    {
        return view('front-web.blogs');
    }
    public function processRegistration(Request  $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'gender' => 'required',
                'email' => 'required|email:unique:users,email',
                'password' => 'required|min:5|same:confirm_password',
                'confirm_password' => 'required',

            ]);
            if ($validator->passes()) {
                $user = new User();
                $user->name = $request->name;
                $user->role = 'customer';
                $user->email = $request->email;
                $user->gender = $request->gender;
                $user->password = Hash::make($request->password);
                $user->save();
                Auth::login($user);
                session()->flash('success', 'You have Register Successfully.');
                return response()->json([
                    'status' => true,
                    'errors' => []
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'errors' => $validator->errors()
                ]);
            }
        } catch (\Exception $e) {
            return response()->json(['error' =>  $e->getMessage(), 'line' => $e->getLine(), 'File' => $e->getFile()], 500);
        }
    }
public function authenticate(Request $request)
{
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if ($validator->fails()) {
        return response()->json(['errors' => $validator->errors()], 422);
    }

    if (Auth::attempt($request->only('email', 'password'))) {
        $user = Auth::user();

        // Check if user is doctor or customer
        if (in_array($user->role, ['doctor', 'customer'])) {
        // Determine redirect URL based on role
            $redirectUrl = $user->role === 'customer'
                ? route('front.dashboard')
                : route('dashboard');

            return response()->json([
                'status' => true,
                'redirect_url' => $redirectUrl
            ]);
        } else {
            Auth::logout(); // Logout unauthorized role
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
    } else {
        return response()->json(['message' => 'Invalid credentials'], 401);
    }
}

}
