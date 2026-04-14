<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Admin\StatsController;
use App\Http\Controllers\Api\Admin\ServiceCategoryController;
use App\Http\Controllers\Api\Admin\ServiceController;
use App\Http\Controllers\Api\Admin\UserController;

Route::prefix('admin')
    ->middleware(['admin.api'])
    ->group(function () {
        Route::get('stats', [StatsController::class, 'index'])->name('api.admin.stats');
        Route::get('service-categories', [ServiceCategoryController::class, 'index'])->name('api.admin.service-categories');
        Route::get('services', [ServiceController::class, 'index'])->name('api.admin.services');
        Route::get('users', [UserController::class, 'index'])->name('api.admin.users');
    });
