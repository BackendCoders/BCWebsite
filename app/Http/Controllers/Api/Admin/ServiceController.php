<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $limit = $request->integer('limit', 12);

        $query = Service::with('category')->where('status', true);

        if ($request->filled('category')) {
            $query->where('service_category_id', $request->input('category'));
        }

        if ($request->filled('search')) {
            $query->search($request->input('search'));
        }

        $services = $query->orderByDesc('priority')
            ->limit(min($limit, 30))
            ->get();

        return response()->json([
            'data' => $services,
        ]);
    }
}
