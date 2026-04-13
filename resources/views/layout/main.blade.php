<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<div class="flex h-screen">

            @include('layout.header')

    <!-- 🔷 MAIN -->
    <div class="flex-1 flex flex-col">

      

        <!-- CONTENT -->
        <main class="p-6 overflow-y-auto">
            @yield('content')
        </main>

    </div>

    @include('layout.footer')

</div>

</body>
</html>