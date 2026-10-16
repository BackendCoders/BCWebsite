<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Career;
use App\Models\CareerApplication;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'categoryCount' => Category::count(),
            'blogCount' => Blog::count(),
            'serviceCount' => Service::count(),
            'careerCount' => Career::count(),
            'applicationCount' => CareerApplication::count(),
            'contactCount' => Contact::count(),
            'projectCount' => Project::count(),

            'recentCategories' => Category::latest()->take(5)->get(),
            'recentBlogs' => Blog::latest()->take(5)->get(),
            'recentCareers' => Career::latest()->take(5)->get(),
            'recentApplications' => CareerApplication::latest()->take(5)->get(),
            'recentContacts' => Contact::latest()->take(5)->get(),
            'recentProjects' => Project::latest()->take(6)->get(),
            'recentServices' => Service::latest()->take(6)->get(),
        ]);
    }

    /**
     * Unified Submissions Dashboard with advanced filtering and visitor tracking.
     */
    public function submissions(Request $request)
    {
        $formType = $request->input('form_type', 'all');
        $ipAddress = trim((string) $request->input('ip_address'));
        $visitorId = trim((string) $request->input('visitor_id'));
        $name = trim((string) $request->input('name'));
        $email = trim((string) $request->input('email'));
        $submissionId = trim((string) $request->input('submission_id'));
        $dateFrom = $request->input('date_from');
        $dateTo = $request->input('date_to');
        $search = trim((string) $request->input('search'));

        // Query Contacts
        $contactQuery = Contact::query();
        if ($submissionId !== '') {
            $contactQuery->where('id', $submissionId);
        }
        if ($ipAddress !== '') {
            $contactQuery->where('ip_address', 'like', "%{$ipAddress}%");
        }
        if ($visitorId !== '') {
            $contactQuery->where('visitor_id', 'like', "%{$visitorId}%");
        }
        if ($name !== '') {
            $contactQuery->where(function ($q) use ($name) {
                $q->where('first_name', 'like', "%{$name}%")
                  ->orWhere('last_name', 'like', "%{$name}%");
            });
        }
        if ($email !== '') {
            $contactQuery->where('email', 'like', "%{$email}%");
        }
        if ($dateFrom) {
            $contactQuery->whereDate('created_at', '>=', $dateFrom);
        }
        if ($dateTo) {
            $contactQuery->whereDate('created_at', '<=', $dateTo);
        }
        if ($search !== '') {
            $contactQuery->where(function ($q) use ($search) {
                $q->where('first_name', 'like', "%{$search}%")
                  ->orWhere('last_name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%")
                  ->orWhere('ip_address', 'like', "%{$search}%")
                  ->orWhere('visitor_id', 'like', "%{$search}%")
                  ->orWhere('id', $search);
            });
        }

        // Query Career Applications
        $appQuery = CareerApplication::query();
        if ($submissionId !== '') {
            $appQuery->where('id', $submissionId);
        }
        if ($ipAddress !== '') {
            $appQuery->where('ip_address', 'like', "%{$ipAddress}%");
        }
        if ($visitorId !== '') {
            $appQuery->where('visitor_id', 'like', "%{$visitorId}%");
        }
        if ($name !== '') {
            $appQuery->where('full_name', 'like', "%{$name}%");
        }
        if ($email !== '') {
            $appQuery->where('email', 'like', "%{$email}%");
        }
        if ($dateFrom) {
            $appQuery->whereDate('created_at', '>=', $dateFrom);
        }
        if ($dateTo) {
            $appQuery->whereDate('created_at', '<=', $dateTo);
        }
        if ($search !== '') {
            $appQuery->where(function ($q) use ($search) {
                $q->where('full_name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%")
                  ->orWhere('position', 'like', "%{$search}%")
                  ->orWhere('ip_address', 'like', "%{$search}%")
                  ->orWhere('visitor_id', 'like', "%{$search}%")
                  ->orWhere('id', $search);
            });
        }

        $contacts = ($formType === 'career') ? collect() : $contactQuery->latest('id')->get();
        $applications = ($formType === 'contact') ? collect() : $appQuery->latest('id')->get();

        // Calculate counts for visitor IDs to display submission frequency
        $allVisitorIds = $contacts->pluck('visitor_id')->merge($applications->pluck('visitor_id'))->filter()->unique()->values();
        $visitorCounts = [];
        if ($allVisitorIds->isNotEmpty()) {
            $contactCounts = Contact::whereIn('visitor_id', $allVisitorIds)->selectRaw('visitor_id, count(*) as total')->groupBy('visitor_id')->pluck('total', 'visitor_id');
            $appCounts = CareerApplication::whereIn('visitor_id', $allVisitorIds)->selectRaw('visitor_id, count(*) as total')->groupBy('visitor_id')->pluck('total', 'visitor_id');

            foreach ($allVisitorIds as $vId) {
                $visitorCounts[$vId] = ($contactCounts[$vId] ?? 0) + ($appCounts[$vId] ?? 0);
            }
        }

        // Map unified item format
        $unifiedItems = collect();

        foreach ($contacts as $c) {
            $unifiedItems->push((object) [
                'type' => 'Contact',
                'type_badge' => 'Contact Form',
                'id' => $c->id,
                'raw_model' => $c,
                'name' => $c->full_name,
                'email' => $c->email,
                'phone' => $c->phone,
                'ip_address' => $c->ip_address,
                'visitor_id' => $c->visitor_id,
                'visitor_count' => $c->visitor_id ? ($visitorCounts[$c->visitor_id] ?? 1) : 1,
                'status' => $c->status ?? 'new',
                'created_at' => $c->created_at,
                'detail_url' => route('contacts.show', $c),
                'delete_url' => route('contacts.destroy', $c),
                'extra' => $c->message,
            ]);
        }

        foreach ($applications as $a) {
            $unifiedItems->push((object) [
                'type' => 'Career',
                'type_badge' => 'Career Application',
                'id' => $a->id,
                'raw_model' => $a,
                'name' => $a->full_name,
                'email' => $a->email,
                'phone' => $a->phone,
                'ip_address' => $a->ip_address,
                'visitor_id' => $a->visitor_id,
                'visitor_count' => $a->visitor_id ? ($visitorCounts[$a->visitor_id] ?? 1) : 1,
                'status' => $a->status ?? 'new',
                'created_at' => $a->created_at,
                'detail_url' => $a->resume ? asset('storage/' . $a->resume) : null,
                'delete_url' => route('leads.destroy', $a),
                'extra' => 'Position: ' . $a->position,
            ]);
        }

        // Sort all submissions by created_at desc
        $sortedSubmissions = $unifiedItems->sortByDesc('created_at')->values();

        // Paginate manually for unified listing
        $perPage = 25;
        $currentPage = LengthAwarePaginator::resolveCurrentPage('page');
        $currentItems = $sortedSubmissions->slice(($currentPage - 1) * $perPage, $perPage)->values();
        $paginatedSubmissions = new LengthAwarePaginator(
            $currentItems,
            $sortedSubmissions->count(),
            $perPage,
            $currentPage,
            ['path' => LengthAwarePaginator::resolveCurrentPath(), 'query' => $request->query()]
        );

        return view('inquiry.submissions', [
            'submissions' => $paginatedSubmissions,
            'totalCount' => $sortedSubmissions->count(),
            'contactCount' => Contact::count(),
            'applicationCount' => CareerApplication::count(),
            'filters' => [
                'form_type' => $formType,
                'ip_address' => $ipAddress,
                'visitor_id' => $visitorId,
                'name' => $name,
                'email' => $email,
                'submission_id' => $submissionId,
                'date_from' => $dateFrom,
                'date_to' => $dateTo,
                'search' => $search,
            ],
        ]);
    }

    public function leads(Request $request)
    {
        $query = CareerApplication::query();

        if ($request->filled('search')) {
            $search = trim($request->search);
            $query->where(function ($q) use ($search) {
                $q->where('full_name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%")
                  ->orWhere('position', 'like', "%{$search}%")
                  ->orWhere('ip_address', 'like', "%{$search}%")
                  ->orWhere('visitor_id', 'like', "%{$search}%")
                  ->orWhere('id', $search);
            });
        }

        if ($request->filled('visitor_id')) {
            $query->where('visitor_id', 'like', "%" . trim($request->visitor_id) . "%");
        }

        if ($request->filled('ip_address')) {
            $query->where('ip_address', 'like', "%" . trim($request->ip_address) . "%");
        }

        $applications = $query->latest('id')->paginate(25)->withQueryString();

        return view('inquiry.leads', [
            'applicationCount' => CareerApplication::count(),
            'recentApplications' => $applications,
            'filters' => $request->only(['search', 'visitor_id', 'ip_address']),
        ]);
    }

    public function contacts(Request $request)
    {
        $query = Contact::query();

        if ($request->filled('search')) {
            $search = trim($request->search);
            $query->where(function ($q) use ($search) {
                $q->where('first_name', 'like', "%{$search}%")
                  ->orWhere('last_name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%")
                  ->orWhere('ip_address', 'like', "%{$search}%")
                  ->orWhere('visitor_id', 'like', "%{$search}%")
                  ->orWhere('id', $search);
            });
        }

        if ($request->filled('visitor_id')) {
            $query->where('visitor_id', 'like', "%" . trim($request->visitor_id) . "%");
        }

        if ($request->filled('ip_address')) {
            $query->where('ip_address', 'like', "%" . trim($request->ip_address) . "%");
        }

        $contacts = $query->latest('id')->paginate(25)->withQueryString();

        return view('inquiry.contacts', [
            'contactCount' => Contact::count(),
            'recentContacts' => $contacts,
            'filters' => $request->only(['search', 'visitor_id', 'ip_address']),
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
}
