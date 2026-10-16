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
    $urls = collect([
        ['loc' => url('/')],
        ['loc' => url('/about')],
        ['loc' => url('/service')],
        ['loc' => url('/project')],
        ['loc' => url('/demo')],
        ['loc' => url('/team')],
        ['loc' => url('/owner')],
        ['loc' => url('/process')],
        ['loc' => url('/packages')],
        ['loc' => url('/career')],
        ['loc' => url('/contact')],
        ['loc' => url('/blog')],
        ['loc' => url('/faq')],
        ['loc' => url('/help')],
        ['loc' => url('/terms')],
        ['loc' => url('/privacy-policy')],
        ['loc' => url('/seo')],
        ['loc' => url('/page/social-media-management')],
    ]);

    $looksLikeTest = static fn ($value) => preg_match('/(?:lorem|ipsum|test|sample|placeholder|rerum-pariatur|aspernatur-sit|voluptatem-delectus)/i', (string) $value) === 1;

    $urls = $urls->merge(\App\Models\Page::query()
        ->where('is_index', true)
        ->whereNotNull('slug')
        ->get(['slug', 'title', 'updated_at'])
        ->filter(fn ($page) => ! $looksLikeTest($page->slug) && ! $looksLikeTest($page->title)
            && ! in_array($page->slug, ['about', 'service', 'project', 'demo', 'team', 'owner', 'process', 'packages', 'career', 'contact', 'blog', 'faq', 'help', 'terms', 'privacy-policy', 'seo', 'seo-services'], true))
        ->reject(fn ($page) => in_array($page->slug, [
            'home',
            'about-backend-coders-software-digital-marketing-company-in-kanpur',
            'software-digital-marketing-company-in-kanpur',
            'seo-rocket-pro',
            'seo-rocket-pro-seo-audit-lead-generation-software',
            'faqs-backend-coders-india',
        ], true))
        ->map(fn ($page) => ['loc' => url('/page/'.$page->slug), 'lastmod' => $page->updated_at?->toAtomString()]));

    $urls = $urls->merge(\App\Models\Blog::query()
        ->where('is_published', true)
        ->get(['slug', 'title', 'content', 'updated_at', 'published_at', 'created_at'])
        ->filter(fn ($blog) => ! $looksLikeTest($blog->slug) && ! $looksLikeTest($blog->title) && filled(strip_tags((string) $blog->content)))
        ->map(fn ($blog) => ['loc' => url('/blog/'.$blog->slug), 'lastmod' => ($blog->updated_at ?: $blog->published_at ?: $blog->created_at)?->toAtomString()]));

    $urls = $urls->merge(\App\Models\Project::query()
        ->get(['title', 'updated_at'])
        ->filter(fn ($project) => ! $looksLikeTest($project->title))
        ->map(fn ($project) => ['loc' => url('/project/'.\Illuminate\Support\Str::slug($project->title)), 'lastmod' => $project->updated_at?->toAtomString()]));

    $xml = '<?xml version="1.0" encoding="UTF-8"?>'."\n".'<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
    foreach ($urls->unique('loc') as $item) {
        $lastModified = $item['lastmod'] ?? null;
        $xml .= '<url><loc>'.e($item['loc']).'</loc>'.($lastModified ? '<lastmod>'.$lastModified.'</lastmod>' : '').'</url>';
    }
    $xml .= '</urlset>';

    return response($xml, 200)->header('Content-Type', 'application/xml; charset=UTF-8');
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

Route::get('/llms.txt', function () {
    return response()->file(public_path('llms.txt'), [
        'Content-Type' => 'text/plain; charset=UTF-8',
    ]);
});

Route::get('/ai-catalog.json', function () {
    return response()->file(public_path('ai-catalog.json'), [
        'Content-Type' => 'application/json; charset=UTF-8',
    ]);
});

Route::get('/.well-known/ai-catalog.json', function () {
    return response()->file(public_path('.well-known/ai-catalog.json'), [
        'Content-Type' => 'application/json; charset=UTF-8',
    ]);
});

Route::get('/{key}.txt', function ($key) {
    $indexNowKey = config('services.indexnow.key', env('INDEXNOW_KEY', '8f3b92a1c4e74d6b95e2f183709acbc4'));
    if ($key === $indexNowKey) {
        return response($indexNowKey, 200, ['Content-Type' => 'text/plain; charset=UTF-8']);
    }
    abort(404);
})->where('key', '8f3b92a1c4e74d6b95e2f183709acbc4|[a-f0-9]{32}');

// frontend::
Route::get('/demo',[HomeController::class, 'demo'])->name('frontend.demo');

