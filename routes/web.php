<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use PHPUnit\Architecture\Services\ServiceContainer;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use App\Http\Middleware\SetLocale;
use App\Models\Setting;

//  Files Routeing
Route::get('/fix-cache', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    return 'Cache cleared';
});
Route::middleware([
    SetLocale::class,
])->group(function () {

    Route::get('/get-slots-by-available', [AppointmentController::class, 'availableSlots']);
    Route::post('/set-language', [LanguageController::class, 'setLanguage'])->name('language.set');
    Route::get('/', [Homecontroller::class, 'home'])->name('home');
    Route::get('/about', [Homecontroller::class, 'about'])->name('front.about');
    Route::get('/contact', [Homecontroller::class, 'contact_us'])->name('front.contact');
    Route::post('/contact_form/insert', [HomeController::class, 'insertContact'])->name('contact.insert');
    Route::get('/service/{id}', [Homecontroller::class, 'service'])->name('front.service.single');
    Route::get('/services', [Homecontroller::class, 'services'])->name('front.services');
    Route::get('/offers', [Homecontroller::class, 'offers'])->name('front.offers');
    Route::get('/teams', [Homecontroller::class, 'teams'])->name('front.teams');
    Route::get('/team/{id}', [TeamController::class, 'team_profile'])->name('front.team');
    Route::get('/admin/dashboard', [Homecontroller::class, 'dashboard'])->name('dashboard');
    Route::get('/e-clinic', [Homecontroller::class, 'clinic'])->name('front.clinic');
    Route::get('/clinic/appointment/{id}', [Homecontroller::class, 'clinicAppointment'])->name('front.appointment');
    Route::get('/profile/update/{id}', [HomeController::class, 'profile'])->name('front.profile');
    Route::post('/update/profile/{id}', [HomeController::class, 'profileUpdate'])->name('front.profile.update');
    Route::post('/appointment/store', [HomeController::class, 'appointmentStore'])->name('front.appointment.store');
    Route::post('/profile/update-password/{id}', [HomeController::class, 'updatePassword'])->name('front.profile.updatePassword');
    Route::get('/blogs', [Homecontroller::class, 'blog'])->name('front.blogs');
    Route::post('/profile/update/{id}', [HomeController::class, 'updateProfile'])->name('front.profile.update');
    Route::post('/process-register', [Homecontroller::class, 'processRegistration'])->name('account.processRegistration');
    Route::post('/account/login', [Homecontroller::class, 'authenticate'])->name('login.ajax');
});

