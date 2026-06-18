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

   public function demo()
{
    $page = null;

    return view('frontend.demo', compact('page'));
}

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

      if (! $page) {
          $page = new Page();
      }

      $page->meta_title = $page->meta_title ?: ($blog->meta_title ?: $blog->title . ' | Blog Detail | Backend Coders India');
      $page->meta_description = $page->meta_description ?: ($blog->meta_description ?: $blog->excerpt ?: strip_tags($blog->content ?: ''));
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
