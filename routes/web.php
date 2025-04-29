<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use PHPUnit\Architecture\Services\ServiceContainer;

//  Files Routeing

Route::get('/',[Homecontroller::class,'home'])->name('home');
Route::get('/admin/dashboard',[Homecontroller::class,'dashboard'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard',[Homecontroller::class,'dashboard'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('admin/about',[HomeController::class,'aboutEdit'])->name('about.edit');
    Route::post('about/update',[HomeController::class,'aboutupdate'])->name('about.update');
    // a
    Route::get('admin/testimonials/create',[TestimonialController::class,'create'])->name('testimonial.create');
    Route::post('/admin/testimonials/store',[TestimonialController::class,'store'])->name('testimonials.store');
    Route::post('/admin/testimonials/update',[TestimonialController::class,'update'])->name('testimonials.update');
    Route::get('admin/testimonials',[TestimonialController::class,'index'])->name('testimonial.index');
    Route::get('admin/testimonial/delete/{id}',[TestimonialController::class,'delete'])->name('testimonial.delete');
    Route::get('admin/testimonial/edit/{id}',[TestimonialController::class,'edit'])->name('testimonial.edit');
    Route::get('/blog',[BlogController::class,'index'])->name('blog.index');
    Route::get('/blog/create',[BlogController::class,'create'])->name('blog.create');
    Route::post('/blog/store',[BlogController::class,'store'])->name('blog.store');
    Route::get('/blog/edit/{id}',[BlogController::class,'blogEdit'])->name('blog.edit');
    Route::post('/blog/update/{id}',[BlogController::class,'blogUpdate'])->name('blog.update');
    Route::delete('/blog/delete/{id}', [BlogController::class, 'Blogdestroy'])->name('blog.destroy');
    Route::get('admin/service/create',[ServiceController::class,'create'])->name('service.create');
    Route::post('/admin/service/store',[ServiceController::class,'store'])->name('service.store');
    Route::get('admin/services',[ServiceController::class,'index'])->name('service.index');
    Route::post('admin/facility/upload', [HomeController::class, 'uploadFacility'])->name('admin.facility.upload');
    Route::delete('admin/facility/delete/{id}',[HomeController::class, 'deleteFacility'])->name('admin.facility.delete');
    Route::get('admin/facility/create',[HomeController::class,'createFacility'])->name('admin.facility.create');
    Route::get('admin/contact/list',[HomeController::class,'contact_list'])->name('admin.contact.list');
    Route::get('admin/about_us',[HomeController::class,'about_us'])->name('admin.about.us');
    Route::get('/admin/service/featured/{id}',[ServiceController::class,'featured'])->name('service.featured');
    Route::post('admin/service/featured/store',[ServiceController::class,'storeFeatured'])->name('service.featured.store');
    Route::delete('admin/feature/delete/{id}', [ServiceController::class, 'deleteFeature'])->name('feature.destroy');
    Route::delete('admin/faq/delete/{id}', [ServiceController::class, 'deletefaq'])->name('faq.destroy');
    Route::post('admin/service/faq/store',[ServiceController::class,'storeFaq'])->name('service.faq.store');
    Route::get('/admin/service/faq/{id}',[ServiceController::class,'faq'])->name('service.faq');


});
require __DIR__.'/auth.php';

Route::prefix('/file')->group(function () {
    Route::get('/testimonial/{filename}', fn($filename) => serveFile('testimonials', $filename));
    Route::get('/service/{filename}', fn($filename) => serveFile('service', $filename));
    Route::get('/blog/{filename}', fn($filename) => serveFile('blogs', $filename));
    Route::get('/facility/{filename}', fn($filename) => serveFile('facilits', $filename));
    Route::get('/video/{filename}', fn($filename) => serveFile('service', $filename)); // service folder again
    Route::get('/features/{filename}', fn($filename) => serveFile('features', $filename));
    Route::get('/about/{filename}', fn($filename) => serveFile('pages', $filename));
});

// Reusable file-serving function
function serveFile($folder, $filename) {
    $path = base_path("../aluniquefurniture_uploads/{$folder}/{$filename}");

    if (!File::exists($path)) {
        abort(404);
    }

    return response()->file($path);
}
