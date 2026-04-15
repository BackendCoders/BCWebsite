<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

   
</head>

<body class="bg-gray-100 h-screen flex flex-col">

    <!--  Header -->
    @include('layout.header')

    <!--  Main Layout -->
    <div class="flex flex-1 overflow-hidden">

        <!-- 📦 Page Content -->
        <main class="flex-1 p-6 overflow-y-auto">
            @yield('content')
        </main>

    </div>

    <!--  Footer -->
    @include('layout.footer')

    <!-- Chart JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</body>
</html>