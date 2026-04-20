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
        return view('frontend.service');
    }

     public function project(){
        return view('frontend.project');
    }

    public function contact(){
            return view('frontend.contact');
    }

    public function process(){
            return view('frontend.process');
    }

    public function packages(){
            return view('frontend.packages');
    }

    public function career(){
            return view('frontend.career');
    }

    public function blog(){
            return view('frontend.blog');
    }

    public function blog_detail(){
       return view('frontend.blog-detail');
     }

        public function terms(){
                return view('frontend.terms');
        }

     public function privacy_policy(){
                return view('frontend.privacy_policy');
        }
        public function faq(){
                 return view('frontend.faq');
           } 
           
        public function help(){
                 return view('frontend.help');
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
