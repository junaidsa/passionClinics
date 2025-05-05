<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function blogs()
    {
        $blogs = Blog::latest()->get();
        return view('front.blogs', compact('blogs'));
    }



    public function index()
    {
        $blog = Blog::orderBy('id', 'ASC')->get();
        return view('blogs.index', compact('blog'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'short_description' => 'required|string|max:255',
            'bolg_description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($validated) {
            $document = $request->file('image');
            $avatarName = time() . 'blogs.' . $document->getClientOriginalExtension();
            $destinationPath = base_path('../aluniquefurniture_uploads/blogs/');
            $document->move($destinationPath, $avatarName);
            $blog = Blog::create([
                'image' => $avatarName,
                'short_description' => $request->short_description,
                'description' => $request->bolg_description,
            ]);

            return redirect()->route('blog.index')->with('success', 'Blogs added successfully.');
        } else {
            return redirect()->back()->withErrors($validated)->withInput();
        }
    }

    public function Blogedit($id)
    {
        $blog = Blog::find($id);
        return view('blogs.edit', compact('blog'));
    }

    public function blogUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'short_description' => 'required|string|max:255',
            'bolg_description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $blog = Blog::findOrFail($id);

        if ($request->hasFile('image')) {
            $oldImagePath = base_path('../aluniquefurniture_uploads/blogs/' . $blog->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }


            $document = $request->file('image');
            $avatarName = time() . 'blogs.' . $document->getClientOriginalExtension();
            $destinationPath = base_path('../aluniquefurniture_uploads/blogs/');
            $document->move($destinationPath, $avatarName);

            $blog->image = $avatarName;
        }

        $blog->short_description = $request->short_description;
        $blog->description = $request->bolg_description;
        $blog->save();

        return redirect()->route('blog.index')->with('success', 'Blog updated successfully.');
    }


    public function Blogdestroy($id)
    {
        $blog = Blog::find($id);
        if ($blog) {
            $blog->delete();
            return response()->json(['success' => 'Blog deleted successfully.']);
        } else {
            return response()->json(['error' => 'Blog not found.'], 404);
        }
    }
}