Route::get('/', [HomeController::class, 'index'])->name('frontend.index');
Route::get('/about', [HomeController::class, 'about'])->name('frontend.about');
Route::get('/service', [HomeController::class, 'service'])->name('frontend.service');
Route::get('/project', [HomeController::class, 'project'])->name('frontend.project');
Route::get('/team', [HomeController::class, 'team'])->name('frontend.team');
Route::get('/owner', function () {
    $page = (object) [
        'title' => 'Ravindra Verma | Founder & CEO of Backend Coders India',
        'meta_title' => 'Ravindra Verma | Founder & CEO, Backend Coders India',
        'meta_description' => 'Meet Ravindra Verma, Founder and CEO of Backend Coders India in Kanpur. Learn about his leadership, technology vision, and the company he leads.',
        'og_image' => 'assets/images/ceo.png',
        'is_index' => true,
    ];

    $projects = \App\Models\Project::query()
        ->whereNotNull('title')
        ->orderByDesc('completed_at')
        ->take(3)
        ->get();

    return view('frontend.owner', compact('page', 'projects'));
})->name('frontend.owner');


// Route::get('/project/{slug}', [HomeController::class, 'project_detail'])
//     ->name('frontend.project-detail');
Route::get('/project/{slug}', [HomeController::class, 'project_detail'])
    ->name('frontend.project-detail');
Route::get('/projects', function () {
    if (auth()->check()) {
        return app(ProjectController::class)->index();
    }

    return redirect()->route('frontend.project', [], 301);
})->name('projects.index');

Route::get('/services', function () {
    if (auth()->check()) {
        return app(ServiceController::class)->index();
    }

    return redirect()->route('frontend.service', [], 301);
})->name('services.index');

Route::get('/contact', [HomeController::class, 'contact'])->name('frontend.contact');
Route::get('/process', [HomeController::class, 'process'])->name('frontend.process');
Route::get('/packages', [HomeController::class, 'packages'])->name('frontend.packages');
Route::get('/career', [HomeController::class, 'career'])->name('frontend.career');

// Friendly route aliases and redirects matching navigation labels
Route::get('/portfolio', fn () => redirect()->route('frontend.project', [], 301))->name('frontend.portfolio');
Route::get('/case-studies', fn () => redirect()->route('frontend.project', [], 301));
Route::get('/insights', fn () => redirect()->route('frontend.blog', [], 301));
Route::get('/careers', function () {
    if (auth()->check()) {
        return app(CareerController::class)->index();
    }

    return redirect()->route('frontend.career', [], 301);
})->name('careers.index');
Route::get('/demos', fn () => redirect()->route('frontend.demo', [], 301));
Route::get('/blog', [HomeController::class, 'blog'])->name('frontend.blog');
Route::get('/blog/7-best-website-development-companies-in-kanpur-2026-comparison', fn () => redirect()->route('frontend.blog-detail', ['slug' => 'how-to-choose-a-website-development-company-in-kanpur'], 301));
Route::get('/blog/small-business-india', fn () => redirect()->route('frontend.blog-detail', ['slug' => 'how-seo-services-in-kanpur-help-businesses-grow-online'], 301));
Route::get('/blog/website-development-company-in-kanpur-build-a-website-that-drives-real-business-growth', function () {
    return redirect()->route('frontend.blog-detail', ['slug' => 'how-to-choose-a-website-development-company-in-kanpur'], 301);
});
Route::get('/blog/{slug}', [HomeController::class, 'blog_detail'])->name('frontend.blog-detail');
Route::get('/terms', [HomeController::class, 'terms'])->name('frontend.terms');

// Privacy policy: canonical hyphenated route and 301 redirect for legacy underscore URL
Route::get('/privacy-policy', [HomeController::class, 'privacy_policy'])->name('frontend.privacy_policy');
Route::get('/privacy_policy', function () {
    return redirect()->route('frontend.privacy_policy', [], 301);
});

Route::get('/faq', [HomeController::class, 'faq'])->name('frontend.faq');
Route::get('/FAQs', fn () => redirect()->route('frontend.faq', [], 301));
Route::get('/help', [HomeController::class, 'help'])->name('frontend.help');

// Hyphenated service aliases with 301 redirects for legacy underscored URLs
Route::get('/digital-marketing', [HomeController::class, 'digital_marketing'])->name('frontend.digital_marketing');
Route::get('/digital_marketing', function () {
    return redirect()->route('frontend.page', ['slug' => 'social-media-management'], 301);
});

Route::get('/software-development', [HomeController::class, 'software_development'])->name('frontend.software_development');
Route::get('/software_development', function () {
    return redirect()->route('frontend.page', ['slug' => 'custom-web-applications'], 301);
});

Route::get('/social-media', [HomeController::class, 'social_media'])->name('frontend.social_media');
Route::get('/social_media', function () {
    return redirect()->route('frontend.page', ['slug' => 'social-media-management'], 301);
});

Route::get('/seo', [HomeController::class, 'seo'])->name('frontend.seo');

