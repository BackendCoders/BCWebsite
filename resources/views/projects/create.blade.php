@extends('layout.main')

@section('content')
<div class="space-y-6 relative overflow-hidden">
    <div class="pointer-events-none absolute inset-x-0 top-0 -z-10 h-56 bg-gradient-to-b from-[#FD5528]/10 via-transparent to-transparent blur-3xl"></div>

    <div class="flex flex-col gap-4 rounded-[2.25rem] border border-slate-200/70 bg-white/75 p-6 shadow-2xl shadow-slate-200/40 backdrop-blur-xl lg:flex-row lg:items-center lg:justify-between">
        <div class="space-y-2">
            <span class="inline-flex items-center rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-[#FD5528]">Projects</span>
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-slate-900">Add project</h2>
                <p class="mt-1 max-w-2xl text-sm text-slate-500">Create a portfolio item with FAQs, SEO metadata, technologies, and publishing controls.</p>
            </div>
        </div>
    </div>

    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('projects._form', ['buttonText' => 'Save Project'])
    </form>
</div>
@endsection
