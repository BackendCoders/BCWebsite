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

    return view('frontend.project', compact('page'));
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
        ->where('slug', 'packages')
        ->first();

    return view('frontend.packages', compact('page'));
    }

    public function blog(){
            // return view('frontend.blog');
              $page = Page::with('sections.items')
        ->where('slug', 'blog')
        ->first();

    return view('frontend.blog', compact('page'));
    }

    public function blog_detail(){
    //    return view('frontend.blog-detail');
      $page = Page::with('sections.items')
        ->where('slug', 'blog-detail')
        ->first();

    return view('frontend.blog-detail', compact('page'));
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
        ->where('slug', 'privacy policy')
        ->first();

    return view('frontend.privacy_policy', compact('page'));
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

        public function digital_marketing(){
                 return view('frontend.digital_marketing');
           }  
            public function software_development(){
                 return view('frontend.software_development');
           }  
            public function social_media(){
                 return view('frontend.social_media');
           }      
           
               public function seo(){
                 return view('frontend.seo');
           } 
           
                public function google_ads(){
                 return view('frontend.ads');
           }   
           
                public function meta_ads(){
                 return view('frontend.meta_ads');
           }    

           public function content_marketing(){
                return view('frontend.content_marketing');
           }

            public function local_seo(){
                return view('frontend.local_seo');
           }

            public function custom_web(){
                return view('frontend.custom_web');
           }

}
