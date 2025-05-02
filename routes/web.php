<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use PHPUnit\Architecture\Services\ServiceContainer;

//  Files Routeing
Route::get('/fix-cache', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    return 'Cache cleared';
});
Route::get('/',[Homecontroller::class,'home'])->name('home');
Route::get('/about',[Homecontroller::class,'about'])->name('front.about');
Route::get('/contact',[Homecontroller::class,'contact_us'])->name('front.contact');
Route::get('/contact_form/insert',[Homecontroller::class,'insertContact'])->name('contact.add');
Route::get('/service/{id}',[Homecontroller::class,'service'])->name('front.service.single');
Route::get('/services',[Homecontroller::class,'services'])->name('front.services');
Route::get('/teams',[Homecontroller::class,'teams'])->name('front.teams');
Route::get('/team/{id}',[TeamController::class,'team_profile'])->name('front.team');
Route::get('/admin/dashboard',[Homecontroller::class,'dashboard'])->name('dashboard');


    Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard',[Homecontroller::class,'dashboard'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('admin/about',[HomeController::class,'aboutEdit'])->name('about.edit');
    Route::post('about/update',[HomeController::class,'aboutupdate'])->name('about.update');
    Route::get('admin/calendar',[HomeController::class,'calendar'])->name('calendar.show');
    Route::get('admin/team/create',[TestimonialController::class,'create'])->name('testimonial.create');
    Route::get('admin/teams',[TeamController::class,'index'])->name('teams.index');
    Route::post('admin/teams/store',[TeamController::class,'store'])->name('teams.store');
    Route::get('admin/teams/edit/{id}',[TeamController::class,'edit'])->name('teams.edit');
    Route::post('/admin/testimonials/store',[TestimonialController::class,'store'])->name('testimonials.store');
    Route::post('/admin/testimonials/update',[TestimonialController::class,'update'])->name('testimonials.update');
    Route::get('admin/testimonials',[TestimonialController::class,'index'])->name('testimonial.index');
    Route::get('admin/testimonial/delete/{id}',[TestimonialController::class,'delete'])->name('testimonial.delete');
    Route::get('admin/testimonial/edit/{id}',[TestimonialController::class,'edit'])->name('testimonial.edit');
    Route::post('/admin/testimonials/update',[TestimonialController::class,'testimonialupdate'])->name('testimonials.update');
    Route::delete('admin/testimonial/delete/{id}', [TestimonialController::class, 'delete'])->name('testimonial.delete');
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
    Route::get('/admin/service/edit/{id}',[ServiceController::class,'serviceEdit'])->name('service.edit');
    Route::Post('/admin/service/update/{id}',[ServiceController::class,'serviceupdate'])->name('service.update');
    Route::delete('/admin/service/delete/{id}',[ServiceController::class,'serviceDestroy'])->name('service.destroy');
    Route::post('admin/service/featured/store',[ServiceController::class,'storeFeatured'])->name('service.featured.store');


    //  Customer
    Route::get('admin/customers',[CustomerController::class,'index'])->name('customer.index');
    Route::post('admin/customer/store',[CustomerController::class,'store'])->name('customer.store');

    Route::get('admin/customer/create',[CustomerController::class,'create'])->name('customer.create');

    // Locations
    Route::get('admin/locations',[SettingController::class,'viewLocation'])->name('location.index');
    Route::get('admin/location/create',[SettingController::class,'createLocation'])->name('location.create');
    Route::post('admin/location/store',[SettingController::class,'storeLocation'])->name('location.store');
    Route::get('admin/setting',[SettingController::class,'index'])->name('setting.index');




});
require __DIR__.'/auth.php';
Route::prefix('/file')->group(function () {
Route::get('/testimonial/{filename}', fn($filename) => serveFile('testimonials', $filename));
Route::get('/service/{filename}', fn($filename) => serveFile('service', $filename));
Route::get('/blog/{filename}', fn($filename) => serveFile('blogs', $filename));
Route::get('/facility/{filename}', fn($filename) => serveFile('facilits', $filename));
Route::get('/video/{filename}', fn($filename) => serveFile('service', $filename));
Route::get('/features/{filename}', fn($filename) => serveFile('features', $filename));
Route::get('/about/{filename}', fn($filename) => serveFile('pages', $filename));
Route::get('/dr/{filename}', fn($filename) => serveFile('profile', $filename));
Route::get('/customer/{filename}', fn($filename) => serveFile('customers', $filename));
Route::get('/location/{filename}', fn($filename) => serveFile('locations', $filename));
});

// Reusable file-serving function
function serveFile($folder, $filename) {
    $path = base_path("../aluniquefurniture_uploads/{$folder}/{$filename}");

    if (!File::exists($path)) {
        abort(404);
    }

    return response()->file($path);
}
