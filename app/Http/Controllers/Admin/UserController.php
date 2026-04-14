<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $perPage = min(
            $request->integer('per_page', config('admin.pagination.per_page')),
            config('admin.pagination.max_per_page')
        );

        $query = User::query();

        if ($request->filled('trashed')) {
            $trashed = $request->input('trashed');

            if ($trashed === 'only') {
                $query->onlyTrashed();
            } elseif ($trashed === 'with') {
                $query->withTrashed();
            }
        }

        if ($request->filled('role')) {
            $query->where('role', $request->input('role'));
        }

        if ($request->filled('status')) {
            $query->where('status', $request->boolean('status'));
        }

        if ($request->filled('search')) {
            $query->where(function ($sub) use ($request) {
                $sub->where('name', 'like', '%'.$request->input('search').'%')
                    ->orWhere('email', 'like', '%'.$request->input('search').'%');
            });
        }

        $sort = in_array($request->input('sort'), ['name', 'email', 'created_at'], true)
            ? $request->input('sort')
            : 'created_at';

        $direction = in_array($request->input('direction'), ['asc', 'desc'], true)
            ? $request->input('direction')
            : 'desc';

        $users = $query->orderBy($sort, $direction)
            ->paginate($perPage)
            ->withQueryString();

        return view('admin.users.index', [
            'users' => $users,
            'filters' => $request->only(['search', 'role', 'status', 'trashed', 'sort', 'direction', 'per_page']),
            'roles' => [
                User::ROLE_ADMIN => 'Admin',
                User::ROLE_USER => 'User',
            ],
        ]);
    }

    public function create()
    {
        return view('admin.users.form', [
            'user' => new User(),
            'action' => route('admin.users.store'),
            'method' => 'POST',
            'roles' => [
                User::ROLE_ADMIN => 'Admin',
                User::ROLE_USER => 'User',
            ],
        ]);
    }

    public function store(UserRequest $request)
    {
        $payload = $request->validated();
        $payload['password'] = Hash::make($payload['password']);

        User::create($payload);

        return redirect()->route('admin.users.index')
            ->with('success', 'User created successfully.');
    }

    public function edit(User $user)
    {
        return view('admin.users.form', [
            'user' => $user,
            'action' => route('admin.users.update', $user),
            'method' => 'PUT',
            'roles' => [
                User::ROLE_ADMIN => 'Admin',
                User::ROLE_USER => 'User',
            ],
        ]);
    }

    public function update(UserRequest $request, User $user)
    {
        $payload = $request->validated();

        if (! empty($payload['password'])) {
            $payload['password'] = Hash::make($payload['password']);
        } else {
            unset($payload['password']);
        }

        $user->update($payload);

        return redirect()->route('admin.users.index')
            ->with('success', 'User profile updated.');
    }

    public function destroy(User $user)
    {
        if ($user->isAdmin()) {
            return back()->with('error', 'Cannot delete admin account.');
        }

        $user->delete();

        return back()->with('success', 'User archived.');
    }

    public function restore(int $user)
    {
        $model = User::withTrashed()->findOrFail($user);
        $model->restore();

        return back()->with('success', 'User restored.');
    }
}
