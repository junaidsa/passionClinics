<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Amenities;
use App\Models\Faq;
use App\Models\Featured;
use App\Models\Galleries;
use App\Models\Projects;
use App\Models\Service;
use App\Models\ServiceFeature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::OrderBy('id', 'DESC')->get();
        return view('service.index', compact('services'));
    }
    public function create()
    {
        return view('service.create');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'price' => 'required',
            'description_ar' => 'required',
            'description_en' => 'required',
            'short_description_en' => 'required',
            'short_description_ar' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'main_image' => 'required|image', // optionally check if it's an image
            'video_thumbnail' => 'nullable', // if optional
            'video_url' => 'nullable|url', // if optional
        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $mainImg = $request->file('main_image');
        $avatarName = time() . '_main_image.' . $mainImg->getClientOriginalExtension();
        $destinationPath = base_path('../aluniquefurniture_uploads/service/');
        $mainImg->move($destinationPath, $avatarName);
        $videoThumbnailName = null;
        if ($request->hasFile('video_thumbnail')) {
            $videoThumb = $request->file('video_thumbnail');
            $videoThumbnailName = time() . '_video_thumbnail.' . $videoThumb->getClientOriginalExtension();
            $videoThumb->move($destinationPath, $videoThumbnailName);
        }

        // Save to database
        $services = Service::create([
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'video_url' => $request->video_url,
            'price' => $request->price,
            'persons_count' => $request->persons_count,
            'discount' => $request->discount,
            'offer_type' => $request->offer_type,
            'main_image' => $avatarName,
            'video_thumbnail' => $videoThumbnailName,
            'description_en' => $request->description_en,
            'description_ar' => $request->description_ar,
            'short_description_ar' => $request->short_description_ar,
            'short_description_en' => $request->short_description_en,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);
        return redirect()->route('service.index')->with('success', 'Service added successfully.');
    }


    public function serviceEdit($id)
    {
        $service = Service::find($id);
        if ($service) {
            return view('service.edit', compact('service'));
        }
        abort('404');
    }

    public function serviceupdate(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'price' => 'required',
            'description_ar' => 'required',
            'description_en' => 'required',
            'short_description_en' => 'required',
            'short_description_ar' => 'required',
            'main_image' => 'nullable|image', // optionally check if it's an image
            'video_thumbnail' => 'nullable', // if optional
            'video_url' => 'nullable|url', // if optional
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $destinationPath = base_path('../aluniquefurniture_uploads/service/');
        $avatarName = $service->main_image;
        $videoThumbnailName = $service->video_thumbnail;

        if ($request->hasFile('main_image')) {
            $mainImg = $request->file('main_image');
            $avatarName = time() . '_main_image.' . $mainImg->getClientOriginalExtension();
            $mainImg->move($destinationPath, $avatarName);
            if ($service->main_image && file_exists($destinationPath . $service->main_image)) {
                unlink($destinationPath . $service->main_image);
            }
        }

        if ($request->hasFile('video_thumbnail')) {
            $videoThumb = $request->file('video_thumbnail');
            $videoThumbnailName = time() . '_video_thumbnail.' . $videoThumb->getClientOriginalExtension();
            $videoThumb->move($destinationPath, $videoThumbnailName);

            if ($service->video_thumbnail && file_exists($destinationPath . $service->video_thumbnail)) {
                unlink($destinationPath . $service->video_thumbnail);
            }
        }

        $service->update([
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'video_url' => $request->video_url,
            'price' => $request->price,
            'persons_count' => $request->persons_count,
            'discount' => $request->discount,
            'offer_type' => $request->offer_type,
            'main_image' => $avatarName,
            'video_thumbnail' => $videoThumbnailName,
            'description_en' => $request->description_en,
            'description_ar' => $request->description_ar,
            'short_description_ar' => $request->short_description_ar,
            'short_description_en' => $request->short_description_en,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        return redirect()->route('service.index')->with('success', 'Service updated successfully.');
    }


    public function featured($id)
    {
        $featured = ServiceFeature::where('service_id', $id)->get();
        return view('service.featured', compact('id', 'featured'));
    }




    public function storeFeatured(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $avatar = $request->file('icon');
        $iconName = time() . 'features.' . $avatar->getClientOriginalExtension();
        $destinationPath = base_path('../aluniquefurniture_uploads/features/');
        $avatar->move($destinationPath, $iconName);

        ServiceFeature::create([
            'service_id' => $request->id,
            'title' => $request->title,
            'description' => $request->description,
            'icon' => $iconName,
        ]);

        return back()->with('success', 'Features Created successfully.');
    }
    public function storeFaq(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'question' => 'required|string|max:255',
            'answer' => 'required|string|max:255',
        ]);
        if ($validator->fails()) {
            dd($validator);
            return redirect()->back()->withErrors($validator)->withInput();
        }
        Faq::create([
            'service_id' => $request->id,
            'question' => $request->question,
            'answer' => $request->answer,
        ]);
        return back()->with('success', 'FAQ Created successfully.');
    }


    public function deleteFeature($id)
    {
        $serviceFeature = ServiceFeature::findOrFail($id);
        $serviceFeature->delete();

        return response()->json(['success' => true]);
    }

    public function faq($id)
    {
        $faq = faq::where('service_id', $id)->get();
        return view('service.faq', compact('id', 'faq'));
    }
    public function deletefaq($faq_id)
    {
        $faq = Faq::findOrFail($faq_id);
        $service_id = $faq->service_id; // Store service_id before deleting
        $faq->delete();

        return redirect()->route('service.faq', $service_id)->with('success', 'FAQ deleted successfully!');
    }

    public function serviceDestroy($id)
    {
        $service = Service::find($id);
        if ($service) {
            $service->delete();
            return response()->json(['success' => 'Service deleted successfully.']);
        } else {
            return response()->json(['error' => 'Service not found.'], 404);
        }
    }
}
