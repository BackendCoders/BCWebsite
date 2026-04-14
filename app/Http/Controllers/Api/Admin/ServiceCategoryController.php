<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    public function index(Request $request)
    {
        $limit = $request->integer('limit', 12);

        $query = ServiceCategory::query();

        if ($request->filled('search')) {
            $query->search($request->input('search'));
        }

        if ($request->filled('status')) {
            $query->where('status', $request->boolean('status'));
        }

        $categories = $query->withCount('services')
            ->orderByDesc('priority')
            ->limit(min($limit, 25))
            ->get();

        return response()->json([
            'data' => $categories,
        ]);
    }
}
