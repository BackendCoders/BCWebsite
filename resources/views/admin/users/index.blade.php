@extends('admin.layouts.app')

@section('title', 'Users')

@section('content')
<div class="space-y-6">

    <div class="flex flex-col gap-3 rounded-3xl border border-slate-100 bg-white p-6 shadow-sm md:flex-row md:items-center md:justify-between">
        <div>
            <p class="text-sm text-slate-500">Access control</p>
            <h1 class="text-2xl font-semibold text-slate-900">Users</h1>
        </div>
        <a href="{{ route('admin.users.create') }}" class="inline-flex items-center gap-2 rounded-2xl border border-indigo-100 px-4 py-2 text-sm font-semibold text-indigo-600 transition hover:bg-indigo-50">Add user</a>
    </div>

    <form method="GET" class="grid gap-3 rounded-3xl border border-slate-100 bg-white p-6 shadow-sm md:grid-cols-2 lg:grid-cols-4">
        <input type="search" name="search" placeholder="Search by name or email" value="{{ request('search') }}" class="rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none" />
        <select name="role" class="rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none">
            <option value="">All roles</option>
            @foreach($roles as $key => $label)
                <option value="{{ $key }}" {{ request('role') === $key ? 'selected' : '' }}>{{ $label }}</option>
            @endforeach
        </select>
        <select name="status" class="rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none">
            <option value="">Status</option>
            <option value="1" {{ request('status') === '1' ? 'selected' : '' }}>Active</option>
            <option value="0" {{ request('status') === '0' ? 'selected' : '' }}>Inactive</option>
        </select>
        <select name="trashed" class="rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none">
            <option value="">Live only</option>
            <option value="with" {{ request('trashed') === 'with' ? 'selected' : '' }}>Include archived</option>
            <option value="only" {{ request('trashed') === 'only' ? 'selected' : '' }}>Archived only</option>
        </select>
        <div class="flex items-center gap-2">
            <label class="text-xs uppercase tracking-wide text-slate-400">Sort</label>
            <select name="sort" class="rounded-2xl border border-slate-200 px-3 py-2 text-sm focus:border-indigo-300 focus:outline-none">
                <option value="created_at" {{ request('sort') === 'created_at' ? 'selected' : '' }}>Created</option>
                <option value="name" {{ request('sort') === 'name' ? 'selected' : '' }}>Name</option>
                <option value="email" {{ request('sort') === 'email' ? 'selected' : '' }}>Email</option>
            </select>
        </div>
        <div class="flex items-center gap-2">
            <label class="text-xs uppercase tracking-wide text-slate-400">Direction</label>
            <select name="direction" class="rounded-2xl border border-slate-200 px-3 py-2 text-sm focus:border-indigo-300 focus:outline-none">
                <option value="desc" {{ request('direction') === 'desc' ? 'selected' : '' }}>Descending</option>
                <option value="asc" {{ request('direction') === 'asc' ? 'selected' : '' }}>Ascending</option>
            </select>
        </div>
        <button type="submit" class="rounded-2xl border border-indigo-100 bg-indigo-50 px-4 py-2 text-sm font-semibold text-indigo-600">Filter</button>
    </form>

    <div class="rounded-3xl border border-slate-100 bg-white p-6 shadow-sm">
        @if($users->isEmpty())
            <div class="space-y-2 text-center text-sm text-slate-500">
                <p>No users found.</p>
                <p>Create a new staff member to get started.</p>
            </div>
        @else
            <div class="overflow-hidden rounded-2xl border border-slate-100">
                <table class="w-full text-left text-sm text-slate-600">
                    <thead class="bg-slate-50 text-xs uppercase tracking-wide text-slate-400">
                        <tr>
                            <th class="px-4 py-3">Name</th>
                            <th class="px-4 py-3">Email</th>
                            <th class="px-4 py-3">Role</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Joined</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        @foreach($users as $user)
                            <tr class="{{ $user->trashed() ? 'bg-slate-100 text-slate-400' : 'bg-white' }}">
                                <td class="px-4 py-3">
                                    <p class="font-semibold text-slate-900">{{ $user->name }}</p>
                                </td>
                                <td class="px-4 py-3 text-slate-500">{{ $user->email }}</td>
                                <td class="px-4 py-3">
                                    <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600">{{ $roles[$user->role] ?? ucfirst($user->role) }}</span>
                                </td>
                                <td class="px-4 py-3">
                                    <span class="rounded-full bg-{{ $user->status ? 'emerald' : 'slate' }}-100 px-3 py-1 text-xs font-semibold text-{{ $user->status ? 'emerald' : 'slate' }}-600">
                                        {{ $user->status ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                                <td class="px-4 py-3 text-xs text-slate-400">{{ $user->created_at->format('M d, Y') }}</td>
                                <td class="px-4 py-3">
                                    <div class="flex flex-wrap gap-2">
                                        <a href="{{ route('admin.users.edit', $user) }}" class="rounded-full border border-slate-200 px-3 py-1 text-xs font-semibold text-slate-600 hover:border-slate-300 hover:text-slate-900">Edit</a>
                                        @if($user->trashed())
                                            <form method="POST" action="{{ route('admin.users.restore', $user->id) }}" class="inline">
                                                @csrf
                                                <button type="submit" class="rounded-full border border-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-600">Restore</button>
                                            </form>
                                        @else
                                            <form method="POST" action="{{ route('admin.users.destroy', $user) }}" data-loading class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="rounded-full border border-rose-100 px-3 py-1 text-xs font-semibold text-rose-600" {{ $user->isAdmin() ? 'disabled' : '' }}>Archive</button>
                                            </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-6">
                {{ $users->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
