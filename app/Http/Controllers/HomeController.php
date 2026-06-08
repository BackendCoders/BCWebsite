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

class HomeController extends Controller
{
    public function index(){
        
        // return view('frontend.index');
 
        $page = Page::with('sections.items')
            ->where('slug', 'home')
            ->first();

        return view('frontend.index', compact('page'));
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

    return view('frontend.about', compact('page'));

    }

    public function service(){
        // return view('frontend.service');
          $page = Page::with('sections.items')
        ->where('slug', 'service')
        ->first();

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
        $projectLibrary = [
            'seo-rocket-pro' => (object) [
                'slug' => 'seo-rocket-pro',
                'title' => 'SEO Rocket Pro',
                'category' => 'SEO Growth Platform',
                'summary' => 'A conversion-focused SEO platform designed to improve rankings, track growth, and turn organic traffic into qualified leads.',
                'description' => 'SEO Rocket Pro is our flagship growth platform for businesses that want a sharper SEO workflow, cleaner insights, and a more predictable path to organic visibility. The interface is built to feel premium, fast, and easy to use for teams of every size.',
                'challenge' => 'The client needed a clearer way to manage SEO execution, surface keyword opportunities, and keep reporting easy to understand for stakeholders.',
                'solution' => 'We created a sleek product experience that blends a performance dashboard, campaign tracking, analytics cards, and a clear feature hierarchy that supports day-to-day decision making.',
                'image' => asset('assets/images/backend_coders_split_1.webp.webp'),
                'accent' => '#FD5528',
                'metrics' => [
                    ['value' => '3x', 'label' => 'more qualified leads'],
                    ['value' => '45%', 'label' => 'faster reporting'],
                    ['value' => '12+', 'label' => 'core SEO modules'],
                ],
                'highlights' => [
                    'Keyword opportunity dashboard',
                    'Technical audit workflow',
                    'Ranking and visibility tracking',
                    'Lead-focused CTA system',
                ],
                'stack' => ['Laravel', 'Tailwind CSS', 'Alpine.js', 'Analytics UI', 'Responsive Design'],
                'timeline' => [
                    ['step' => 'Discovery', 'text' => 'Mapped the client goals, product users, and reporting priorities.'],
                    ['step' => 'UI Design', 'text' => 'Built a polished visual language centered on clarity and trust.'],
                    ['step' => 'Launch', 'text' => 'Delivered a responsive interface ready for future data integration.'],
                ],
            ],
            'gymflow-pro' => (object) [
                'slug' => 'gymflow-pro',
                'title' => 'GymFlow Pro',
                'category' => 'Fitness Management',
                'summary' => 'A modern gym management UI with memberships, attendance, trainer flows, and clean admin reporting.',
                'description' => 'GymFlow Pro is designed for fitness businesses that need a clear, engaging, and easy-to-navigate interface for daily operations. It balances speed, structure, and a premium product feel.',
                'challenge' => 'The goal was to make gym operations feel simple for staff while still showing enough depth for owners and managers.',
                'solution' => 'We designed a modular dashboard with member tracking, schedules, payment status, and analytics cards that keep the experience fast and calm.',
                'image' => asset('assets/images/backend_coders_split_2.webp.webp'),
                'accent' => '#0F766E',
                'metrics' => [
                    ['value' => '8+', 'label' => 'admin panels'],
                    ['value' => '99%', 'label' => 'mobile friendly'],
                    ['value' => '24/7', 'label' => 'workflow access'],
                ],
                'highlights' => [
                    'Membership overview',
                    'Trainer and attendance tracking',
                    'Payments and subscription clarity',
                    'Performance insights panel',
                ],
                'stack' => ['Laravel', 'Tailwind CSS', 'Dashboard UI', 'Alpine.js', 'Responsive Components'],
                'timeline' => [
                    ['step' => 'Research', 'text' => 'Studied gym staff workflows and member journeys.'],
                    ['step' => 'Layout', 'text' => 'Organized tasks into clear cards and action zones.'],
                    ['step' => 'Polish', 'text' => 'Refined spacing, hierarchy, and hover states for a premium feel.'],
                ],
            ],
            'pos-master' => (object) [
                'slug' => 'pos-master',
                'title' => 'POS Master',
                'category' => 'Retail Operations',
                'summary' => 'A polished point-of-sale interface built for billing speed, stock control, and multi-store visibility.',
                'description' => 'POS Master brings together billing, inventory, and store management in a clean and intuitive UI that keeps staff focused and confident at checkout.',
                'challenge' => 'The client needed a retail system that looked modern, reduced friction, and stayed readable under fast-paced usage.',
                'solution' => 'We created a visually strong dashboard with a crisp billing flow, quick inventory references, and clear status indicators for store teams.',
                'image' => asset('assets/images/backend_coders_split_3.webp.webp'),
                'accent' => '#C2410C',
                'metrics' => [
                    ['value' => '2x', 'label' => 'faster billing flow'],
                    ['value' => '14+', 'label' => 'retail screens'],
                    ['value' => '1 UI', 'label' => 'unified operations'],
                ],
                'highlights' => [
                    'Fast checkout experience',
                    'Inventory and barcode panels',
                    'Sales reporting clarity',
                    'Multi-location management',
                ],
                'stack' => ['Laravel', 'Tailwind CSS', 'Retail UI', 'Alpine.js', 'Responsive Design'],
                'timeline' => [
                    ['step' => 'Scope', 'text' => 'Defined the retail actions that needed to stay fastest on screen.'],
                    ['step' => 'Build', 'text' => 'Created modular cards for billing, inventory, and reports.'],
                    ['step' => 'Launch', 'text' => 'Finished with strong contrast, rhythm, and a premium product finish.'],
                ],
            ],
        ];

        $project = $projectLibrary[$slug] ?? $projectLibrary['seo-rocket-pro'];
        $relatedProjects = array_values(array_filter(
            $projectLibrary,
            fn ($item) => $item->slug !== $project->slug
        ));

        $page = (object) [
            'meta_title' => $project->title . ' | Project Detail | Backend Coders India',
            'meta_description' => $project->summary,
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

      $relatedBlogs = Blog::with('category')
        ->where('is_published', 1)
        ->where('id', '!=', $blog->id)
        ->when($blog->category_id, fn ($query) => $query->where('category_id', $blog->category_id))
        ->latest('published_at')
        ->take(3)
        ->get();

    return view('frontend.blog-detail', compact('page', 'blog', 'relatedBlogs'));
     }

        public function terms(){
                // return view('frontend.terms');
                  $page = Page::with('sections.items')
        ->where('slug', 'terms')
        ->first();

    return view('frontend.terms', compact('page'));
        }

        public function privacy_policy(){
                // return view('frontend.privacy_policy');
                  $page = Page::with('sections.items')
        ->where('slug', 'privacy-policy')
        ->first();

    return view('frontend.privacy_policy', compact('page'));
        }

        public function digital_marketing(){
                return $this->renderDynamicPage('digital_marketing', ['digital-marketing']);
        }

        public function software_development(){
                return $this->renderDynamicPage('software_development', ['software-development']);
        }

        public function social_media(){
                return $this->renderDynamicPage('social_media', ['social-media']);
        }

        public function seo(){
                $page = Page::with('sections.items')
                        ->whereIn('slug', ['seo', 'seo-services'])
                        ->firstOrFail();

                return view('frontend.seo', compact('page'));
        }

        public function google_ads(){
                return $this->renderDynamicPage('google_ads', ['google-ads', 'google-ads-ppc-services']);
        }

        public function meta_ads(){
                return $this->renderDynamicPage('meta_ads', ['meta-ads', 'meta-ads-services']);
        }

        public function content_marketing(){
                return $this->renderDynamicPage('content_marketing', ['content-marketing', 'content-marketing-services']);
        }

        public function local_seo(){
                return $this->renderDynamicPage('local_seo', ['local-seo', 'local-seo-services']);
        }

        public function custom_web(){
                return $this->renderDynamicPage('custom_web', ['custom-web', 'custom-web-application-development']);
        }

        public function faq(){
                //  return view('frontend.faq');
                  $page = Page::with('sections.items')
        ->where('slug', 'faq')
        ->first();

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
    $page = Page::with('sections.items')
        ->where('slug', $slug)
        ->firstOrFail();
        // dd($page);
        return view('frontend.page', compact('page'));
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

        //     public function custom_web(){
        //         return view('frontend.custom_web');
        //    }

}
