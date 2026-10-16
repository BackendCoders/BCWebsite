<?php

namespace App\Services;

use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\User;

class AdminDashboardService
{
    public function stats(): array
    {
        return [
            'totalCategories' => ServiceCategory::count(),
            'totalServices' => Service::count(),
            'activeServices' => Service::where('status', true)->count(),
            'adminUsers' => User::where('role', User::ROLE_ADMIN)->count(),
            'activeUsers' => User::where('status', true)->count(),
        ];
    }

    public function recentServices(int $limit = 4)
    {
        return Service::with('category')
            ->latest('updated_at')
            ->take($limit)
            ->get();
    }

    public function featuredCategories(int $limit = 4)
    {
        return ServiceCategory::where('is_featured', true)
            ->orderByDesc('priority')
            ->take($limit)
            ->get();
    }
}
