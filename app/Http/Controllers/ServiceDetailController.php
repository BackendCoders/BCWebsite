<?php

namespace App\Http\Controllers;
use App\Models\ServiceDetail;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceDetailController extends Controller
{
   
    public function index()
    {
        $details = ServiceDetail::with('service')->latest()->get();
        return view('service_details.index', compact('details'));
    }

    public function create()
    {
        $services = Service::all();
        return view('service_details.create', compact('services'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'service_id' => 'required',
            'hero_title' => 'nullable',
            'hero_description' => 'nullable',
            'about_title' => 'nullable',
            'about_description' => 'nullable',
            'content' => 'nullable',
            'cta_title' => 'nullable',
            'cta_description' => 'nullable',
            'cta_button_text' => 'nullable',
        ]);

        // JSON fields
        $data['highlights'] = explode(',', $request->highlights);
        $data['features'] = explode(',', $request->features);

        ServiceDetail::create($data);

        return redirect()->route('service-details.index')->with('success', 'Created');
    }

    public function edit(ServiceDetail $service_detail)
    {
        $services = Service::all();
        return view('service_details.edit', compact('service_detail', 'services'));
    }

    public function update(Request $request, ServiceDetail $service_detail)
    {
        $data = $request->validate([
            'service_id' => 'required',
            'hero_title' => 'nullable',
            'hero_description' => 'nullable',
            'about_title' => 'nullable',
            'about_description' => 'nullable',
            'content' => 'nullable',
            'cta_title' => 'nullable',
            'cta_description' => 'nullable',
            'cta_button_text' => 'nullable',
        ]);

        $data['highlights'] = explode(',', $request->highlights);
        $data['features'] = explode(',', $request->features);

        $service_detail->update($data);

        return redirect()->route('service-details.index')->with('success', 'Updated');
    }

    public function destroy(ServiceDetail $service_detail)
    {
        $service_detail->delete();
        return back()->with('success', 'Deleted');
    }
}