Route::middleware('auth')->group(function () {
    Route::get('/user/dashboard', [Homecontroller::class, 'userDashboard'])->name('front.dashboard');
        Route::get('/user/myappointments', [AppointmentController::class, 'myappointments'])->name('front.myappointments');
        Route::get('/user/mynotification', [HomeController::class, 'mynotification'])->name('front.mynotification');
        Route::get('/user/history', [HomeController::class, 'history'])->name('front.history');
        Route::get('/doctors', [Homecontroller::class, 'doctor'])->name('profile.doctors');
    Route::post('/user/profile', [Homecontroller::class, 'updateImage'])->name('profile.updateImage');
    Route::get('/admin/dashboard', [Homecontroller::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('admin/about', [HomeController::class, 'aboutEdit'])->name('about.edit');
    Route::post('about/update', [HomeController::class, 'aboutupdate'])->name('about.update');
    Route::get('admin/calendar', [HomeController::class, 'calendar'])->name('calendar.show');
    Route::get('admin/teams/create', [TeamController::class, 'create'])->name('testimonial.create');
    Route::put('admin/teams/{id}', [TeamController::class, 'update'])->name('admin.teams.update');
    Route::get('admin/teams', [TeamController::class, 'index'])->name('teams.index');
    Route::post('admin/teams/store', [TeamController::class, 'store'])->name('teams.store');
    Route::get('admin/teams/edit/{id}', [TeamController::class, 'edit'])->name('teams.edit');
    Route::delete('admin/teams/delete/{id}', [TeamController::class, 'delete'])->name('teams.delete');
    Route::post('/admin/testimonials/store', [TestimonialController::class, 'store'])->name('testimonials.store');
    Route::post('/admin/testimonials/update', [TestimonialController::class, 'update'])->name('testimonials.update');
    Route::get('admin/testimonials', [TestimonialController::class, 'index'])->name('testimonial.index');
    Route::get('admin/testimonials/create', [TestimonialController::class, 'create'])->name('testimonial.create');
    Route::get('admin/testimonial/delete/{id}', [TestimonialController::class, 'delete'])->name('testimonial.delete');
    Route::get('admin/testimonial/edit/{id}', [TestimonialController::class, 'edit'])->name('testimonial.edit');
    Route::put('/admin/testimonial/update/{id}', [TestimonialController::class, 'update'])->name('testimonial.update');
    Route::delete('admin/testimonial/delete/{id}', [TestimonialController::class, 'delete'])->name('testimonial.delete');
    Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/blog/edit/{id}', [BlogController::class, 'blogEdit'])->name('blog.edit');
    Route::post('/blog/update/{id}', [BlogController::class, 'blogUpdate'])->name('blog.update');
    Route::delete('/blog/delete/{id}', [BlogController::class, 'Blogdestroy'])->name('blog.destroy');
    Route::get('admin/service/create', [ServiceController::class, 'create'])->name('service.create');
    Route::post('/admin/service/store', [ServiceController::class, 'store'])->name('service.store');
    Route::get('admin/services', [ServiceController::class, 'index'])->name('service.index');
    Route::post('admin/facility/upload', [HomeController::class, 'uploadFacility'])->name('admin.facility.upload');
    Route::delete('admin/facility/delete/{id}', [HomeController::class, 'deleteFacility'])->name('admin.facility.delete');
    Route::get('admin/facility/create', [HomeController::class, 'createFacility'])->name('admin.facility.create');
    Route::get('admin/difference/create', [HomeController::class, 'createDifference'])->name('admin.difference.create');
    Route::post('admin/difference/upload', [HomeController::class, 'uploadDifference'])->name('admin.difference.upload');
    Route::delete('admin/difference/delete/{id}', [HomeController::class, 'deleteDifference'])->name('admin.difference.delete');
    Route::get('admin/contact/list', [HomeController::class, 'contact_list'])->name('admin.contact.list');
    Route::get('admin/about_us', [HomeController::class, 'about_us'])->name('admin.about.us');
    Route::get('/admin/service/featured/{id}', [ServiceController::class, 'featured'])->name('service.featured');
    Route::post('admin/service/featured/store', [ServiceController::class, 'storeFeatured'])->name('service.featured.store');
    Route::delete('admin/feature/delete/{id}', [ServiceController::class, 'deleteFeature'])->name('feature.destroy');
    Route::delete('admin/faq/delete/{id}', [ServiceController::class, 'deletefaq'])->name('faq.destroy');
    Route::get('admin/contact/delete/{id}', [SettingController::class, 'contactDestroy'])->name('contact.destroy');
    Route::post('admin/service/faq/store', [ServiceController::class, 'storeFaq'])->name('service.faq.store');
    Route::get('/admin/service/faq/{id}', [ServiceController::class, 'faq'])->name('service.faq');
    Route::get('/admin/service/edit/{id}', [ServiceController::class, 'serviceEdit'])->name('service.edit');
    Route::Post('/admin/service/update/{id}', [ServiceController::class, 'serviceupdate'])->name('service.update');
    Route::delete('/admin/service/delete/{id}', [ServiceController::class, 'serviceDestroy'])->name('service.destroy');
    Route::post('admin/service/featured/store', [ServiceController::class, 'storeFeatured'])->name('service.featured.store');
    Route::get('admin/customers', [CustomerController::class, 'index'])->name('customer.index');
    Route::post('admin/customer/store', [CustomerController::class, 'store'])->name('customer.store');
    Route::get('admin/customer/create', [CustomerController::class, 'create'])->name('customer.create');
    Route::get('admin/customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
    Route::put('/admin/customer/update/{id}', [CustomerController::class, 'update'])->name('customer.update');
    Route::delete('/admin/customer/delete/{id}', [CustomerController::class, 'destroy'])->name('customer.destroy');
    Route::get('admin/locations', [SettingController::class, 'viewLocation'])->name('location.index');
    Route::delete('/admin/locations/delete/{id}', [SettingController::class, 'locationsDestroy'])->name('locations.destroy');
    Route::get('admin/location/create', [SettingController::class, 'createLocation'])->name('location.create');
    Route::post('admin/location/store', [SettingController::class, 'storeLocation'])->name('location.store');
    Route::get('admin/location/edit/{id}', [SettingController::class, 'editLocation'])->name('location.edit');
    Route::put('/admin/location/update/{id}', [SettingController::class, 'updateLocation'])->name('location.update');
    Route::get('admin/setting', [SettingController::class, 'index'])->name('setting.index');
    Route::post('admin/setting/update/{id}', [SettingController::class, 'update'])->name('setting.update');
    Route::get('/get-staff-by-service/{id}', [AppointmentController::class, 'getStaffByService']);
    Route::post('/admin/appointment/store', [AppointmentController::class, 'store'])->name('appointment.store');
    Route::get('/appointments/list', [AppointmentController::class, 'getappointments'])->name('appointment.get');
    Route::delete('/admin/appointments/delete/{id}', [AppointmentController::class, 'destroy'])->name('appointment.destroy');
    Route::get('admin/appointments', [AppointmentController::class, 'index'])->name('appointment.index');
    Route::get('admin/permissions', [SettingController::class, 'permissions'])->name('setting.permissions');
    Route::get('/appointments/list', [AppointmentController::class, 'getappointments'])->name('appointment.get');
});
require __DIR__ . '/auth.php';
Route::prefix('/file')->group(function () {
    Route::get('/testimonial/{filename}', fn($filename) => serveFile('testimonials', $filename));
    Route::get('/service/{filename}', fn($filename) => serveFile('service', $filename));
    Route::get('/blog/{filename}', fn($filename) => serveFile('blogs', $filename));
    Route::get('/facility/{filename}', fn($filename) => serveFile('facilits', $filename));
    Route::get('/difference/{filename}', fn($filename) => serveFile('difference', $filename));
    Route::get('/video/{filename}', fn($filename) => serveFile('video', $filename));
    Route::get('/features/{filename}', fn($filename) => serveFile('features', $filename));
    Route::get('/about/{filename}', fn($filename) => serveFile('pages', $filename));
    Route::get('/dr/{filename}', fn($filename) => serveFile('profile', $filename));
    Route::get('/users/{filename}', fn($filename) => serveFile('users', $filename));
    Route::get('/customer/{filename}', fn($filename) => serveFile('customers', $filename));
    Route::get('/location/{filename}', fn($filename) => serveFile('locations', $filename));
});

// Reusable file-serving function
function serveFile($folder, $filename)
{
    $path = base_path("../aluniquefurniture_uploads/{$folder}/{$filename}");

    if (!File::exists($path)) {
        abort(404);
    }

    return response()->file($path);
}
