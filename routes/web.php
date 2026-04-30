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
use App\Http\Controllers\PageController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MenuItemController;
use App\Http\Controllers\BotmanController;


use BotMan\BotMan\BotMan;


use App\Models\Page;

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

// sitemap and robots assets
Route::get('/sitemap.xml', function () {
    return response()->file(public_path('sitemap.xml'), [
        'Content-Type' => 'application/xml; charset=UTF-8',
    ]);
});

Route::get('/ror.xml', function () {
    return response()->file(public_path('ror.xml'), [
        'Content-Type' => 'application/xml; charset=UTF-8',
    ]);
});

Route::get('/sitemap.html', function () {
    return response()->file(public_path('sitemap.html'), [
        'Content-Type' => 'text/html; charset=UTF-8',
    ]);
});

Route::get('/urllist.txt', function () {
    return response()->file(public_path('urllist.txt'), [
        'Content-Type' => 'text/plain; charset=UTF-8',
    ]);
});

Route::get('/robots.txt', function () {
    return response()->file(public_path('robots.txt'), [
        'Content-Type' => 'text/plain; charset=UTF-8',
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
Route::get('/blog/{slug}', [HomeController::class, 'blog_detail'])->name('frontend.blog-detail');
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
Route::get('/page/{slug}', [HomeController::class, 'page'])->name('frontend.page');




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
    Route::get('/leads', [DashboardController::class, 'leads'])
        ->name('leads.index');
    Route::get('/contact-leads', [DashboardController::class, 'contacts'])
        ->name('contacts.index');

});

Route::middleware(['auth', 'admin.role'])->group(function () {
    Route::get('/sections', [SectionController::class, 'index'])->name('sections.index');

    Route::post('/pages/{page}/sections', [SectionController::class, 'store'])->name('pages.sections.store');
    Route::get('/pages/{page}/sections/{section}/edit', [SectionController::class, 'edit'])->name('pages.sections.edit');
    Route::put('/pages/{page}/sections/{section}', [SectionController::class, 'update'])->name('pages.sections.update');
    Route::delete('/pages/{page}/sections/{section}', [SectionController::class, 'destroy'])->name('pages.sections.destroy');
    Route::post('/pages/{page}/sections/reorder', [SectionController::class, 'reorder'])->name('pages.sections.reorder');

    Route::post('/pages/{page}/sections/{section}/items', [SectionController::class, 'storeItem'])->name('pages.section-items.store');
    Route::put('/pages/{page}/sections/{section}/items/{item}', [SectionController::class, 'updateItem'])->name('pages.section-items.update');
    Route::delete('/pages/{page}/sections/{section}/items/{item}', [SectionController::class, 'destroyItem'])->name('pages.section-items.destroy');
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
Route::get('/blog/category/{slug}', [BlogController::class, 'category']);

Route::resource('careers', CareerController::class);
Route::resource('projects', ProjectController::class);
Route::resource('services', ServiceController::class);

Route::resource('service-details', ServiceDetailController::class);

Route::resource('pages', PageController::class);
Route::resource('menu-items', MenuItemController::class);

// Route::prefix('banner')->group(function () {

//     Route::get('hero', [HeroController::class, 'index'])->name('hero.index');
//     Route::get('hero/create', [HeroController::class, 'create'])->name('hero.create');
//     Route::post('hero/store', [HeroController::class, 'store'])->name('hero.store');

//     Route::get('hero/{id}/edit', [HeroController::class, 'edit'])->name('hero.edit');
//     Route::put('hero/{id}', [HeroController::class, 'update'])->name('hero.update');

//     Route::delete('hero/{id}', [HeroController::class, 'destroy'])->name('hero.destroy');
// });

});




Route::match(['get', 'post'], '/botman', [BotmanController::class, 'handle'])
    ->name('botman.controller-handle');

Route::post('/botman/web-chat', [BotmanController::class, 'webChat'])
    ->name('botman.controller-web-chat');

require __DIR__.'/auth.php';
