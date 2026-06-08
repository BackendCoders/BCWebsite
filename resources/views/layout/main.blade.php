<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> Backend Coders India-Dashboard</title>

    <link rel="icon" type="image/svg+xml" alt="web development company in Kanpur" href="{{asset('assets/images/bci_icon.png')}}" class="bg-black"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        brand: '#FD5528'
                    }
                }
            }
        };
    </script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Manrope', sans-serif;
        }

        .ql-toolbar.ql-snow {
            border-color: rgb(226 232 240);
            border-top-left-radius: 1rem;
            border-top-right-radius: 1rem;
            background: rgb(248 250 252);
        }

        .rich-editor-shell {
            display: flex;
            height: 13rem;
            flex-direction: column;
        }

        .ql-container.ql-snow {
            border-color: rgb(226 232 240);
            border-bottom-left-radius: 1rem;
            border-bottom-right-radius: 1rem;
            background: #fff;
            height: calc(100% - 42px);
            flex: 1 1 auto;
            overflow: hidden;
        }

        .ql-editor {
            height: 100%;
            min-height: 0;
            font-size: 1rem;
            line-height: 1.05;
            color: rgb(15 23 42);
            padding: 0.9rem 1rem 1.5rem;
            padding-bottom:4px;
            overflow-y: auto;
        }

        .ql-editor.ql-blank::before {
            color: rgb(148 163 184);
            font-style: italic;
        }

        ::-webkit-scrollbar {
            width: 0px;
        }

        ::-webkit-scrollbar-thumb {
            background: #FD5528;
            border-radius: 10px;
        }
    </style>

<!--  -->

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

    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
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
        const preferredTheme = savedTheme || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
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

        const initQuillEditors = (formSelector, editorSelector, hiddenSelector, placeholder) => {
            document.querySelectorAll(formSelector).forEach((form) => {
                const editorContainer = form.querySelector(editorSelector);
                const hiddenInput = form.querySelector(hiddenSelector);

                if (!editorContainer || !hiddenInput || typeof Quill === 'undefined') {
                    return;
                }

                const quill = new Quill(editorContainer, {
                    theme: 'snow',
                    placeholder,
                    modules: {
                        toolbar: [
                            [{ header: [1, 2, 3, false] }],
                            ['bold', 'italic', 'underline', 'strike'],
                            [{ list: 'ordered' }, { list: 'bullet' }],
                            ['blockquote', 'link', 'image'],
                            ['clean'],
                        ],
                    },
                });

                const initialContent = hiddenInput.value || '';
                if (initialContent) {
                    quill.root.innerHTML = initialContent;
                }

                const syncContent = () => {
                    hiddenInput.value = quill.root.innerHTML;
                };

                quill.on('text-change', syncContent);
                form.addEventListener('submit', syncContent);
                syncContent();
            });
        };

        initQuillEditors('[data-blog-form]', '[data-blog-editor]', '[data-blog-content]', 'Write your blog content here...');
        initQuillEditors('[data-rich-form]', '[data-rich-editor]', '[data-rich-content]', 'Write rich text here...');
    });
    </script>

</body>
</html>
