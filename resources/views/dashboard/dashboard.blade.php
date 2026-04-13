@extends('layout.main')

@section('content')

<div class="space-y-6">

    <!-- 🔷 HEADER -->
    <div>
        <h2 class="text-2xl font-bold text-gray-800">Dashboard</h2>
        <p class="text-gray-500 text-sm">Welcome back 👋</p>
    </div>


    <!-- 🔷 STATS CARDS -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

        <!-- CARD -->
        <div class="bg-white p-5 rounded-xl shadow border border-gray-100 hover:shadow-md transition">
            <div class="flex justify-between items-center">
                <div>
                    <p class="text-sm text-gray-500">Total Sales</p>
                    <h3 class="text-2xl font-bold text-gray-800 mt-1">$25,000</h3>
                    <p class="text-xs text-orange-500 mt-1">+5% since last month</p>
                </div>
                <div class="bg-orange-100 text-orange-500 p-3 rounded-lg">
                    💰
                </div>
            </div>
        </div>

        <!-- CARD -->
        <div class="bg-white p-5 rounded-xl shadow border border-gray-100 hover:shadow-md transition">
            <div class="flex justify-between items-center">
                <div>
                    <p class="text-sm text-gray-500">Total Purchase</p>
                    <h3 class="text-2xl font-bold text-gray-800 mt-1">$18,000</h3>
                    <p class="text-xs text-green-500 mt-1">+22% since last month</p>
                </div>
                <div class="bg-green-100 text-green-500 p-3 rounded-lg">
                    🛒
                </div>
            </div>
        </div>

        <!-- CARD -->
        <div class="bg-white p-5 rounded-xl shadow border border-gray-100 hover:shadow-md transition">
            <div class="flex justify-between items-center">
                <div>
                    <p class="text-sm text-gray-500">Total Expenses</p>
                    <h3 class="text-2xl font-bold text-gray-800 mt-1">$9,000</h3>
                    <p class="text-xs text-blue-500 mt-1">+10% since last month</p>
                </div>
                <div class="bg-blue-100 text-blue-500 p-3 rounded-lg">
                    💳
                </div>
            </div>
        </div>

        <!-- CARD -->
        <div class="bg-white p-5 rounded-xl shadow border border-gray-100 hover:shadow-md transition">
            <div class="flex justify-between items-center">
                <div>
                    <p class="text-sm text-gray-500">Invoice Due</p>
                    <h3 class="text-2xl font-bold text-gray-800 mt-1">$25,000</h3>
                    <p class="text-xs text-yellow-500 mt-1">+35% since last month</p>
                </div>
                <div class="bg-yellow-100 text-yellow-500 p-3 rounded-lg">
                    📄
                </div>
            </div>
        </div>

    </div>


    <!-- 🔷 CHART SECTION -->
   <!-- 🔷 LOWER DASHBOARD -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-6">

    <!-- 🔶 TOP SELLING PRODUCTS -->
    <div class="bg-white rounded-xl shadow border p-5">

        <div class="flex justify-between items-center mb-4">
            <h3 class="font-semibold text-gray-800">Top Selling Products</h3>
            <span class="text-xs bg-gray-100 px-2 py-1 rounded">Today</span>
        </div>

        <div class="space-y-4">

            @foreach([
                ['name'=>'Wireless Earphones','price'=>'$89','units'=>'1250','badge'=>'18%','color'=>'red'],
                ['name'=>'Gaming Joy Stick','price'=>'$49','units'=>'5420','badge'=>'32%','color'=>'orange'],
                ['name'=>'Smart Watch Pro','price'=>'$98','units'=>'862','badge'=>'22%','color'=>'blue'],
                ['name'=>'USB-C Fast Charger','price'=>'$35','units'=>'3200','badge'=>'28%','color'=>'green'],
                ['name'=>'Bluetooth Speaker','price'=>'$65','units'=>'2890','badge'=>'25%','color'=>'yellow'],
            ] as $item)

            <div class="flex items-center justify-between">

                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-gray-200 rounded"></div>
                    <div>
                        <p class="text-sm font-medium text-gray-800">{{ $item['name'] }}</p>
                        <p class="text-xs text-gray-500">{{ $item['price'] }} • {{ $item['units'] }} Units</p>
                    </div>
                </div>

                <span class="text-xs px-2 py-1 rounded 
                    bg-{{ $item['color'] }}-100 text-{{ $item['color'] }}-600">
                    {{ $item['badge'] }}
                </span>

            </div>

            @endforeach

        </div>

    </div>


    <!-- 🔶 LOW STOCK -->
    <div class="bg-white rounded-xl shadow border p-5">

        <div class="flex justify-between items-center mb-4">
            <h3 class="font-semibold text-gray-800">Low Stock Products</h3>
            <a href="#" class="text-xs text-orange-500">View All</a>
        </div>

        <div class="space-y-4">

            @foreach([
                ['name'=>'Wireless Headphones','stock'=>6],
                ['name'=>'USB-C Cable Pack','stock'=>9],
                ['name'=>'Phone Screen Protector','stock'=>3],
                ['name'=>'Portable Charger','stock'=>7],
                ['name'=>'Mechanical Keyboard','stock'=>2],
            ] as $item)

            <div class="flex justify-between items-center">

                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-gray-200 rounded"></div>
                    <div>
                        <p class="text-sm font-medium">{{ $item['name'] }}</p>
                        <p class="text-xs text-gray-400">ID: #{{ rand(100000,999999) }}</p>
                    </div>
                </div>

                <div class="text-right">
                    <p class="text-sm font-bold text-red-500">{{ $item['stock'] }}</p>
                    <p class="text-xs text-gray-400">In Stock</p>
                </div>

            </div>

            @endforeach

        </div>

    </div>


    <!-- 🔶 RECENT SALES -->
    <div class="bg-white rounded-xl shadow border p-5">

        <div class="flex justify-between items-center mb-4">
            <h3 class="font-semibold text-gray-800">Recent Sales</h3>
            <span class="text-xs bg-gray-100 px-2 py-1 rounded">Weekly</span>
        </div>

        <div class="space-y-4">

            @foreach([
                ['name'=>'MacBook Pro','status'=>'Completed','color'=>'green'],
                ['name'=>'AirPods Pro','status'=>'Processing','color'=>'orange'],
                ['name'=>'iPad Air','status'=>'Completed','color'=>'green'],
                ['name'=>'Apple Watch','status'=>'Pending','color'=>'yellow'],
                ['name'=>'Magic Keyboard','status'=>'Cancelled','color'=>'red'],
            ] as $item)

            <div class="flex justify-between items-center">

                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-gray-200 rounded"></div>
                    <div>
                        <p class="text-sm font-medium">{{ $item['name'] }}</p>
                        <p class="text-xs text-gray-400">$299</p>
                    </div>
                </div>

                <span class="text-xs px-2 py-1 rounded 
                    bg-{{ $item['color'] }}-100 text-{{ $item['color'] }}-600">
                    {{ $item['status'] }}
                </span>

            </div>

            @endforeach

        </div>

    </div>

</div>
</div>

@endsection


