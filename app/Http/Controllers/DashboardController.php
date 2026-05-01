<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
use App\Models\Service;
use App\Models\Contact;
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
            'contactCount' => Contact::count(),
            'projectCount' => Project::count(),

            // ✅ RECENT DATA (IMPORTANT 🔥)
            'recentCategories' => Category::latest()->take(5)->get(),
            'recentBlogs' => Blog::latest()->take(5)->get(),
            'recentCareers' => Career::latest()->take(5)->get(),
            'recentApplications' => CareerApplication::latest()->take(5)->get(),
            'recentContacts' => Contact::latest()->take(5)->get(),
            'recentProjects' => Project::latest()->take(6)->get(),
            'recentServices' => Service::latest()->take(6)->get(),

        ]);
    }

    public function leads()
    {
        return view('inquiry.leads', [
            'applicationCount' => CareerApplication::count(),
            'recentApplications' => CareerApplication::latest('id')->take(25)->get(),
        ]);
    }

    public function contacts()
    {
        return view('inquiry.contacts', [
            'contactCount' => Contact::count(),
            'recentContacts' => Contact::latest('id')->take(25)->get(),
        ]);
    }

    public function showContact(Contact $contact)
    {
        return view('inquiry.contact-show', [
            'contact' => $contact,
        ]);
    }

    public function destroyContact(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully.');
    }

    public function destroyApplication(CareerApplication $application)
    {
        $application->delete();

        return redirect()->route('leads.index')->with('success', 'Application deleted successfully.');
    }
};
