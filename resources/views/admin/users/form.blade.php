@extends('admin.layouts.app')

@section('title', $user->exists ? 'Edit User' : 'New User')

@section('content')
<div class="space-y-6">

    <div class="rounded-3xl border border-slate-100 bg-white p-6 shadow-sm">
        <header class="mb-4 space-y-1">
            <p class="text-sm text-slate-500">Team management</p>
            <h1 class="text-2xl font-semibold text-slate-900">{{ $user->exists ? 'Edit user' : 'Add user' }}</h1>
        </header>

        <form method="POST" action="{{ $action }}" class="space-y-5" data-loading>
            @csrf
            @if($user->exists)
                @method('PUT')
            @endif

            <div class="grid gap-4 md:grid-cols-2">
                <label class="space-y-1 text-sm text-slate-500">
                    <span>Name</span>
                    <input type="text" name="name" value="{{ old('name', $user->name) }}" class="w-full rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none" required>
                </label>

                <label class="space-y-1 text-sm text-slate-500">
                    <span>Email</span>
                    <input type="email" name="email" value="{{ old('email', $user->email) }}" class="w-full rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none" required>
                </label>
            </div>

            <div class="grid gap-4 md:grid-cols-2">
                <label class="space-y-1 text-sm text-slate-500">
                    <span>Role</span>
                    <select name="role" class="w-full rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none" required>
                        @foreach($roles as $key => $label)
                            <option value="{{ $key }}" {{ old('role', $user->role) === $key ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                </label>

                <label class="space-y-1 text-sm text-slate-500">
                    <span>Status</span>
                    <select name="status" class="w-full rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none">
                        <option value="1" {{ old('status', $user->status ?? true) ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ old('status', $user->status ?? true) ? '' : 'selected' }}>Inactive</option>
                    </select>
                </label>
            </div>

            <label class="space-y-1 text-sm text-slate-500">
                <span>Password</span>
                <input type="password" name="password" autocomplete="new-password" class="w-full rounded-2xl border border-slate-200 px-4 py-2 text-sm focus:border-indigo-300 focus:outline-none" {{ $user->exists ? '' : 'required' }}>
                @if($user->exists)
                    <p class="text-xs text-slate-400">Leave empty to keep existing password.</p>
                @endif
            </label>

            <div class="flex justify-end gap-2">
                <a href="{{ route('admin.users.index') }}" class="rounded-2xl border border-slate-200 px-4 py-2 text-sm font-semibold text-slate-600 hover:bg-slate-50">Cancel</a>
                <button type="submit" class="rounded-2xl bg-indigo-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-indigo-500">{{ $user->exists ? 'Update user' : 'Create user' }}</button>
            </div>
        </form>
    </div>
</div>
@endsection
