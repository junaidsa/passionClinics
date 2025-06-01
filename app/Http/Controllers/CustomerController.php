<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        $customer = Customer::orderBy('id','DESC')->get();
        return view('customer.index', compact('customer'));
    }

    public function create()
    {
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
            'avatar' => 'required|image|max:100|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($validated) {
            $avatar = $request->file('avatar');
            $avatarName = time() . 'customer.' . $avatar->getClientOriginalExtension();
            $destinationPath = base_path('../aluniquefurniture_uploads/customers/');
            $avatar->move($destinationPath, $avatarName);
            $customer = new Customer();
            $customer->first_name = $request->first_name;
            $customer->last_name = $request->last_name;
            $customer->email = $request->email;
            $customer->date_of_birth = $request->date_of_birth;
            $customer->gender = $request->gender;
            $customer->phone = $request->phone;
            $customer->image = $avatarName;
            $customer->note = $request->note;
            $customer->save();
            return redirect()->route('customer.index')->with('success', 'Customer added successfully.');
        } else {
            return redirect()->back()->withErrors($validated)->withInput();
        }
    }
    public function edit($id) {
        $customer = Customer::findOrFail($id);
        return view('customer.edit', compact('customer'));
    }
    public function update(Request $request, $id)
{
    $validated = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'gender' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'date_of_birth' => 'required|date',
        'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    $customer = Customer::findOrFail($id);

    if ($request->hasFile('avatar')) {
        $avatar = $request->file('avatar');
        $avatarName = time() . 'customer.' . $avatar->getClientOriginalExtension();
        $destinationPath = base_path('../aluniquefurniture_uploads/customers/');
        $avatar->move($destinationPath, $avatarName);

        $customer->image = $avatarName;
    }

    $customer->update([
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'email' => $request->email,
        'date_of_birth' => $request->date_of_birth,
        'gender' => $request->gender,
        'phone' => $request->phone,
        'note' => $request->note,
        'image' => $customer->image
    ]);

    return redirect()->route('customer.index')->with('success', 'Customer updated successfully.');
}
public function destroy($id)
    {
        $customer = Customer::find($id);
        if ($customer) {
            $customer->delete();
            return response()->json(['success' => 'Customer deleted successfully.']);
        } else {
            return response()->json(['error' => 'Customer not found.'], 404);
        }
    }

}
