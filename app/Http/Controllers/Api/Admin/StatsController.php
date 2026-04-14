<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Services\AdminDashboardService;

class StatsController extends Controller
{
    public function index(AdminDashboardService $dashboardService)
    {
        return response()->json([
            'data' => $dashboardService->stats(),
        ]);
    }
}
