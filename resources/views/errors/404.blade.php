@php
    $page = (object) [
        'title' => '404 - Page Not Found | Backend Coders India',
        'meta_title' => '404 - Page Not Found | Backend Coders India',
        'meta_description' => 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.',
        'is_index' => 0,
    ];
@endphp

@extends('component.main')

@section('content')
<main class="min-h-[70vh] flex items-center justify-center bg-slate-50 py-20 px-6">
    <div class="max-w-2xl w-full text-center bg-white rounded-3xl border border-slate-200/80 p-8 sm:p-12 shadow-sm">
        <div class="inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-orange-100 text-[#FD5528] font-extrabold text-3xl mb-6 shadow-inner">
            404
        </div>
        <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
            Page Not Found
        </h1>
        <p class="mt-4 text-base text-slate-600 leading-relaxed max-w-lg mx-auto">
            The link you followed may be broken, or the page may have been moved or updated. Explore our core services or get in touch with our Kanpur engineering team.
        </p>

        <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
            <a href="{{ url('/') }}" class="inline-flex items-center justify-center rounded-xl bg-[#FD5528] px-6 py-3 text-sm font-semibold text-white shadow hover:bg-orange-600 transition">
                Return to Homepage
            </a>
            <a href="{{ route('frontend.service') }}" class="inline-flex items-center justify-center rounded-xl border border-slate-300 bg-white px-6 py-3 text-sm font-semibold text-slate-700 hover:bg-slate-50 transition">
                Browse Services
            </a>
            <a href="{{ route('frontend.contact') }}" class="inline-flex items-center justify-center rounded-xl border border-slate-300 bg-white px-6 py-3 text-sm font-semibold text-slate-700 hover:bg-slate-50 transition">
                Contact Us
            </a>
        </div>

        <div class="mt-10 border-t border-slate-100 pt-6">
            <p class="text-xs text-slate-500">
                Popular destinations:
                <a href="{{ url('/page/website-design-development') }}" class="text-[#FD5528] hover:underline font-medium">Website Design</a> •
                <a href="{{ url('/page/mobile-app-development') }}" class="text-[#FD5528] hover:underline font-medium">Mobile Apps</a> •
                <a href="{{ url('/page/erp-pos-software') }}" class="text-[#FD5528] hover:underline font-medium">ERP & POS Software</a> •
                <a href="{{ url('/packages') }}" class="text-[#FD5528] hover:underline font-medium">Pricing Packages</a>
            </p>
        </div>
    </div>
</main>
@endsection
