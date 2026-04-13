   <!-- 🔷 SIDEBAR -->
    <aside class="w-64 bg-white border-r hidden lg:block">

        <div class="p-4 font-bold text-orange-500 text-lg">
            InApp
        </div>

        <nav class="mt-4 space-y-2">

            <a href="#" class="block px-4 py-2 bg-orange-100 text-orange-500 rounded">
                Dashboard
            </a>

            <a href="{{route('dashboard.category.index')}}" class="block px-4 py-2 hover:bg-gray-100">
                Category
            </a>

            <a href="{{ route('dashboard.blog.index') }}" class="block px-4 py-2 hover:bg-gray-100">
                Blog
            </a>

            <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                Reports
            </a>

        </nav>

    </aside>

 
