<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('Backend', 'Backend Coders India ')</title>

    <link rel="icon" type="image/svg+xml" alt="web development company in Kanpur" href="{{asset('assets/images/bci_icon.png')}}" class="bg-black"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    </noscript>
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="preconnect" href="https://unpkg.com" crossorigin>

    <script>
        window.tailwind = {
            config: {
                darkMode: 'class',
                theme: {
                    extend: {
                        colors: {
                            brand: '#FD5528'
                        }
                    }
                }
            }
        };
    </script>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Professional Rich Text Editor Styles -->
    @include('layout.rich-editor-styles')
    @include('layout.blog-content-styles')

    <style>
        body {
            font-family: 'Manrope', sans-serif;
        }

        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #FD5528;
        }

        .dark ::-webkit-scrollbar-thumb {
            background: #475569;
        }

        .dark ::-webkit-scrollbar-thumb:hover {
            background: #FD5528;
        }
    </style>
</head>
<body class="bg-slate-100 text-slate-900 antialiased transition-colors duration-300">
    <div class="min-h-screen bg-[radial-gradient(circle_at_top_right,_rgba(253,85,40,0.16),_transparent_30%),radial-gradient(circle_at_top_left,_rgba(148,163,184,0.18),_transparent_24%)]">
        @include('layout.header')

        <main class="min-h-screen lg:pl-72">
            <div class="px-4 pb-8 pt-24 sm:px-6 lg:px-8">
                @yield('content')
                @include('layout.footer')
            </div>
        </main>
    </div>

    <!-- Professional Rich Text Editor Scripts & Engine -->
    @include('layout.rich-editor-scripts')

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const root = document.documentElement;
        const sidebar = document.getElementById('sidebar');
        const sidebarBackdrop = document.getElementById('sidebarBackdrop');
        const sidebarToggle = document.getElementById('sidebarToggle');
        const themeToggle = document.getElementById('themeToggle');
        const themeIcon = document.getElementById('themeIcon');
        const themeLabel = document.getElementById('themeLabel');

        const applyTheme = (theme) => {
            const isDark = theme === 'dark';
            root.classList.toggle('dark', isDark);
            localStorage.setItem('dashboard-theme', theme);

            if (themeIcon) themeIcon.textContent = isDark ? '☀' : '☾';
            if (themeLabel) themeLabel.textContent = isDark ? 'Light' : 'Dark';
        };

        const savedTheme = localStorage.getItem('dashboard-theme');
        const preferredTheme = savedTheme || 'light';
        applyTheme(preferredTheme);

        themeToggle?.addEventListener('click', function () {
            applyTheme(root.classList.contains('dark') ? 'light' : 'dark');
        });

        const openSidebar = () => {
            sidebar?.classList.remove('-translate-x-full');
            sidebarBackdrop?.classList.remove('hidden');
        };

        const closeSidebar = () => {
            sidebar?.classList.add('-translate-x-full');
            sidebarBackdrop?.classList.add('hidden');
        };

        sidebarToggle?.addEventListener('click', function () {
            const isOpen = !sidebar?.classList.contains('-translate-x-full');
            isOpen ? closeSidebar() : openSidebar();
        });

        sidebarBackdrop?.addEventListener('click', closeSidebar);

        const handleResize = () => {
            if (window.innerWidth >= 1024) {
                sidebar?.classList.remove('-translate-x-full');
                sidebarBackdrop?.classList.add('hidden');
            } else {
                sidebar?.classList.add('-translate-x-full');
            }
        };

        handleResize();
        window.addEventListener('resize', handleResize);
    });
    </script>
</body>
</html>