Route::get('/google-ads', [HomeController::class, 'google_ads'])->name('frontend.ads');
Route::get('/google_ads', function () {
    return redirect()->route('frontend.ads', [], 301);
});

Route::get('/meta-ads', [HomeController::class, 'meta_ads'])->name('frontend.meta_ads');
Route::get('/meta_ads', function () {
    return redirect()->route('frontend.meta_ads', [], 301);
});

Route::get('/content-marketing', [HomeController::class, 'content_marketing'])->name('frontend.content_marketing');
Route::get('/content_marketing', function () {
    return redirect()->route('frontend.content_marketing', [], 301);
});

Route::get('/local-seo', [HomeController::class, 'local_seo'])->name('frontend.local_seo');
Route::get('/local_seo', function () {
    return redirect()->route('frontend.page', ['slug' => 'local-seo'], 301);
});

Route::get('/custom-web', [HomeController::class, 'custom_web'])->name('frontend.custom_web');
Route::get('/custom_web', function () {
    return redirect()->route('frontend.custom_web', [], 301);
});
Route::get('/web', function () {
    return redirect()->route('frontend.page', ['slug' => 'website-design-development'], 301);
});
Route::get('/page/website-development-company-kanpur', function () {
    return redirect()->route('frontend.page', ['slug' => 'website-design-development'], 301);
});
Route::get('/page/home', function () {
    return redirect('/', 301);
});
Route::get('/page/software-digital-marketing-company-in-kanpur', function () {
    return redirect()->route('frontend.about', [], 301);
});
Route::get('/page/about-backend-coders-software-digital-marketing-company-in-kanpur', function () {
    return redirect()->route('frontend.about', [], 301);
});
Route::get('/page/seo-services', function () {
    return redirect()->route('frontend.seo', request()->query(), 301);
});
Route::get('/seo-services-kanpur', fn () => redirect()->route('frontend.seo', [], 301));
Route::get('/seo-company-kanpur', fn () => redirect()->route('frontend.seo', [], 301));
Route::get('/social-media-management', fn () => redirect()->route('frontend.page', ['slug' => 'social-media-management'], 301));
Route::get('/page/{slug}', [HomeController::class, 'page'])->name('frontend.page');

// 301 Redirects for Legacy Service Page URLs
Route::get('/service/{slug}', [HomeController::class, 'legacyRedirect'])->where('slug', '.*');
Route::get('/services/{slug}', [HomeController::class, 'legacyRedirect'])->where('slug', '.*');
Route::get('/drupal-website-development-company-jaipur', [HomeController::class, 'legacyRedirect'])->defaults('slug', 'drupal-website-development-company-jaipur');
Route::get('/react-native-app-development-company-kanpur', [HomeController::class, 'legacyRedirect'])->defaults('slug', 'react-native-app-development-company-kanpur');

Route::get('/blog-images/{path}', [BlogController::class, 'image'])
    ->where('path', '.*')
    ->name('blogs.image');

Route::get('/media/{path}', [PageController::class, 'media'])
    ->where('path', '.*')
    ->name('media.file');




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
    Route::get('/submissions', [DashboardController::class, 'submissions'])
        ->name('submissions.index');
    Route::get('/leads', [DashboardController::class, 'leads'])
        ->name('leads.index');
    Route::delete('/leads/{application}', [DashboardController::class, 'destroyApplication'])
        ->name('leads.destroy');
    Route::get('/contact-leads', [DashboardController::class, 'contacts'])
        ->name('contacts.index');
    Route::get('/contact-leads/{contact}', [DashboardController::class, 'showContact'])
        ->name('contacts.show');
    Route::delete('/contact-leads/{contact}', [DashboardController::class, 'destroyContact'])
        ->name('contacts.destroy');

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
Route::post('/blogs/upload-image', [BlogController::class, 'uploadEditorImage'])->name('blogs.upload-image');
Route::get('/blog/category/{slug}', [BlogController::class, 'category']);

Route::resource('careers', CareerController::class)->except(['index']);
Route::resource('projects', ProjectController::class)->except(['index']);
Route::resource('services', ServiceController::class)->except(['index']);

Route::resource('service-details', ServiceDetailController::class);

Route::resource('pages', PageController::class);
Route::resource('menu-items', MenuItemController::class);




Route::prefix('projects')->group(function () {

Route::get('/create', [ProjectController::class, 'create'])
    ->name('projects.create');

Route::post('/', [ProjectController::class, 'store'])
    ->name('projects.store');

Route::get('/{project}', [ProjectController::class, 'show'])
    ->name('projects.show');

Route::get('/{project}/edit', [ProjectController::class, 'edit'])
    ->name('projects.edit');

Route::put('/{project}', [ProjectController::class, 'update'])
    ->name('projects.update');

Route::delete('/{project}', [ProjectController::class, 'destroy'])
    ->name('projects.destroy');


});

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
