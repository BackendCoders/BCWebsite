<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex min-h-screen flex-col items-center justify-center bg-slate-50">
    <div class="w-full max-w-md rounded-3xl border border-slate-200 bg-white p-6 shadow-lg">
        <h1 class="mb-2 text-center text-2xl font-semibold text-slate-900">Admin Console Login</h1>
        <p class="mb-6 text-center text-sm text-slate-500">Authenticate with your admin credentials.</p>

        @if(session('error'))
            <div class="mb-4 rounded-2xl bg-rose-50 px-4 py-3 text-sm text-rose-700">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login') }}" class="space-y-4">
            @csrf
            <div class="space-y-1 text-sm text-slate-500">
                <label>Email</label>
                <input type="email" name="email" value="{{ old('email') }}" class="block w-full rounded-2xl border border-slate-200 px-4 py-2 focus:border-indigo-300 focus:outline-none" required>
                @error('email')
                    <p class="text-xs text-rose-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="space-y-1 text-sm text-slate-500">
                <label>Password</label>
                <input type="password" name="password" class="block w-full rounded-2xl border border-slate-200 px-4 py-2 focus:border-indigo-300 focus:outline-none" required>
                @error('password')
                    <p class="text-xs text-rose-600">{{ $message }}</p>
                @enderror
            </div>
            <label class="inline-flex items-center gap-2 text-sm text-slate-500">
                <input type="checkbox" name="remember" class="h-4 w-4">
                Keep me signed in
            </label>
            <button type="submit" class="w-full rounded-2xl bg-indigo-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-indigo-500">Sign in</button>
        </form>

        <p class="mt-6 text-center text-xs text-slate-400">Need access? Contact the system administrator.</p>
    </div>
</body>
</html>
