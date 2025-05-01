<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index(){
        $customer = Customer::get();
    return view('customer.index',compact('customer'));
    }

    public function create(){
        return view('customer.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'date_of_birth' => 'required',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($validated) {
            $avatar = $request->file('avatar');
            $avatarName = time() . 'testimonial.' . $avatar->getClientOriginalExtension();
            $destinationPath = base_path('../aluniquefurniture_uploads/customers/');
            $avatar->move($destinationPath, $avatarName);
            $project = Customer::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'date_of_birth' => $request->date_of_birth,
                'gender' => $request->gender,
                'phone' => $request->phone,
                'image' => $avatarName,
                'note' => $request->note,
            ]);
            return redirect()->route('customer.index')->with('success', 'Customer added successfully.');
        } else {
            return redirect()->back()->withErrors($validated)->withInput();
        }
    }
}
