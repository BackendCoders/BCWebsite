<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Career;
use App\Models\CareerApplication;
use App\Models\Category;
use App\Models\Project;
use App\Models\Service;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller

{

   public function demo()
{
    $page = Page::with('sections.items')
        ->where('slug', 'demo')
        ->first();

    if (! $page) {
        $page = new Page();
        $page->title = 'Live Project Demos & Sandbox Portfolio';
        $page->meta_title = 'Live Project Demos & Software Solutions Showcase | Backend Coders India';
        $page->meta_description = 'Explore interactive live project demos and software solutions built by Backend Coders India, including e-commerce, EPOS systems, medical apps, and web applications.';
        $page->is_index = 1;
        $page->canonical_url = url()->current();
    } else {
        if (! $page->meta_title || str_contains($page->meta_title, 'Kanpur for Growth') || $page->meta_title === 'Home') {
            $page->meta_title = 'Live Project Demos & Software Solutions Showcase | Backend Coders India';
        }
        if (! $page->meta_description || str_contains($page->meta_description, 'trusted web development company in Kanpur, India delivering custom software')) {
            $page->meta_description = 'Explore interactive live project demos and software solutions built by Backend Coders India, including e-commerce, EPOS systems, medical apps, and web applications.';
        }
    }

    return view('frontend.demo', compact('page'));
}

    public function index(){
        
        // return view('frontend.index');
 
        $page = Page::with('sections.items')
            ->where('slug', 'home')
            ->first();

        $homepageBlogs = Blog::whereIn('slug', [
            'custom-web-application-development-company-in-india-build-smarter-software-for-business-growth',
            'how-much-does-website-development-cost-for-startups-in-india-2026-guide',
        ])->get(['slug', 'published_at', 'created_at'])->keyBy('slug');

        return view('frontend.index', compact('page', 'homepageBlogs'));
}
    
    

    public function dashboard(){
        return view('dashboard', [
            'categoryCount' => Category::count(),
            'recentCategories' => Category::latest()->take(6)->get(),
            'blogCount' => Blog::count(),
            'recentBlogs' => Blog::with('category')->latest()->take(5)->get(),
            'careerCount' => Career::count(),
            'recentCareers' => Career::latest()->take(3)->get(),
            'applicationCount' => CareerApplication::count(),
            'recentApplications' => CareerApplication::latest()->take(5)->get(),
            'projectCount' => Project::count(),
            'recentProjects' => Project::latest()->take(4)->get(),
            'serviceCount' => Service::count(),
            'recentServices' => Service::latest()->take(4)->get(),
        ]);
    }

    public function about(){
        // return view('frontend.about');
        $page = Page::with('sections.items')
        ->where('slug', 'about')
        ->first();

        if (! $page) {
            $page = new Page();
            $page->title = 'About Us';
            $page->meta_title = 'About Us | Leading Web Development & Software Company in Kanpur | Backend Coders India';
            $page->meta_description = 'Learn more about Backend Coders India, our expert engineering team, mission, and how we deliver cutting-edge web development, custom software, and digital solutions.';
            $page->is_index = 1;
            $page->canonical_url = url()->current();
        } else {
            if (! $page->meta_title || str_contains($page->meta_title, 'Kanpur for Growth') || $page->meta_title === 'Home') {
                $page->meta_title = 'About Us | Leading Web Development & Software Company in Kanpur | Backend Coders India';
            }
            if (! $page->meta_description || str_contains($page->meta_description, 'trusted web development company in Kanpur, India delivering custom software')) {
                $page->meta_description = 'Learn more about Backend Coders India, our expert engineering team, mission, and how we deliver cutting-edge web development, custom software, and digital solutions.';
            }
        }

    return view('frontend.about', compact('page'));

    }

    public function service(){
        // return view('frontend.service');
          $page = Page::with('sections.items')
        ->where('slug', 'service')
        ->first();

    $page ??= new Page();
    $page->meta_title = $page->meta_title ?: 'Web Development Services | Backend Coders India';
    $page->meta_description = ltrim((string) $page->meta_description, " :\t\n\r\0\x0B") ?: 'Explore custom web development, software engineering, ecommerce, and digital growth services from Backend Coders India.';
    $page->canonical_url = url('/service');

    return view('frontend.service', compact('page'));
    }

    public function project(){
        // return view('frontend.project');
          $page = Page::with('sections.items')
        ->where('slug', 'project')
        ->first();

        $projects = Project::latest()->take(6)->get();

    return view('frontend.project', compact('page', 'projects'));
    }

    public function project_detail(string $slug)
    {
        $projects = Project::latest()->get();
        $project = $projects->firstWhere('slug', $slug);

        abort_unless($project, 404);

        $relatedProjects = $projects
            ->reject(fn (Project $item) => $item->id === $project->id)
            ->when($project->category, fn ($collection) => $collection->filter(fn (Project $item) => $item->category === $project->category))
            ->take(3)
            ->values();

        $page = (object) [
            'meta_title' => $project->meta_title ?: ($project->title . ' | Project Detail | Backend Coders India'),
            'meta_description' => $project->meta_description ?: ($project->description ?: ($project->title . ' project detail page.')),
            'canonical_url' => url()->current(),
            'title' => $project->title,
            'is_index' => 1,
        ];

        return view('frontend.project-detail', compact('page', 'project', 'relatedProjects'));
    }

    public function contact(){
            // return view('frontend.contact');
              $page = Page::with('sections.items')
        ->where('slug', 'contact')
        ->first();

    return view('frontend.contact', compact('page'));
    }

    public function process(){
            // return view('frontend.process');
              $page = Page::with('sections.items')
        ->where('slug', 'process')
        ->first();

    $page ??= new Page();
    $page->meta_title = 'Our Software Development Process | Backend Coders India';
    $page->meta_description = 'See how our team takes software projects from discovery and planning through development, testing, launch, and ongoing support.';
    $page->canonical_url = url()->current();
    $page->is_index = 1;

    return view('frontend.process', compact('page'));
    }

    public function packages(){
            // return view('frontend.packages');
              $page = Page::with('sections.items')
        ->where('slug', 'packages')
        ->first();

    return view('frontend.packages', compact('page'));
    }

    public function career(){
            // return view('frontend.career');
              $page = Page::with('sections.items')
        ->where('slug', 'career')
        ->first();

    return view('frontend.career', compact('page'));
    }

    public function blog(Request $request){
            $page = Page::with('sections.items')
                ->where('slug', 'blog')
                ->first();

            if (! $page) {
                $page = new Page();
                $page->title = 'Blog & Technology Insights';
                $page->meta_title = 'Blog & Technology Insights | Backend Coders India';
                $page->meta_description = 'Read the latest technology insights, web development tutorials, software architecture guides, and industry updates from Backend Coders India.';
                $page->is_index = 1;
                $page->canonical_url = url()->current();
            } else {
                if (! $page->meta_title || str_contains($page->meta_title, 'Kanpur for Growth') || $page->meta_title === 'Home') {
                    $page->meta_title = 'Blog & Technology Insights | Backend Coders India';
                }
                if (! $page->meta_description || str_contains($page->meta_description, 'trusted web development company in Kanpur, India delivering custom software')) {
                    $page->meta_description = 'Read the latest technology insights, web development tutorials, software architecture guides, and industry updates from Backend Coders India.';
                }
            if (str_contains($page->meta_description, 'web development company in Kanpur')) {
                $page->meta_description = 'Read practical guides on website planning, software development, ecommerce, search visibility, and digital operations from Backend Coders India.';
            }
            }

            $blogsQuery = Blog::with('category')
                ->where('is_published', 1);

            if ($request->filled('category')) {
                $blogsQuery->where('category_id', $request->integer('category'));
            }

            if ($request->filled('q')) {
                $search = trim((string) $request->string('q'));
                $blogsQuery->where(function ($query) use ($search) {
                    $query->where('title', 'like', "%{$search}%")
                        ->orWhere('excerpt', 'like', "%{$search}%")
                        ->orWhere('content', 'like', "%{$search}%");
                });
            }

            $blogs = $blogsQuery
                ->latest('published_at')
                ->latest()
                ->get();

            $featuredBlog = Blog::with('category')
                ->where('is_published', 1)
                ->latest('published_at')
                ->latest()
                ->first();

            $categories = Category::orderBy('name')->get();

            return view('frontend.blog', compact('page', 'blogs', 'featuredBlog', 'categories'));
    }

    public function blog_detail($slug){
      $blog = Blog::where('slug', $slug)->where('is_published', 1)->firstOrFail();

      $page = Page::with('sections.items')
        ->where('slug', 'blog-detail')
        ->first();

      if (! $page) {
          $page = new Page();
      }

      $page->meta_title = $blog->meta_title ?: ($blog->title . ' | Blog Detail | Backend Coders India');
      $page->meta_description = $blog->meta_description ?: ($blog->excerpt ?: Str::limit(strip_tags($blog->content ?: ''), 158));
      $page->meta_keywords = $blog->meta_keywords ?: implode(', ', $blog->seo_keywords);
      $page->og_image = $blog->getImageUrl();
      $page->canonical_url = url()->current();
      $page->title = $blog->title;
      $page->is_index = 1;

      $relatedBlogs = Blog::with('category')
        ->where('is_published', 1)
        ->where('id', '!=', $blog->id)
        ->when($blog->category_id, fn ($query) => $query->where('category_id', $blog->category_id))
        ->latest('published_at')
        ->take(3)
        ->get();

      $recentBlogs = Blog::with('category')
        ->where('is_published', 1)
        ->where('id', '!=', $blog->id)
        ->latest('published_at')
        ->latest()
        ->take(4)
        ->get();

    return view('frontend.blog-detail', compact('page', 'blog', 'relatedBlogs', 'recentBlogs'));
     }

        public function terms(){
                // return view('frontend.terms');
                  $page = Page::with('sections.items')
        ->where('slug', 'terms')
        ->first();

    $page ??= new Page();
    $page->title = 'Terms of Use';
    $page->meta_title = 'Terms of Use | Backend Coders India';
    $page->meta_description = 'Read the terms that govern access to and use of the Backend Coders India website and services.';
    $page->canonical_url = url('/terms');
    $page->is_index = 1;

    return view('frontend.terms', compact('page'));
        }

        public function privacy_policy(){
                // return view('frontend.privacy_policy');
                  $page = Page::with('sections.items')
        ->where('slug', 'privacy-policy')
        ->first();

    $page ??= new Page();
    $page->title = 'Privacy Policy';
    $page->meta_title = 'Privacy Policy | Backend Coders India';
    $page->meta_description = 'Learn what information Backend Coders India collects through this website, how it is used, and how to contact us about privacy.';
    $page->canonical_url = url('/privacy-policy');
    $page->is_index = 1;

    return view('frontend.privacy_policy', compact('page'));
        }

        public function digital_marketing(){
                return $this->redirectLegacyAlias('digital-marketing', ['digital_marketing']);
        }

        public function software_development(){
                return $this->redirectLegacyAlias('software-development', ['software_development']);
        }

        public function social_media(){
                return $this->redirectLegacyAlias('social-media', ['social_media']);
        }

        public function seo(){
                $page = Page::with('sections.items')
                    ->whereIn('slug', ['seo-services', 'seo'])
                    ->first() ?? new Page();

                $page->meta_title = 'Organic Search Services in Kanpur | Backend Coders India';
                $page->meta_description = 'Practical help with search visibility, technical site health, useful content, and local discovery. We agree on the work and measures with each client.';
                $page->canonical_url = url('/seo');
                $page->is_index = 1;

                return view('frontend.seo', compact('page'));
        }

        public function google_ads(){
                return $this->redirectLegacyAlias('google-ads', ['google_ads', 'google-ads-ppc-services']);
        }

        public function meta_ads(){
                return $this->redirectLegacyAlias('meta-ads', ['meta_ads', 'meta-ads-services']);
        }

        public function content_marketing(){
                return $this->redirectLegacyAlias('content-marketing', ['content_marketing', 'content-marketing-services']);
        }

        public function local_seo(){
                return $this->redirectLegacyAlias('local-seo', ['local_seo', 'local-seo-services']);
        }

        public function custom_web(){
                return $this->redirectLegacyAlias('custom-web', ['custom_web', 'custom-web-application-development']);
        }

        public function faq(){
                //  return view('frontend.faq');
                  $page = Page::with('sections.items')
        ->where('slug', 'faq')
        ->first();

    $page ??= new Page();
    $page->meta_title = 'Frequently Asked Questions | Backend Coders India';
    $page->meta_description = 'Answers to common questions about Backend Coders India services, project delivery, pricing, and support.';
    $page->canonical_url = url()->current();
    $page->is_index = 1;

    return view('frontend.faq', compact('page'));
           } 
           
        public function help(){
                //  return view('frontend.help');
                  $page = Page::with('sections.items')
        ->where('slug', 'help')
        ->first();

    return view('frontend.help', compact('page'));
           }

           public function page($slug)
{
    if ($slug === 'seo-services') {
        return redirect()->route('frontend.seo', [], 301);
    }

    if ($slug === 'social-media-management') {
        $page = Page::with('sections.items')
            ->where('slug', $slug)
            ->first();

        if (! $page) {
            $page = new Page();
            $page->slug = 'social-media-management';
            $page->title = 'Social Media Marketing & Management';
        }

        $page->meta_title = 'Social Media Marketing & Management Company | Backend Coders India';
        $page->meta_description = 'Build your brand, engage your audience, and drive real business inquiries with targeted social media marketing, content creation, and campaign management from Backend Coders India.';
        $page->canonical_url = 'https://backendcodersindia.com/page/social-media-management';
        $page->is_index = 1;

        return view('frontend.social_media', compact('page'));
    }

    $page = Page::with('sections.items')
        ->where('slug', $slug)
        ->firstOrFail();

    if ($page->slug === 'seo-services') {
        $page->meta_title = 'Live Software Demos & Projects | Backend Coders India';
        $page->meta_description = 'Try live demos of software built by Backend Coders India, including ecommerce stores, EPOS systems, medical apps and business web apps. ';
        $page->canonical_url = url('/seo');

        return view('frontend.seo', compact('page'));
    }

        // dd($page);
        return view('frontend.page', compact('page'));
}

        public function legacyRedirect($slug = null)
        {
                $slug = (string) ($slug ?: request()->segment(count(request()->segments())));
                $legacyMap = [
                        'drupal-website-development-company-jaipur' => 'custom-web-applications',
                        'react-native-app-development-company-kanpur' => 'mobile-app-development',
                        'flutter-app-development-company-kanpur' => 'mobile-app-development',
                        'android-app-development-company-kanpur' => 'mobile-app-development',
                        'ios-app-development-company-kanpur' => 'mobile-app-development',
                        'node-js-development-company-kanpur' => 'custom-web-applications',
                        'laravel-development-company-kanpur' => 'custom-web-applications',
                        'react-js-development-company-kanpur' => 'custom-web-applications',
                        'seo-company-kanpur' => 'seo',
                        'seo-services-kanpur' => 'seo',
                        'digital-marketing-agency-kanpur' => 'social-media-management',
                ];

                if (isset($legacyMap[$slug])) {
                        if ($legacyMap[$slug] === 'seo') {
                                return redirect()->route('frontend.seo', [], 301);
                        }
                        return redirect()->route('frontend.page', ['slug' => $legacyMap[$slug]], 301);
                }

                if ($slug === 'software-digital-marketing-company-in-kanpur' || $slug === 'about-backend-coders-software-digital-marketing-company-in-kanpur') {
                        return redirect()->route('frontend.about', [], 301);
                }

                $page = Page::where('slug', $slug)->first();
                if ($page) {
                        return redirect()->route('frontend.page', ['slug' => $page->slug], 301);
                }

                return redirect()->route('frontend.service', [], 301);
        }

        protected function redirectLegacyAlias(string $primarySlug, array $alternateSlugs = [])
        {
                $allSlugs = array_values(array_unique(array_merge([$primarySlug], $alternateSlugs)));
                $page = Page::whereIn('slug', $allSlugs)->first();

                $targetSlug = $page ? $page->slug : $primarySlug;

                return redirect()->route('frontend.page', ['slug' => $targetSlug], 301);
        }

        protected function renderDynamicPage(string $slug, array $alternateSlugs = [])
        {
                $page = Page::with('sections.items')
                        ->whereIn('slug', array_values(array_unique(array_merge([$slug], $alternateSlugs))))
                        ->firstOrFail();

                return view('frontend.page', compact('page'));
        }

        // public function digital_marketing(){
        //          return view('frontend.digital_marketing');
        //    }  
        //     public function software_development(){
        //          return view('frontend.software_development');
        //    }  
        //     public function social_media(){
        //          return view('frontend.social_media');
        //    }      
           
        //        public function seo(){
        //          return view('frontend.seo');
        //    } 
           
        //         public function google_ads(){
        //          return view('frontend.ads');
        //    }   
           
        //         public function meta_ads(){
        //          return view('frontend.meta_ads');
        //    }    

        //    public function content_marketing(){
        //         return view('frontend.content_marketing');
        //    }

        //     public function local_seo(){
        //         return view('frontend.local_seo');
        //    }

            public function team(){
                $page = (object) [
                    'meta_title' => 'Our Team | Backend Coders India',
                    'meta_description' => 'Meet the people behind Backend Coders India and learn about the team’s engineering, design, and delivery experience.',
                    'canonical_url' => url()->current(),
                    'is_index' => 1,
                ];

                return view('frontend.team', compact('page'));
           }

}
