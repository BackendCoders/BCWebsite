<?php

namespace App\Providers;
use App\Models\Page;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\MenuItem;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $solutionsMenu = MenuItem::with('children.children.page')
            ->where('title', 'Solutions')
            ->first();

        View::share('solutionsMenu', $solutionsMenu);
    }

}   
