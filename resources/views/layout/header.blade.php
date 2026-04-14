@php
    $navLinks = [
        ['label' => 'Dashboard', 'route' => 'dashboard.dashbaord', 'pattern' => 'dashboard.dashbaord'],
        ['label' => 'Service Categories', 'route' => 'dashboard.service-categories.index', 'pattern' => 'dashboard.service-categories.*'],
        ['label' => 'Categories', 'route' => 'dashboard.category.index', 'pattern' => 'dashboard.category.*'],
        ['label' => 'Blog', 'route' => 'dashboard.blog.index', 'pattern' => 'dashboard.blog.*'],
        ['label' => 'Reports', 'route' => '#', 'pattern' => null],
    ];
@endphp

<div class="w-full lg:w-64 flex-shrink-0">
    <aside class="hidden lg:flex lg:flex-col border-r bg-white h-full">
        <div class="px-6 py-5 border-b font-semibold text-orange-500 text-lg uppercase tracking-wide">
            InApp Admin
        </div>

        <nav class="flex-1 px-4 py-6 space-y-2 text-sm">
            @foreach($navLinks as $link)
                @php
                    $isActive = $link['pattern'] ? request()->routeIs($link['pattern']) : false;
                    $href = $link['route'] === '#' ? '#' : route($link['route']);
                    $classes = $isActive
                        ? 'px-4 py-2 rounded-lg bg-orange-100 text-orange-600 font-medium'
                        : 'px-4 py-2 rounded-lg text-gray-600 hover:bg-gray-50 hover:text-orange-600 transition';
                @endphp

                <a href="{{ $href }}" class="{{ $classes }}">
                    {{ $link['label'] }}
                </a>
            @endforeach
        </nav>
    </aside>

    <div class="lg:hidden w-full border-b bg-white">
        <div class="flex items-center justify-between px-4 py-4 border-b">
            <div class="text-lg font-bold text-orange-500">InApp Admin</div>
            <span class="text-xs uppercase tracking-wide text-gray-500">Mobile</span>
        </div>
        <nav class="flex flex-wrap gap-2 px-4 py-3">
            @foreach($navLinks as $link)
                @php
                    $isActive = $link['pattern'] ? request()->routeIs($link['pattern']) : false;
                    $href = $link['route'] === '#' ? '#' : route($link['route']);
                    $classes = $isActive
                        ? 'px-3 py-2 rounded-md bg-orange-100 text-orange-600 text-xs font-semibold'
                        : 'px-3 py-2 rounded-md text-xs font-medium text-gray-600 bg-gray-50 hover:bg-orange-50';
                @endphp

                <a href="{{ $href }}" class="{{ $classes }}">
                    {{ $link['label'] }}
                </a>
            @endforeach
        </nav>
    </div>
</div>
