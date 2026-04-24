<?php

namespace App\Providers;
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

        $menuItems = MenuItem::with(['page', 'children.page'])
            ->where('is_active', 1)
            ->whereNull('parent_id') // only main menu
            ->orderBy('order')
            ->get();

        $view->with('menuItems', $menuItems);
    });
    }

}   
