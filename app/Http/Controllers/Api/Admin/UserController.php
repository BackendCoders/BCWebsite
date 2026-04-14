<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $limit = $request->integer('limit', 10);

        $users = User::where('status', true)
            ->limit(min($limit, 20))
            ->get(['id', 'name', 'email', 'role', 'status', 'created_at']);

        return response()->json([
            'data' => $users,
        ]);
    }
}
