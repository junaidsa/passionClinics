<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use App\Models\Testimonials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonial = Testimonials::OrderBy('id', 'DESC')->get();
        return view('testimonial.index', compact('testimonial'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required',
            'message' => 'required',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($validated) {
            $avatar = $request->file('avatar');
            $avatarName = time() . 'testimonial.' . $avatar->getClientOriginalExtension();
            $destinationPath = base_path('../aluniquefurniture_uploads/testimonials/');
            $avatar->move($destinationPath, $avatarName);
            $project = Testimonials::create([
                'name' => $request->name,
                'designation' => $request->designation,
                'avatar' => $avatarName,
                'message' => $request->message,
            ]);
            return redirect()->route('testimonial.index')->with('success', 'Testimonials added successfully.');
        } else {
            return redirect()->back()->withErrors($validated)->withInput();
        }
    }
    public function create()
    {
        return view('testimonial.create');
    }
    public function edit($id)
    {
        $testimonial = Testimonials::find($id);
        return view('testimonial.edit', compact('id', 'testimonial'));
    }
    public function testimonialupdate(Request $request)
    {

        $validated = $request->validate([
            'id' => 'required|exists:testimonials,id',
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'message' => 'required|string',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $testimonial = Testimonials::findOrFail($validated['id']);

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $avatarName = time() . '_testimonial.' . $avatar->getClientOriginalExtension();
            $destinationPath = public_path('aluniquefurniture_uploads/testimonials');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            // Move the new file
            $avatar->move($destinationPath, $avatarName);

            // Delete old file safely
            $oldAvatarPath = $destinationPath . '/' . $testimonial->avatar;
            if (!empty($testimonial->avatar) && file_exists($oldAvatarPath)) {
                unlink($oldAvatarPath);
            }

            // Save new avatar name
            $testimonial->avatar = $avatarName;
        }

        $testimonial->name = $validated['name'];
        $testimonial->designation = $validated['designation'];
        $testimonial->message = $validated['message'];
        $testimonial->save();

        return redirect()->route('testimonial.index')->with('success', 'Testimonial updated successfully.');
    }

    public function delete($id)
    {
        $product = Testimonials::find($id);
        if ($product) {
            $product->delete();
            return response()->json(['success' => 'Testimonial deleted successfully.']);
        } else {
            return response()->json(['error' => 'Testimonial not found.'], 404);
        }
    }
}
