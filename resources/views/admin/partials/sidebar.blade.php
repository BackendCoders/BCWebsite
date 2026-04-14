@php use Illuminate\Support\Facades\Auth; @endphp

<aside class="hidden w-64 flex-col border-r border-slate-200 bg-white px-4 py-6 lg:flex">
    <div class="flex items-center gap-2 text-lg font-semibold text-slate-900">
        <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-indigo-600 text-white">AC</span>
        <span>Admin Console</span>
    </div>

    <nav class="mt-8 flex flex-1 flex-col gap-2 text-sm">
        <a href="{{ route('admin.dashboard') }}" class="flex items-center justify-between rounded-xl p-3 font-medium transition {{ request()->routeIs('admin.dashboard') ? 'bg-indigo-100 text-indigo-600' : 'text-slate-500 hover:text-slate-900 hover:bg-slate-50' }}">
            <span>Dashboard</span>
            <span class="text-xs uppercase tracking-wide text-indigo-400">Home</span>
        </a>

        <a href="{{ route('admin.service-categories.index') }}" class="rounded-xl p-3 font-medium {{ request()->routeIs('admin.service-categories.*') ? 'bg-indigo-50 text-indigo-600' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-50' }}">
            Service Categories
        </a>

        <a href="{{ route('admin.services.index') }}" class="rounded-xl p-3 font-medium {{ request()->routeIs('admin.services.*') ? 'bg-indigo-50 text-indigo-600' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-50' }}">
            Services
        </a>

        <a href="{{ route('admin.users.index') }}" class="rounded-xl p-3 font-medium {{ request()->routeIs('admin.users.*') ? 'bg-indigo-50 text-indigo-600' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-50' }}">
            Users
        </a>

        <a href="{{ route('admin.users.index') }}#api" class="rounded-xl p-3 font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-50">
            API Endpoints
        </a>
    </nav>

    <div class="mt-8 border-t border-slate-100 pt-4 text-xs text-slate-500">
        <p class="mb-1">Logged in as</p>
        <p class="text-sm font-semibold text-slate-900">{{ Auth::user()?->name }}</p>
        <p class="text-slate-400">{{ Auth::user()?->email }}</p>
    </div>
</aside>
