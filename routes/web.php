<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServiceCategoryController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ServiceCategoryController as AdminServiceCategoryController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\ContactController;

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

// smtp contact
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');



Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.dashboard');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'loginForm'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login']);

    Route::middleware(['auth', 'admin.role'])->group(function () {
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

        Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');

        Route::resource('service-categories', AdminServiceCategoryController::class)->except(['show']);
        Route::post('service-categories/{serviceCategory}/restore', [AdminServiceCategoryController::class, 'restore'])->name('service-categories.restore');
        Route::patch('service-categories/{serviceCategory}/toggle-status', [AdminServiceCategoryController::class, 'toggleStatus'])->name('service-categories.toggle-status');

        Route::resource('services', AdminServiceController::class)->except(['show']);
        Route::post('services/{service}/restore', [AdminServiceController::class, 'restore'])->name('services.restore');

        Route::resource('users', AdminUserController::class)->except(['show']);
        Route::post('users/{user}/restore', [AdminUserController::class, 'restore'])->name('users.restore');
    });
});
