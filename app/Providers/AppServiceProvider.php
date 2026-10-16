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

        // 🚀 Ping IndexNow automatically when public content models are saved
        \App\Models\Page::saved(function (\App\Models\Page $page) {
            if (!empty($page->slug)) {
                \App\Services\IndexNowService::ping(url('/page/' . $page->slug));
            }
        });

        \App\Models\Blog::saved(function (\App\Models\Blog $blog) {
            if (!empty($blog->slug) && ($blog->is_published ?? true)) {
                \App\Services\IndexNowService::ping(url('/blog/' . $blog->slug));
            }
        });

        \App\Models\Project::saved(function (\App\Models\Project $project) {
            if (!empty($project->slug)) {
                \App\Services\IndexNowService::ping(url('/project/' . $project->slug));
            }
        });
    }

}   
