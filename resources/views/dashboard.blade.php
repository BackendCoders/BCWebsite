@extends('layout.main')

@section('content')

<!-- 🔥 Title -->
<h1 class="text-2xl font-bold">Ecommerce Dashboard</h1>
<p class="text-gray-500 mb-6">Here’s what’s going on at your business right now</p>

<!-- 🔥 Small Stats -->
<div class="flex gap-6 mb-6">

    <div class="bg-white p-4 rounded shadow flex-1">
        <p class="text-gray-500">New Orders</p>
        <h2 class="text-xl font-bold">57</h2>
    </div>

    <div class="bg-white p-4 rounded shadow flex-1">
        <p class="text-gray-500">On Hold</p>
        <h2 class="text-xl font-bold">5</h2>
    </div>

    <div class="bg-white p-4 rounded shadow flex-1">
        <p class="text-gray-500">Out of Stock</p>
        <h2 class="text-xl font-bold">15</h2>
    </div>

</div>

<!-- 🔥 Charts + Cards -->
<div class="grid grid-cols-3 gap-6 mb-6">

    <!-- Big Chart -->
    <div class="col-span-2 bg-white p-6 rounded shadow">
        <h2 class="font-semibold mb-2">Total Sells</h2>
        <div class="h-40 bg-gray-100 flex items-center justify-center">
            Chart Area
        </div>
    </div>

    <!-- Right Cards -->
    <div class="space-y-4">

        <div class="bg-white p-4 rounded shadow">
            <p>Total Orders</p>
            <h2 class="text-xl font-bold">16,247</h2>
        </div>

        <div class="bg-white p-4 rounded shadow">
            <p>New Customers</p>
            <h2 class="text-xl font-bold">356</h2>
        </div>

    </div>

</div>

<!-- 🔥 Bottom Cards -->
<div class="grid grid-cols-2 gap-6 mb-6">

    <div class="bg-white p-6 rounded shadow">
        <h2 class="font-semibold">Top Coupons</h2>
        <div class="h-32 bg-gray-100 flex items-center justify-center">
            72%
        </div>
    </div>

    <div class="bg-white p-6 rounded shadow">
        <h2 class="font-semibold">Paying vs Non-paying</h2>
        <div class="h-32 bg-gray-100 flex items-center justify-center">
            Chart
        </div>
    </div>

</div>

<!-- 🔥 Table -->
<div class="bg-white p-6 rounded shadow">

    <h2 class="font-semibold mb-4">Latest Reviews</h2>

    <table class="w-full text-left">

        <thead class="border-b">
            <tr>
                <th class="p-2">Product</th>
                <th>Customer</th>
                <th>Rating</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            <tr class="border-b">
                <td class="p-2">Shoes</td>
                <td>John</td>
                <td>⭐⭐⭐⭐</td>
                <td><span class="text-green-500">Active</span></td>
            </tr>
        </tbody>

    </table>

</div>


@endsection