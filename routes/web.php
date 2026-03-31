<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::get('/techstack', [HomeController::class, 'techstack'])->name('frontend.techstack');
Route::get('/career', [HomeController::class, 'career'])->name('frontend.career');

