<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Projects | ArnoldCtn</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <style>
        body {
            font-family:Georgia, 'Times New Roman', Times, serif, Roboto, Helvetica, Arial, sans-serif;
            scroll-behavior: smooth;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }
        ::-webkit-scrollbar-track {
            background: #0f172a;
        }
        ::-webkit-scrollbar-thumb {
            background: #1e40af;
            border-radius: 5px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #3b82f6;
        }
    </style>
</head>
<body class="bg-gradient-to-b from-slate-950 via-blue-700 to-slate-500 text-slate-100 min-h-screen selection:bg-blue-600 selection:text-white">

    <!-- Sticky Navigation Bar -->
    <header id="navbar" class="sticky top-0 z-50 w-full bg-slate-900/80 backdrop-blur-md border-b border-blue-900/40 transition-all duration-300">
        <nav class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">
            
            <!-- Logo Section -->
            <a href="{{ url('/') }}" class="group flex items-center gap-2">
                <h1 class="text-2xl md:text-3xl font-black tracking-wider bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-sky-400 group-hover:from-sky-400 group-hover:to-blue-500 transition duration-300">
                    My Portfolio
                </h1>
            </a>

            <!-- Menu Links & Profile Wrapper -->
            <div class="flex items-center gap-6">
                <!-- Navigation Drawer -->
                <div id="nav-menu" class="fixed top-[72px] left-[-100%] w-[75%] h-[calc(100vh-72px)] bg-slate-900/95 backdrop-blur-lg p-8 transition-all duration-300 ease-in-out border-r border-blue-900/50 md:static md:w-auto md:h-auto md:bg-transparent md:p-0 md:border-none flex flex-col md:flex-row items-start md:items-center gap-8 md:gap-8 lg:gap-12">
                    <ul class="flex flex-col md:flex-row gap-6 md:gap-8 lg:gap-10 text-lg md:text-base lg:text-lg font-semibold tracking-wide w-full md:w-auto">
                        <li><a class="block py-2 text-slate-300 hover:text-blue-400 transition" href="{{ url('/') }}#home">Home</a></li>
                        <li><a class="block py-2 text-slate-300 hover:text-blue-400 transition" href="{{ url('/') }}#info">Info</a></li>
                        <li><a class="block py-2 text-slate-300 hover:text-blue-400 transition" href="{{ url('/') }}#aboutME">About Me</a></li>
                        <li><a class="block py-2 text-slate-300 hover:text-blue-400 transition" href="{{ url('/') }}#ContactME">Contact Me</a></li>
                    </ul>
                </div>

                <!-- User Profile Headshot Container -->
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-sky-500 rounded-full blur opacity-60 group-hover:opacity-100 transition duration-300"></div>
                    <img src="{{asset('images/clint.jpg')}}" alt="Avatar" class="relative size-10 rounded-full object-cover border border-slate-900 cursor-pointer">
                </div>

                <!-- Ionicons Driven Hamburger Trigger -->
                <button id="menu-toggle" aria-label="Toggle menu" class="text-4xl text-blue-400 hover:text-sky-300 cursor-pointer focus:outline-none md:hidden flex items-center justify-center">
                     <svg id="menu-icon" name="menu-outline" width="40" height="40" viewBox="0 0 21 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="21" height="1.5" rx=".75" fill="white"/>
                                <rect x="8" y="6" width="13" height="1.5" rx=".75" fill="white"/>
                                <rect x="6" y="13" width="15" height="1.5" rx=".75" fill="white"/>
                            </svg>
                </button>
            </div>
        </nav>
    </header>

    <main class="max-w-7xl mx-auto px-6 py-12">
        <h1 class="text-4xl sm:text-5xl font-extrabold text-blue-400 mb-12 text-center">All Projects</h1>

        @foreach ($categorizedProjects as $category => $projects)
            @if ($projects->count() > 0)
                <div class="mb-16">
                    <h2 class="text-3xl font-extrabold text-sky-400 mb-8 capitalize">{{ $category }} Projects</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach ($projects as $project)
                            <a href="{{ route('project.show', $project['id']) }}" class="group bg-slate-900/50 rounded-2xl overflow-hidden border border-blue-900/40 hover:border-blue-500 transition-all duration-300 hover:-translate-y-1 flex flex-col">
                                <div class="relative overflow-hidden aspect-video w-full bg-slate-950">
                                    <img src="{{$project['image']}}" alt="{{$project['title']}} Screenshot" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-105">
                                    <div class="absolute inset-0 bg-slate-950/20 group-hover:bg-slate-950/0 transition"></div>
                                </div>
                                <div class="p-6 bg-slate-900/90 flex-grow flex flex-col justify-between items-center gap-4 border-t border-blue-950">
                                    <h3 class="text-xl font-bold tracking-wide text-slate-200 group-hover:text-blue-400 transition">{{$project['title']}}</h3>
                                    <span class="inline-flex items-center gap-1 text-sm text-sky-400 font-medium">
                                        Explore Project <ion-icon name="open-outline"></ion-icon>
                                    </span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif
        @endforeach
    </main>

    <!-- Footer System Context -->
    <footer class="w-full bg-slate-950 border-t border-blue-950 py-6 text-center text-sm text-slate-500">
        <p>&copy; 2026 ArnoldCtn. All rights reserved.</p>
    </footer>

    <!-- Vanilla Layout & Structural Logic JavaScript Interaction Controls -->
    <script>
        // Responsive Menu Toggle Script Matrix
        const menuToggle = document.getElementById('menu-toggle');
        const navMenu = document.getElementById('nav-menu');
        const menuIcon = document.getElementById('menu-icon');

        if (menuToggle && navMenu && menuIcon) {
            menuToggle.addEventListener('click', () => {
                const isOpen = navMenu.style.left === '0px';
                if (isOpen) {
                    navMenu.style.left = '-100%';
                    menuIcon.setAttribute('name', 'menu-outline');
                } else {
                    navMenu.style.left = '0px';
                    menuIcon.setAttribute('name', 'close-outline');
                }
            });

            // Close responsive drawer upon clicking anchor nodes safely
            const navLinks = navMenu.querySelectorAll('a');
            navLinks.forEach(link => {
                link.addEventListener('click', () => {
                    if (window.innerWidth < 768) {
                        navMenu.style.left = '-100%';
                        menuIcon.setAttribute('name', 'menu-outline');
                    }
                });
            });
        }
    </script>
    {{-- <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> --}}
</body>
</html>