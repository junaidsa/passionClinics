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

    public function index(){
        $services = Service::get();
        return view('service.index',compact('services'));
    }
    public function create(){
        return view('service.create');
    }
    public function store(Request $request)
    {
        // Basic validation first
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            'discripation' => 'required',
            'short_discripation' => 'required',
            'main_image' => 'required|file|image',
            'video_url' => 'required|url',
            'video_thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $mainImg = $request->file('main_image');
        $avatarName = time().'_main_image.'.$mainImg->getClientOriginalExtension();
        $destinationPath = base_path('../aluniquefurniture_uploads/service/');
        $mainImg->move($destinationPath, $avatarName);
        $videoThumbnailName = null;
        if ($request->hasFile('video_thumbnail')) {
            $videoThumb = $request->file('video_thumbnail');
            $videoThumbnailName = time().'_video_thumbnail.'.$videoThumb->getClientOriginalExtension();
            $videoThumb->move($destinationPath, $videoThumbnailName);
        }

        // Save to database
        $services = Service::create([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'video_url' => $request->video_url,
            'main_image' => $avatarName,
            'video_thumbnail' => $videoThumbnailName,
            'description' => $request->discripation,
            'short_description' => $request->short_discripation,
        ]);

        return redirect()->route('service.create')->with('success', 'Service added successfully.');
    }


    public function edit($id){
    $project = Service::find($id);
    $galleries = DB::table('galleries')
    ->where('project_id', $id)
    ->select('id', 'image')
    ->get();
    if ($project) {
        return view('projects.edit',compact('project', 'galleries'));
    }
    abort('404');
    }
    public function update(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|exists:projects,id',
            'project_name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'discripation' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $project = Service::find($request->id);

        if ($request->hasFile('image')) {
            $document = $request->file('image');
            $name = now()->format('Y-m-d_H-i-s') . '-image';
            $file = $name . '.' . $document->getClientOriginalExtension();
            $targetDir = public_path('./files');
            $document->move($targetDir, $file);
            // Optional: delete old image if needed
            @unlink(public_path('./files/' . $project->image));
            $project->image = $file;
        }

        $project->project_name = $request->project_name;
        $project->title = $request->title;
        $project->video_url = $request->video_url;
        $project->discripation = $request->discripation;
        $project->save();

        return redirect()->route('project.index')->with('success', 'Project updated successfully.');
    }





// public function gallery($id){
//     $galleries = Galleries::where('project_id',$id)->get();

//     return view('projects.gallery',compact('galleries','id'));
// }
// public function deleteGallery($id)
// {
//     $gallery = Galleries::findOrFail($id);
//     if(file_exists(public_path($gallery->image))){
//         unlink(public_path($gallery->image));
//     }
//     $gallery->delete();

//     return response()->json(['success' => true]);
// }
// public function uploadGallery(Request $request)
// {
//     if($request->hasFile('attachment')) {
//         foreach($request->file('attachment') as $file) {
//             $filename = time().'_'.$file->getClientOriginalName();
//             $file->move(public_path('projects/galleries'), $filename);

//             Galleries::create([
//                 'project_id' => $request->project_id,
//                 'image' => 'public/projects/galleries/' . $filename,
//             ]);
//         }
//     }

//     return response()->json(['success' => true]);
// }
// public function amenitles($id){
//     $amenitles = Amenities::where('project_id',$id)->get();

//     return view('projects.amenitles',compact('amenitles','id'));
// }
// public function uploadAmenitles(Request $request)
// {
//     $request->validate([
//         'title' => 'required|string|max:255',
//         'attachment' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240'
//     ]);

//     $filename = null;
//     if ($request->hasFile('attachment')) {
//         $file = $request->file('attachment');
//         $filename = 'public/project/amenities/' . time() . '_' . $file->getClientOriginalName();
//         $file->move(public_path('project/amenities'), basename($filename));
//     }

//     Amenities::create([
//         'project_id' => $request->project_id,
//         'title' => $request->title,
//         'icon' => $filename,
//     ]);

//     return response()->json(['success' => true]);
//     return redirect()->back()->with('success', 'About Update Successfully');
// }

// public function deleteAmenitles($id)
// {
//     $item = Amenities::findOrFail($id);
//     if (file_exists(public_path($item->icon))) {
//         unlink(public_path($item->icon));
//     }
//     $item->delete();

//     return response()->json(['success' => true]);
// }

public function featured($id)
{
    $featured = ServiceFeature::where('service_id',$id)->get();
    return view('service.featured',compact('id','featured'));
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
    $iconName = time().'features.'.$avatar->getClientOriginalExtension();
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

public function faq($id){
    $faq = faq::where('service_id',$id)->get();
    return view('service.faq',compact('id','faq'));
}
public function deletefaq($faq_id)
{
    $faq = Faq::findOrFail($faq_id);
    $service_id = $faq->service_id; // Store service_id before deleting
    $faq->delete();

    return redirect()->route('service.faq', $service_id)->with('success', 'FAQ deleted successfully!');
}
}
