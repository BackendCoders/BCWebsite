<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Dashboard')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans antialiased bg-slate-50 text-slate-900">
<div class="flex min-h-screen">
    @include('admin.partials.sidebar')

    <div class="flex flex-1 flex-col">
        @include('admin.partials.topbar')

        <main class="flex-1 overflow-y-auto p-6">
            @include('admin.partials.flash')
            @yield('content')
        </main>
    </div>
</div>

<div id="loading-overlay" class="pointer-events-none fixed inset-0 z-50 hidden items-center justify-center bg-slate-900/50">
    <div class="animate-spin rounded-full border-4 border-white border-t-transparent h-14 w-14"></div>
</div>

<script>
    const overlay = document.getElementById('loading-overlay');

    document.addEventListener('submit', (event) => {
        if (event.target.dataset.loading !== undefined) {
            overlay.classList.remove('hidden');
        }
    });

    document.addEventListener('ajax:success', () => {
        overlay.classList.add('hidden');
    });

    document.addEventListener('click', async (event) => {
        const button = event.target.closest('[data-toggle-status]');
        if (! button) {
            return;
        }

        event.preventDefault();

        const url = button.dataset.toggleStatus;
        const state = button.dataset.currentStatus === '1';

        try {
            const response = await fetch(url, {
                method: 'PATCH',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                },
                body: JSON.stringify({}),
            });

            if (! response.ok) {
                throw new Error('Unable to toggle status.');
            }

            const payload = await response.json();
            button.dataset.currentStatus = payload.status ? '1' : '0';
            button.textContent = payload.status ? 'Active' : 'Inactive';
            button.classList.toggle('bg-emerald-100', payload.status);
            button.classList.toggle('bg-slate-100', ! payload.status);
            button.closest('tr')?.querySelector('[data-status-badge]')?.textContent = payload.status ? 'Active' : 'Inactive';
        } catch (error) {
            alert(error.message);
        }
    });
</script>

@stack('scripts')
</body>
</html>
