<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\CareerApplicationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\ServiceDetailController;


// Route::get('/', function () {
//     return view('welcome');
// });

// video route for caching and performance:;

Route::get('/video/{file}', function ($file) {

    $path = public_path("assets/images/$file");

    if (!file_exists($path)) {
        abort(404);
    }

    return response()->file($path, [
        'Cache-Control' => 'public, max-age=31536000, immutable'
    ]);

});

// frontend::
Route::get('/', [HomeController::class, 'index'])->name('frontend.index');
Route::get('/about', [HomeController::class, 'about'])->name('frontend.about');
Route::get('/service', [HomeController::class, 'service'])->name('frontend.service');
Route::get('/project', [HomeController::class, 'project'])->name('frontend.project');
Route::get('/contacts', [HomeController::class, 'contact'])->name('frontend.contact');
Route::get('/process', [HomeController::class, 'process'])->name('frontend.process');
Route::get('/packages', [HomeController::class, 'packages'])->name('frontend.packages');
Route::get('/career', [HomeController::class, 'career'])->name('frontend.career');
Route::get('/blog', [HomeController::class, 'blog'])->name('frontend.blog');
Route::get('/blog_detail', [HomeController::class, 'blog_detail'])->name('frontend.blog-detail');
Route::get('/terms', [HomeController::class, 'terms'])->name('frontend.terms');
Route::get('/privacy_policy', [HomeController::class, 'privacy_policy'])->name('frontend.privacy_policy');
Route::get('/faq', [HomeController::class, 'faq'])->name('frontend.faq');
Route::get('/help', [HomeController::class, 'help'])->name('frontend.help');
Route::get('/digital_marketing', [HomeController::class, 'digital_marketing'])->name('frontend.digital_marketing');
Route::get('/software_development', [HomeController::class, 'software_development'])->name('frontend.software_development');
Route::get('/social_media', [HomeController::class, 'social_media'])->name('frontend.social_media');
Route::get('/seo', [HomeController::class, 'seo'])->name('frontend.seo');
Route::get('/google_ads', [HomeController::class, 'google_ads'])->name('frontend.ads');
Route::get('/meta_ads', [HomeController::class, 'meta_ads'])->name('frontend.meta_ads');
Route::get('/content_marketing', [HomeController::class, 'content_marketing'])->name('frontend.content_marketing');
Route::get('/local_seo', [HomeController::class, 'local_seo'])->name('frontend.local_seo');
Route::get('/custom_web', [HomeController::class, 'custom_web'])->name('frontend.custom_web');
Route::get('/web', [HomeController::class, 'custom_web'])->name('frontend.custom_web');




// smtp contact
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::post('/career/apply', [CareerApplicationController::class, 'store'])->name('career.apply');
// Route::post('/inquiry/leads', [CareerApplicationController::class, 'store'])->name('contact.send');



// DASHBOARD::

// Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
// Route::resource('categories', CategoryController::class);

// Route::resource('solutions', SolutionController::class);
// Route::get('/solutions/{solution}', [SolutionController::class, 'show'])
//     ->name('solutions.show');

// Route::resource('blogs', BlogController::class);
// Route::resource('careers', CareerController::class);
// Route::resource('projects', ProjectController::class);
// Route::resource('services', ServiceController::class);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('categories', CategoryController::class);

Route::resource('solutions', SolutionController::class);
Route::get('/solutions/{solution}', [SolutionController::class, 'show'])
    ->name('solutions.show');

Route::resource('blogs', BlogController::class);
Route::resource('careers', CareerController::class);
Route::resource('projects', ProjectController::class);
Route::resource('services', ServiceController::class);

Route::resource('service-details', ServiceDetailController::class);

});

require __DIR__.'/auth.php';
