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

    return response()
        ->view('frontend.demo', compact('page'))
        ->header('Content-Security-Policy', "default-src 'self' https: data: blob:; script-src 'self' 'unsafe-inline' 'unsafe-eval' https://cdn.tailwindcss.com https://cdn.quilljs.com https://cdn.jsdelivr.net https://unpkg.com https://www.googletagmanager.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://fonts.bunny.net https://cdn.quilljs.com https://unpkg.com; font-src 'self' https://fonts.gstatic.com https://fonts.bunny.net data:; img-src 'self' data: https: blob:; connect-src 'self' https:; frame-src 'self' https: https://www.google.com https://www.youtube.com; object-src 'none';");
}

    public function index(){
        
        // return view('frontend.index');
 
        $page = Page::with('sections.items')
            ->where('slug', 'home')
            ->first();

        $latestBlogs = Blog::with('category')
            ->where('is_published', 1)
            ->whereNotNull('slug')
            ->where(function ($q) {
                $q->whereNull('published_at')->orWhere('published_at', '<=', now());
            })
            ->orderByRaw('COALESCE(published_at, created_at) DESC')
            ->take(8)
            ->get();

        $homepageBlogs = $latestBlogs->keyBy('slug');

        return view('frontend.index', compact('page', 'latestBlogs', 'homepageBlogs'));
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
            $page->meta_title = 'About Us | Software & Web Development Company Kanpur';
            $page->meta_description = 'Learn about Backend Coders India, our engineering team in Kanpur, mission, and how we deliver custom software, web development, and digital marketing.';
            $page->is_index = 1;
            $page->canonical_url = url()->current();
        } else {
            if (! $page->meta_title || str_contains($page->meta_title, 'Kanpur for Growth') || $page->meta_title === 'Home' || str_contains($page->meta_title, 'Leading Web Development')) {
                $page->meta_title = 'About Us | Software & Web Development Company Kanpur';
            }
            if (! $page->meta_description || str_contains($page->meta_description, 'trusted web development company in Kanpur, India delivering custom software')) {
                $page->meta_description = 'Learn about Backend Coders India, our engineering team in Kanpur, mission, and how we deliver custom software, web development, and digital marketing.';
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

        if (! $project) {
            $project = $this->resolveFallbackProject($slug);
            if ($project) {
                $projects = Project::latest()->get();
            }
        }

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
        $page = Page::with('sections.items')
            ->where('slug', 'contact')
            ->first();

        $page ??= new Page();
        $page->title = 'Contact Us';
        $page->meta_title = 'Contact Us | Backend Coders India';
        $page->meta_description = 'Get in touch with Backend Coders India for software development, web design, mobile apps, and digital marketing services in Kanpur.';
        $page->canonical_url = 'https://backendcodersindia.com/contact';
        $page->is_index = 1;

        $contactFaqs = self::getContactFaqList();

        return view('frontend.contact', compact('page', 'contactFaqs'));
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
        $page = Page::with('sections.items')
            ->where('slug', 'packages')
            ->first();

        $page ??= new Page();
        $page->title = 'Web Development & Digital Growth Packages';
        $page->meta_title = 'Web Development & SEO Packages in Kanpur | Backend Coders India';
        $page->meta_description = 'Transparent pricing packages for website development, SEO, digital marketing, and custom software engineering from Backend Coders India.';
        $page->canonical_url = url('/packages');
        $page->is_index = 1;

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

            if ($request->has('category') && $request->query('category') !== null && $request->query('category') !== '') {
                $categoryInput = $request->query('category');
                if (! is_numeric($categoryInput) || ! Category::where('id', (int) $categoryInput)->exists()) {
                    abort(404);
                }
                $blogsQuery->where('category_id', (int) $categoryInput);
            }

            if ($request->has('page')) {
                $pageInput = $request->query('page');
                if (! is_numeric($pageInput) || (int) $pageInput < 1) {
                    abort(404);
                }
            }

            if ($request->filled('q')) {
                $search = trim((string) $request->string('q'));
                $blogsQuery->where(function ($query) use ($search) {
                    $query->where('title', 'like', "%{$search}%")
                        ->orWhere('excerpt', 'like', "%{$search}%")
                        ->orWhere('content', 'like', "%{$search}%");
                });
            }

            $perPage = 6;
            $blogs = $blogsQuery
                ->latest('published_at')
                ->latest()
                ->paginate($perPage)
                ->withQueryString();

            if ($request->has('page') && (int) $request->query('page') > $blogs->lastPage() && $blogs->total() > 0) {
                abort(404);
            }

            if ($request->has('page') && (int) $request->query('page') > 1) {
                $page->canonical_url = url('/blog') . '?page=' . (int) $request->query('page');
            } else {
                $page->canonical_url = url('/blog');
            }

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

        public function seo()
        {
                $page = Page::with(['sections' => fn ($q) => $q->orderBy('order')->with('items')])
                    ->where('slug', 'seo')
                    ->first();

                if (! $page) {
                    $page = new Page();
                    $page->slug = 'seo';
                    $page->title = 'SEO Company in Kanpur – <span class="text-[#FD5528]">SEO Services</span> That Generate Leads';
                    $page->meta_title = 'SEO Company in Kanpur | SEO Services That Generate Leads';
                    $page->meta_description = 'Professional SEO company in Kanpur. We provide technical site audits, on-page keyword optimization, local SEO, and ethical link outreach to drive organic leads. Plans from ₹7,999/mo.';
                    $page->canonical_url = 'https://backendcodersindia.com/seo';
                    $page->is_index = 1;
                } else {
                    $page->title = 'SEO Company in Kanpur – <span class="text-[#FD5528]">SEO Services</span> That Generate Leads';
                    $page->meta_title = 'SEO Company in Kanpur | SEO Services That Generate Leads';
                    $page->meta_description = $page->meta_description ?: 'Professional SEO company in Kanpur. We provide technical site audits, on-page keyword optimization, local SEO, and ethical link outreach to drive organic leads. Plans from ₹7,999/mo.';
                    $page->canonical_url = $page->canonical_url ?: 'https://backendcodersindia.com/seo';
                }

                if (! $page->is_index && ! auth()->check()) {
                    abort(404);
                }

                return view('frontend.seo', compact('page'));
        }

        public function digital_marketing_kanpur()
        {
                $page = Page::with(['sections' => fn ($q) => $q->orderBy('order')->with('items')])
                    ->where('slug', 'digital-marketing-agency-kanpur')
                    ->first();

                if (! $page) {
                    $page = new Page();
                    $page->slug = 'digital-marketing-agency-kanpur';
                    $page->title = 'Digital Marketing Agency in Kanpur That Tracks Leads, Not Likes';
                    $page->meta_title = 'Digital Marketing Agency in Kanpur | SEO, Ads & Social – Backend Coders India';
                    $page->meta_description = 'Kanpur digital marketing agency for SEO, Google Ads, Meta Ads and social media. Transparent monthly plans from ₹7,999. Free 30-min audit. Call today.';
                    $page->canonical_url = 'https://backendcodersindia.com/digital-marketing-agency-kanpur';
                    $page->is_index = 1;
                } else {
                    $page->title = $page->title ?: 'Digital Marketing Agency in Kanpur That Tracks Leads, Not Likes';
                    $page->meta_title = $page->meta_title ?: 'Digital Marketing Agency in Kanpur | SEO, Ads & Social – Backend Coders India';
                    $page->meta_description = $page->meta_description ?: 'Kanpur digital marketing agency for SEO, Google Ads, Meta Ads and social media. Transparent monthly plans from ₹7,999. Free 30-min audit. Call today.';
                    $page->canonical_url = $page->canonical_url ?: 'https://backendcodersindia.com/digital-marketing-agency-kanpur';
                }

                if (! $page->is_index && ! auth()->check()) {
                    abort(404);
                }

                return view('frontend.digital_marketing_kanpur', compact('page'));
        }

        public function software_company_kanpur()
        {
                $page = Page::with('sections.items')
                    ->where('slug', 'software-company-kanpur')
                    ->first() ?? new Page();

                $page->title = 'Software Company in Kanpur';
                $page->meta_title = 'Software Company in Kanpur | Custom Software & Web Applications';
                $page->meta_description = 'Leading custom software company in Kanpur. Backend Coders India engineers custom web applications, ERP/POS systems, mobile apps, SaaS platforms, and secure APIs.';
                $page->canonical_url = 'https://backendcodersindia.com/software-company-kanpur';
                $page->is_index = 1;

                return view('frontend.software_company_kanpur', compact('page'));
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
            $page = Page::with('sections.items')
                ->where('slug', 'faq')
                ->first();

            $page ??= new Page();
            $page->title = 'Frequently Asked Questions';
            $page->meta_title = 'Frequently Asked Questions | Backend Coders India';
            $page->meta_description = 'Find answers about website development, SEO pricing, software development, GST billing, project timelines and support at Backend Coders India, Kanpur.';
            $page->canonical_url = 'https://backendcodersindia.com/faq';
            $page->is_index = 1;

            $faqItems = self::getAllFaqList();

            return view('frontend.faq', compact('page', 'faqItems'));
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
    if ($slug === 'seo-services' || $slug === 'seo') {
        return redirect()->route('frontend.seo', [], 301);
    }

    if ($slug === 'digital-marketing-agency-kanpur') {
        return redirect()->route('frontend.digital_marketing_kanpur', [], 301);
    }

    if ($slug === 'software-company-kanpur' || $slug === 'software-development-company-kanpur' || $slug === 'it-company-kanpur' || $slug === 'it-company-in-kanpur-web-software-digital-services-backend-coders-india') {
        return redirect()->route('frontend.software_company_kanpur', [], 301);
    }

    if ($slug === 'meta') {
        return redirect()->route('frontend.page', ['slug' => 'meta-ads'], 301);
    }

    if ($slug === 'content-marketing-to-rank-on-google') {
        return redirect()->route('frontend.page', ['slug' => 'content-marketing'], 301);
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

        $page->meta_title = 'Social Media Marketing Agency in Kanpur | Backend Coders India';
        $page->meta_description = 'Build your brand, engage your audience, and drive real business inquiries with targeted social media marketing, content creation, and campaign management from Backend Coders India.';
        $page->canonical_url = 'https://backendcodersindia.com/page/social-media-management';
        $page->is_index = 1;

        return view('frontend.social_media', compact('page'));
    }

    if ($slug === 'ppc-ads-google-ads' || $slug === 'google-ads') {
        $page = Page::with('sections.items')
            ->whereIn('slug', ['ppc-ads-google-ads', 'google-ads'])
            ->first();

        if (! $page) {
            $page = new Page();
            $page->slug = 'ppc-ads-google-ads';
            $page->title = 'Google Ads & PPC Management Services';
        }

        $page->meta_title = 'Google Ads & PPC Management Services in Kanpur | Backend Coders India';
        $page->meta_description = 'Drive targeted search leads and maximize return on ad spend with managed Google Ads, display advertising, remarketing, and conversion tracking from Backend Coders India.';
        $page->canonical_url = 'https://backendcodersindia.com/page/ppc-ads-google-ads';
        $page->is_index = 1;

        return view('frontend.ads', compact('page'));
    }

    if ($slug === 'local-seo') {
        $page = Page::with('sections.items')
            ->where('slug', 'local-seo')
            ->first();

        if (! $page) {
            $page = new Page();
            $page->slug = 'local-seo';
            $page->title = 'Local SEO Services in Kanpur That Improve Online Visibility';
        }

        $page->meta_title = 'Local SEO Services in Kanpur | Improve Google Maps Rankings – Backend Coders India';
        $page->meta_description = 'Improve your local search presence, Google Maps rankings, local citations, and customer reviews across Kanpur and target service areas.';
        $page->canonical_url = 'https://backendcodersindia.com/page/local-seo';
        $page->is_index = 1;

        return view('frontend.local_seo', compact('page'));
    }

    if ($slug === 'meta-ads') {
        $page = Page::with('sections.items')
            ->where('slug', $slug)
            ->first();

        if (! $page) {
            $page = new Page();
            $page->slug = 'meta-ads';
            $page->title = 'Meta Ads (Facebook & Instagram)';
            $page->meta_title = 'Meta Ads Services in Kanpur | Facebook & Instagram Ads | Backend Coders India';
            $page->meta_description = 'Boost your business with powerful Meta Ads campaigns across Facebook and Instagram. Targeted ad strategies that generate quality leads and maximize return on ad spend.';
            $page->canonical_url = 'https://backendcodersindia.com/page/meta-ads';
            $page->is_index = 1;
        }

        if ($page->sections && $page->sections->isNotEmpty()) {
            return view('frontend.page', compact('page'));
        }

        return view('frontend.meta_ads', compact('page'));
    }

    if ($slug === 'content-marketing') {
        $page = Page::with('sections.items')
            ->where('slug', $slug)
            ->first();

        if (! $page) {
            $page = new Page();
            $page->slug = 'content-marketing';
            $page->title = 'Content Marketing Services';
            $page->meta_title = 'Content Marketing Services in Kanpur | Backend Coders India';
            $page->meta_description = 'Attract, engage, and convert your audience with powerful content marketing strategies. We create high-quality content that builds trust and drives long-term business growth.';
            $page->canonical_url = 'https://backendcodersindia.com/page/content-marketing';
            $page->is_index = 1;
        }

        if ($page->sections && $page->sections->isNotEmpty()) {
            return view('frontend.page', compact('page'));
        }

        return view('frontend.content_marketing', compact('page'));
    }

    $servicePageDefinitions = [
        'website-design-development' => [
            'title' => 'Website Design & Development Company in Kanpur',
            'meta_title' => 'Website Design & Development Company in Kanpur | Backend Coders India',
            'meta_description' => 'Custom, responsive, SEO-ready websites designed and engineered in Kanpur for local businesses, startups, and growing enterprises.',
            'h1' => 'Website Design & Development Company in Kanpur',
        ],
        'mobile-app-development' => [
            'title' => 'Mobile App Development Company in Kanpur | Android & iOS – Backend Coders India',
            'meta_title' => 'Mobile App Development Company in Kanpur | Android & iOS – Backend Coders India',
            'meta_description' => 'Build high-performance native iOS, Android, and cross-platform mobile apps with Backend Coders India. Scalable architecture and custom UI/UX.',
            'h1' => 'Mobile App Development Company in Kanpur',
        ],
        'erp-pos-software' => [
            'title' => 'Billing, POS & ERP Software Company in Kanpur | Backend Coders India',
            'meta_title' => 'Billing, POS & ERP Software Company in Kanpur | Backend Coders India',
            'meta_description' => 'Custom billing, POS, and ERP software solutions engineered for Kanpur manufacturers, retail businesses, and distributors with inventory control and GST billing.',
            'h1' => 'ERP and POS Software Development Company in Kanpur',
        ],
        'custom-web-applications' => [
            'title' => 'Custom Web Application Development Company in Kanpur',
            'meta_title' => 'Custom Web Application Development Company in Kanpur | Backend Coders India',
            'meta_description' => 'Scalable, secure custom web applications built with Laravel, modern JavaScript, and enterprise-grade architecture for modern business growth in Kanpur.',
            'h1' => 'Custom Web Application Development Company in Kanpur',
        ],
        'saas-development' => [
            'title' => 'SaaS Application Development Services',
            'meta_title' => 'SaaS Application Development Company | Scalable Cloud Software',
            'meta_description' => 'End-to-end SaaS application development, multi-tenant cloud architecture, subscription billing, and API integrations by Backend Coders India.',
            'h1' => 'SaaS Application Development Services',
        ],
        'ecommerce-development' => [
            'title' => 'Ecommerce Website Development Company in Kanpur',
            'meta_title' => 'Ecommerce Website Development Company in Kanpur | Backend Coders India',
            'meta_description' => 'High-conversion online stores, custom carts, payment gateways, and scalable ecommerce software engineered in Kanpur by Backend Coders India.',
            'h1' => 'Ecommerce Website Development Company in Kanpur',
        ],
        'api-development' => [
            'title' => 'API Development Services in Kanpur',
            'meta_title' => 'API Development Services in Kanpur | Backend Coders India',
            'meta_description' => 'Secure, well-documented RESTful APIs, third-party webhook integrations, and high-performance microservices architecture by Backend Coders India in Kanpur.',
            'h1' => 'API Development Services in Kanpur',
        ],
        'startup-mvp-development' => [
            'title' => 'Startup MVP Development Company in Kanpur',
            'meta_title' => 'Startup MVP Development Company in Kanpur | Backend Coders India',
            'meta_description' => 'Turn startup ideas into validated, market-ready MVPs with rapid engineering cycles, lean architecture, and scalable foundations by Backend Coders India in Kanpur.',
            'h1' => 'MVP Development Company in Kanpur',
        ],
    ];

    if (isset($servicePageDefinitions[$slug])) {
        $def = $servicePageDefinitions[$slug];
        $page = Page::with('sections.items')
            ->where('slug', $slug)
            ->first() ?? new Page();

        $page->slug = $slug;
        $page->title = $def['h1'];
        $page->meta_title = $def['meta_title'];
        $page->meta_description = $def['meta_description'];
        $page->canonical_url = 'https://backendcodersindia.com/page/' . $slug;
        $page->is_index = 1;

        return view('frontend.page', compact('page'));
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
                        'digital-marketing-agency-kanpur' => 'digital-marketing-agency-kanpur',
                        'software-company-kanpur' => 'software-company-kanpur',
                        'software-development-company-kanpur' => 'software-company-kanpur',
                        'it-company-kanpur' => 'software-company-kanpur',
                ];

                if (isset($legacyMap[$slug])) {
                        if ($legacyMap[$slug] === 'seo') {
                                return redirect()->route('frontend.seo', [], 301);
                        }
                        if ($legacyMap[$slug] === 'digital-marketing-agency-kanpur') {
                                return redirect()->route('frontend.digital_marketing_kanpur', [], 301);
                        }
                        if ($legacyMap[$slug] === 'software-company-kanpur') {
                                return redirect()->route('frontend.software_company_kanpur', [], 301);
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

                abort(404);
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

        protected function resolveFallbackProject(string $slug): ?Project
        {
                $definitions = [
                        'marley-moves-logistics-transport-platform' => [
                                'title' => 'Marley Moves Logistics & Transport Platform',
                                'client_name' => 'Marley Moves',
                                'category' => 'Logistics & Fleet Transport',
                                'status' => 'Delivered',
                                'technologies' => 'Laravel, MySQL, Alpine.js, TailwindCSS, Google Maps API',
                                'live_url' => null,
                                'description' => 'A custom logistics quotation and fleet dispatch management platform engineered for Marley Moves. The system features an interactive relocation estimate calculator, vehicle allocation workflows, dynamic booking calendars, and automated customer dispatch notifications.',
                                'image' => 'assets/images/marley.jpeg',
                                'is_featured' => true,
                                'completed_at' => '2025-11-20',
                                'meta_title' => 'Marley Moves Case Study | Logistics & Transport Platform | Backend Coders India',
                                'meta_description' => 'Explore how Backend Coders India built a custom logistics booking platform and fleet quotation workflow for Marley Moves with Laravel and Alpine.js.',
                                'meta_keywords' => 'logistics software development, transport platform, custom web application, Laravel fleet management',
                                'faqs' => [
                                        ['question' => 'What core business challenges did Marley Moves face?', 'answer' => 'Manual phone and email quotation processes resulted in delayed response times, inaccurate move cost estimates, and disjointed vehicle dispatch tracking across client relocation jobs.'],
                                        ['question' => 'What technologies were used to deliver the platform?', 'answer' => 'Backend Coders India implemented the system using Laravel, MySQL, Alpine.js, TailwindCSS, and route distance calculation APIs.'],
                                        ['question' => 'What were the verified outcomes of the project?', 'answer' => 'The delivered platform centralized customer quote intake, eliminated manual dispatch spreadsheets, and provided an automated quotation pipeline for relocation bookings.'],
                                ],
                        ],
                        'pulse-events-management-ticketing-portal' => [
                                'title' => 'Pulse Events Management & Ticketing Portal',
                                'client_name' => 'Pulse Events',
                                'category' => 'Event Management & Ticketing',
                                'status' => 'Delivered',
                                'technologies' => 'Laravel, MySQL, Alpine.js, TailwindCSS, Stripe Payments',
                                'live_url' => null,
                                'description' => 'A scalable event registration and multi-tiered ticketing platform developed for Pulse Events. The portal manages attendee registration, tiered ticket pricing, session agendas, digital pass generation, and real-time inventory tracking.',
                                'image' => 'assets/images/pulse-event.jpeg',
                                'is_featured' => true,
                                'completed_at' => '2026-01-28',
                                'meta_title' => 'Pulse Events Case Study | Event Ticketing Platform | Backend Coders India',
                                'meta_description' => 'Discover how Backend Coders India built an online ticketing and attendee registration portal for Pulse Events using Laravel, TailwindCSS, and Stripe.',
                                'meta_keywords' => 'event ticketing software, event registration portal, custom web development, Laravel event system',
                                'faqs' => [
                                        ['question' => 'What business problem did the Pulse Events portal solve?', 'answer' => 'Event organizers required a unified digital channel for ticket sales, attendee check-in pass delivery, and live seat inventory visibility across multi-track events.'],
                                        ['question' => 'How was secure ticket booking handled?', 'answer' => 'The portal integrated Stripe payments with automated webhook processing to guarantee immediate digital pass generation upon verified checkout.'],
                                        ['question' => 'What technical outcomes were delivered?', 'answer' => 'The solution provided automated booking confirmations, eliminated duplicate registrations, and offered a responsive organizer dashboard for check-in monitoring.'],
                                ],
                        ],
                ];

                if (! isset($definitions[$slug])) {
                        return null;
                }

                try {
                        return Project::firstOrCreate(
                                ['title' => $definitions[$slug]['title']],
                                $definitions[$slug]
                        );
                } catch (\Throwable $e) {
                        $p = new Project();
                        foreach ($definitions[$slug] as $k => $v) {
                                $p->{$k} = $v;
                        }
                        return $p;
                }
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

    public function office_gallery()
    {
        $page = (object) [
            'title' => 'Office Gallery | Explore Backend Coders India Workplace in Kanpur',
            'meta_title' => 'Office Gallery in Kanpur | Backend Coders India',
            'meta_description' => 'Explore the Backend Coders India office gallery in Kanpur. Discover our workplace, team environment and professional workspace.',
            'canonical_url' => url('/office-gallery'),
            'og_image' => 'assets/images/office.jpg',
            'is_index' => 1,
        ];

        $defaultImages = [
            // --- SECTION 1: WORKSPACE & ENGINEERING LABS (8 Photos) ---
            [
                'title' => 'Main Engineering Hall & Workstations',
                'caption' => 'The main development floor at 11/42 Krishna Nagar, Kanpur. Designed for focused coding sprints, dual-display workstations, and cross-functional collaboration.',
                'alt_text' => 'Backend Coders India main office interior and development hall in Krishna Nagar Kanpur',
                'image_url' => asset('assets/images/office.jpg'),
                'category' => 'Workspace & Infrastructure',
                'order' => 1,
                'is_featured' => true,
            ],
            [
                'title' => 'Office Reception & Brand Lounge',
                'caption' => 'Welcoming client reception and entrance lounge at our Kanpur office, featuring our illuminated brand installation and guest greeting area.',
                'alt_text' => 'Backend Coders India reception and office entrance lounge in Kanpur',
                'image_url' => asset('assets/images/banner-team.png'),
                'category' => 'Office Interior',
                'order' => 2,
                'is_featured' => false,
            ],
            [
                'title' => 'Deep Focus Engineering Bay',
                'caption' => 'Clean desks equipped with dual screens, high-speed fiber internet, and dedicated staging environments for Laravel and cloud engineering.',
                'alt_text' => 'Developer desk and workstations at Backend Coders India in Kanpur',
                'image_url' => asset('assets/Office/649426716_1304707918378187_6839822695956954278_n.jpg'),
                'category' => 'Workspace & Infrastructure',
                'order' => 3,
                'is_featured' => false,
            ],
            [
                'title' => 'Sprint Architecture & Collaboration Zone',
                'caption' => 'Sprint planning area where engineers discuss database schemas, cloud infrastructure, and technical roadmaps.',
                'alt_text' => 'Collaborative development space at Backend Coders India Kanpur',
                'image_url' => asset('assets/Office/649709421_1304707445044901_7896336242621366096_n.jpg'),
                'category' => 'Workspace & Infrastructure',
                'order' => 4,
                'is_featured' => false,
            ],
            [
                'title' => 'Modern Development Infrastructure',
                'caption' => 'Ergonomic workstations, high-speed internal networks, and dedicated focus bays inside our Kanpur headquarters.',
                'alt_text' => 'Modern development infrastructure and engineering bay at Backend Coders India',
                'image_url' => asset('assets/Office/650656692_1304708898378089_3171840685580638541_n.jpg'),
                'category' => 'Workspace & Infrastructure',
                'order' => 5,
                'is_featured' => false,
            ],
            [
                'title' => 'Tech Brainstorming & Peer Code Reviews',
                'caption' => 'Engineers collaborating on architectural optimization, unit tests, and continuous deployment workflows.',
                'alt_text' => 'Knowledge sharing and code reviews at Backend Coders India Kanpur',
                'image_url' => asset('assets/Office/650253160_1304708771711435_1524565240088187399_n.jpg'),
                'category' => 'Workspace & Infrastructure',
                'order' => 6,
                'is_featured' => false,
            ],
            [
                'title' => 'Developer Workstation Pods',
                'caption' => 'Dedicated workstations providing developers with quiet focus areas for complex backend coding.',
                'alt_text' => 'Developer workstation pods at Backend Coders India',
                'image_url' => asset('assets/Office/649828056_1304708531711459_7623861269217183882_n.jpg'),
                'category' => 'Workspace & Infrastructure',
                'order' => 7,
                'is_featured' => false,
            ],
            [
                'title' => 'Engineering Bay Corridor & Meeting Pod',
                'caption' => 'Modern glass-partitioned meeting spaces and sprint rooms designed for focused delivery reviews.',
                'alt_text' => 'Office corridor and meeting spaces at Backend Coders India',
                'image_url' => asset('assets/Office/650253337_1304706958378283_1119365827911085976_n.jpg'),
                'category' => 'Workspace & Infrastructure',
                'order' => 8,
                'is_featured' => false,
            ],

            // --- SECTION 2: TEAM EVENTS, CELEBRATIONS & FUN ACTIVITIES (6 Photos) ---
            [
                'title' => 'Grand Office Inauguration & Ribbon Cutting Ceremony',
                'caption' => 'Celebrating the official opening and ribbon cutting ceremony of Backend Coders India Kanpur headquarters.',
                'alt_text' => 'Grand office inauguration and ribbon cutting ceremony at Backend Coders India',
                'image_url' => asset('assets/Office/649846683_1304711468377832_167130625954357209_n.jpg'),
                'category' => 'Company Activities',
                'order' => 9,
                'is_featured' => true,
            ],
            [
                'title' => 'Executive Leadership Opening the New Headquarters',
                'caption' => 'Managing Director Swati Verma and Founder Ravindra Verma inaugurating our new engineering floor and welcoming the team.',
                'alt_text' => 'Managing Director Swati Verma and Founder Ravindra Verma opening the new Backend Coders office',
                'image_url' => asset('assets/Office/650395268_1304711511711161_8679916618918930754_n.jpg'),
                'category' => 'Company Activities',
                'order' => 10,
                'is_featured' => false,
            ],
            [
                'title' => 'Festival of Lights & Traditional Celebrations',
                'caption' => 'Team-wide cultural celebrations and festive traditions held at the Kanpur office, celebrating unity and company milestones in traditional attire.',
                'alt_text' => 'Festival of lights and ethnic day celebration with Backend Coders India team at Kanpur office',
                'image_url' => asset('assets/Office/649519728_1304707361711576_8038595386224399026_n.jpg'),
                'category' => 'Company Activities',
                'order' => 11,
                'is_featured' => false,
            ],
            [
                'title' => 'Annual Team Milestone & Festive Gathering',
                'caption' => 'Company-wide team gathering celebrating successful software product launches and client milestones.',
                'alt_text' => 'Annual team gathering and milestone celebration at Backend Coders India',
                'image_url' => asset('assets/Office/649839658_1304708855044760_6536602212172284341_n.jpg'),
                'category' => 'Company Activities',
                'order' => 12,
                'is_featured' => false,
            ],
            [
                'title' => 'The Backend Coders India Team Family',
                'caption' => 'The complete engineering, design, and operations family gathered together at our Kanpur headquarters.',
                'alt_text' => 'Backend Coders India team group photograph inside Kanpur office',
                'image_url' => asset('assets/images/team.jpg'),
                'category' => 'Company Activities',
                'order' => 13,
                'is_featured' => false,
            ],
            [
                'title' => 'Quarterly Delivery Milestone Win',
                'caption' => 'Celebrating successful enterprise software delivery sprints and client growth milestones.',
                'alt_text' => 'Quarterly milestone celebration with the engineering team at Backend Coders India',
                'image_url' => asset('assets/Office/649770638_1304709371711375_7071558440575672634_n.jpg'),
                'category' => 'Company Activities',
                'order' => 14,
                'is_featured' => false,
            ],

            // --- SECTION 3: PEOPLE & LEADERSHIP CULTURE (5 Photos) ---
            [
                'title' => 'Ravindra Verma – Founder & CEO',
                'caption' => 'Founder and Chief Executive Officer leading technology vision, architecture direction, and client partnerships.',
                'alt_text' => 'Ravindra Verma Founder and CEO of Backend Coders India',
                'image_url' => asset('assets/images/ceo.webp'),
                'category' => 'Team & People',
                'order' => 15,
                'is_featured' => true,
            ],
            [
                'title' => 'Swati Verma – Managing Director',
                'caption' => 'Managing Director directing executive strategy, operational excellence, and enterprise client partnerships at Backend Coders India.',
                'alt_text' => 'Swati Verma Managing Director of Backend Coders India',
                'image_url' => asset('assets/images/director.webp'),
                'category' => 'Team & People',
                'order' => 16,
                'is_featured' => true,
            ],
            [
                'title' => 'Adarsh – Lead Software Engineer',
                'caption' => 'Senior software engineer specializing in Laravel backend architecture, database optimization, and cloud deployments.',
                'alt_text' => 'Adarsh Lead Software Engineer at Backend Coders India',
                'image_url' => asset('assets/images/adarsh.webp'),
                'category' => 'Team & People',
                'order' => 17,
                'is_featured' => false,
            ],
            [
                'title' => 'Arvind – Full-Stack Web Developer',
                'caption' => 'Full-stack developer engineering responsive web applications, modern JavaScript interfaces, and REST APIs.',
                'alt_text' => 'Arvind Full-Stack Developer at Backend Coders India',
                'image_url' => asset('assets/images/arvind.webp'),
                'category' => 'Team & People',
                'order' => 18,
                'is_featured' => false,
            ],
            [
                'title' => 'Utkarsh – Software Engineer',
                'caption' => 'Software engineer dedicated to front-end performance, component architecture, and UI/UX implementation.',
                'alt_text' => 'Utkarsh Software Engineer at Backend Coders India',
                'image_url' => asset('assets/images/utkarsh.webp'),
                'category' => 'Team & People',
                'order' => 19,
                'is_featured' => false,
            ],
        ];

        $images = collect();

        try {
            if (\Illuminate\Support\Facades\Schema::hasTable('office_images') && class_exists(\App\Models\OfficeImage::class)) {
                $images = \App\Models\OfficeImage::published()->ordered()->get();
            }
        } catch (\Throwable $e) {
            \Illuminate\Support\Facades\Log::warning('Office gallery DB fetch fallback: ' . $e->getMessage());
        }

        $workspaceInDb = $images->filter(fn ($img) => in_array($img->category, ['Workspace & Infrastructure', 'Office Interior'], true));
        $eventInDb = $images->filter(fn ($img) => in_array($img->category, ['Company Activities', 'Meeting & Collaboration'], true));
        $teamInDb = $images->filter(fn ($img) => $img->category === 'Team & People');

        if ($images->isEmpty() || $workspaceInDb->count() < 8 || $eventInDb->count() < 6 || $teamInDb->count() < 5) {
            $images = collect($defaultImages)->map(function ($item) {
                return (object) $item;
            });
            $workspaceImages = $images->filter(fn ($img) => in_array($img->category, ['Workspace & Infrastructure', 'Office Interior'], true));
            $eventImages = $images->filter(fn ($img) => in_array($img->category, ['Company Activities', 'Meeting & Collaboration'], true));
            $teamImages = $images->filter(fn ($img) => $img->category === 'Team & People');
        } else {
            $workspaceImages = $workspaceInDb;
            $eventImages = $eventInDb;
            $teamImages = $teamInDb;
        }

        $featuredImage = $workspaceImages->firstWhere('is_featured', true) ?? $workspaceImages->first();

        return view('frontend.office_gallery', compact('page', 'images', 'workspaceImages', 'eventImages', 'teamImages', 'featuredImage'));
    }

    /**
     * All 10 approved FAQ items.
     *
     * @return array<int, array{id: int, q: string, a: string, a_html: string}>
     */
    public static function getAllFaqList(): array
    {
        return [
            1 => [
                'id' => 1,
                'q' => 'Where is your office, and can I visit?',
                'a' => "Our office is at 11/42, Krishna Nagar, Kanpur, Uttar Pradesh 208007. We're open Monday to Friday, 10:00 am to 6:00 pm.",
                'a_html' => "Our office is at 11/42, Krishna Nagar, Kanpur, Uttar Pradesh 208007. We're open Monday to Friday, 10:00 am to 6:00 pm.",
            ],
            2 => [
                'id' => 2,
                'q' => 'How much does a website cost?',
                'a' => "Business websites start from ₹7,999. The final price depends on the number of pages, the features you need, and whether you want an online store. Our packages page lists what each plan includes, and we'll give you a fixed quote before any work starts.",
                'a_html' => 'Business websites start from ₹7,999. The final price depends on the number of pages, the features you need, and whether you want an online store. Our <a href="https://backendcodersindia.com/packages" class="font-semibold text-[#FD5528] hover:underline">packages page</a> lists what each plan includes, and we\'ll give you a fixed quote before any work starts.',
            ],
            3 => [
                'id' => 3,
                'q' => 'How much do your SEO services cost per month?',
                'a' => "SEO plans start from ₹7,999 a month. We start with a free audit of your website and Google Business Profile, then recommend the plan that fits your goals and budget. See our SEO services for details.",
                'a_html' => 'SEO plans start from ₹7,999 a month. We start with a free audit of your website and Google Business Profile, then recommend the plan that fits your goals and budget. See our <a href="https://backendcodersindia.com/seo" class="font-semibold text-[#FD5528] hover:underline">SEO services</a> for details.',
            ],
            4 => [
                'id' => 4,
                'q' => 'How long does it take to build a website or app?',
                'a' => "A business website usually takes 2–4 weeks. An online store takes 4–6 weeks. Custom software, apps and ERP systems are planned in stages, typically 6–12 weeks for a first version. We share a timeline with milestones before we begin, and it depends on how quickly we receive your content and feedback.",
                'a_html' => "A business website usually takes 2–4 weeks. An online store takes 4–6 weeks. Custom software, apps and ERP systems are planned in stages, typically 6–12 weeks for a first version.<br><br>We share a timeline with milestones before we begin, and it depends on how quickly we receive your content and feedback.",
            ],
            5 => [
                'id' => 5,
                'q' => 'Do you work with clients outside Kanpur or outside India?',
                'a' => "Yes. Alongside businesses in Kanpur, we work with clients across India and in the USA and UK. We work remotely by phone, WhatsApp, email and video calls, with regular progress updates.",
                'a_html' => "Yes. Alongside businesses in Kanpur, we work with clients across India and in the USA and UK. We work remotely by phone, WhatsApp, email and video calls, with regular progress updates.",
            ],
            6 => [
                'id' => 6,
                'q' => 'Do you build GST-compliant billing, POS or inventory software?',
                'a' => "Yes. We build billing, POS, inventory, ERP and CRM software with GST invoicing for shops, restaurants, manufacturers, schools and service businesses. See our billing, POS and ERP software page.",
                'a_html' => 'Yes. We build billing, POS, inventory, ERP and CRM software with GST invoicing for shops, restaurants, manufacturers, schools and service businesses. See our <a href="https://backendcodersindia.com/page/erp-pos-software" class="font-semibold text-[#FD5528] hover:underline">billing, POS and ERP software page</a>.',
            ],
            7 => [
                'id' => 7,
                'q' => 'Can we talk to you in Hindi?',
                'a' => "Yes. Our team supports clients in both Hindi and English, on calls, WhatsApp and in meetings.",
                'a_html' => "Yes. Our team supports clients in both Hindi and English, on calls, WhatsApp and in meetings.",
            ],
            8 => [
                'id' => 8,
                'q' => 'Do I own my website and source code after the project?',
                'a' => "Yes. Once the project is paid for, the website, its content and the custom source code belong to you. We hand over all administrative logins, domain ownership, and hosting access. Any third-party themes, libraries, or plugins remain subject to their respective standard licenses.",
                'a_html' => "Yes. Once the project is paid for, the website, its content and the custom source code belong to you. We hand over all administrative logins, domain ownership, and hosting access. Any third-party themes, libraries, or plugins remain subject to their respective standard licenses.",
            ],
            9 => [
                'id' => 9,
                'q' => 'Do you provide support after launch?',
                'a' => "Post-launch support and maintenance options depend on the project scope and agreed service package. Contact our team to discuss the support plan suitable for your website or software.",
                'a_html' => "Post-launch support and maintenance options depend on the project scope and agreed service package. Contact our team to discuss the support plan suitable for your website or software.",
            ],
            10 => [
                'id' => 10,
                'q' => 'Can you guarantee first-page Google rankings?',
                'a' => "No honest agency can guarantee rankings, because Google decides them and competitors are constantly working to improve their search visibility. We focus on sustainable SEO improvements, technical optimization, relevant content, local SEO and measurable organic growth.",
                'a_html' => "No honest agency can guarantee rankings, because Google decides them and competitors are constantly working to improve their search visibility.<br><br>We focus on sustainable SEO improvements, technical optimization, relevant content, local SEO and measurable organic growth.",
            ],
        ];
    }

    /**
     * Selected 4 FAQ items for the Contact page.
     *
     * @return array<int, array{id: int, q: string, a: string, a_html: string}>
     */
    public static function getContactFaqList(): array
    {
        $all = self::getAllFaqList();

        return [
            $all[1],
            $all[2],
            $all[5],
            $all[7],
        ];
    }

}
