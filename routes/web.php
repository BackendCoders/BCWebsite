<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;

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
Route::get('/contact', [HomeController::class, 'contact'])->name('frontend.contact');
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




// Dashboard:::::::::::
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.dashbaord');

Route::prefix('dashboard')->name('dashboard.')->group(function () {

    Route::resource('category', CategoryController::class);
    Route::resource('blog', BlogController::class);
 
});