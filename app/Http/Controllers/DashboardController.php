<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
use App\Models\Service;
use App\Models\Career;
use App\Models\CareerApplication;
use App\Models\Project;

class DashboardController extends Controller
{


    public function index()
    {
        return view('dashboard', [

            // ✅ COUNTS
            'categoryCount' => Category::count(),
            'blogCount' => Blog::count(),
            'serviceCount' => Service::count(),
            'careerCount' => Career::count(),
            'applicationCount' => CareerApplication::count(),
            'projectCount' => Project::count(),

            // ✅ RECENT DATA (IMPORTANT 🔥)
            'recentCategories' => Category::latest()->take(5)->get(),
            'recentBlogs' => Blog::latest()->take(5)->get(),
            'recentCareers' => Career::latest()->take(5)->get(),
            'recentApplications' => CareerApplication::latest()->take(5)->get(),
            'recentProjects' => Project::latest()->take(6)->get(),
            'recentServices' => Service::latest()->take(6)->get(),

        ]);
    }
};
