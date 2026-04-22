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
       View::composer('*', function ($view) {

        $menuItems = MenuItem::with('page')->get();

        $view->with('menuItems', $menuItems);
    });
    
    }

}   
