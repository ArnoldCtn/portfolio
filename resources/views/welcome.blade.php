<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio | ArnoldCtn</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    
    <style>
        body {
            font-family:Georgia, 'Times New Roman', Times, serif, Roboto, Helvetica, Arial, sans-serif;
            scroll-behavior: smooth;
        }

        /* Smooth reveal transitions */
        .hide {
            opacity: 0;
            transform: translateY(30px);
            filter: blur(10px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .show {
            opacity: 1;
            transform: translateY(0);
            filter: blur(0);
        }

        /* Stagger delays for child elements */
        .stagger-1 { transition-delay: 100ms; }
        .stagger-2 { transition-delay: 200ms; }
        .stagger-3 { transition-delay: 300ms; }

        /* Custom scrollbar for an enhanced presentation profile */
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

<body class="bg-gradient-to-b from-slate-950 via-blue-700 to-slate-500 md:h-screen text-slate-100 min-h-screen selection:bg-blue-600 selection:text-white">

    <!-- Sticky Navigation Bar -->
    <header id="navbar" class="sticky top-0 z-50 w-full bg-slate-900/80 backdrop-blur-md border-b border-blue-900/40 transition-all duration-300">
        <nav class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">
            
            <!-- Logo Section -->
            <a href="#home" class="group flex items-center gap-2">
                <h1 class="text-2xl md:text-3xl font-black tracking-wider bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-sky-400 group-hover:from-sky-400 group-hover:to-blue-500 transition duration-300">
                    My Portfolio
                </h1>
            </a>

            <!-- Menu Links & Profile Wrapper -->
            <div class="flex items-center gap-6">
                <!-- Navigation Drawer -->
                <div id="nav-menu" class="fixed top-[72px] left-[-100%] w-[75%] h-[calc(100vh-72px)] bg-slate-900/95 backdrop-blur-lg p-8 transition-all duration-300 ease-in-out border-r border-blue-900/50 md:static md:w-auto md:h-auto md:bg-transparent md:p-0 md:border-none flex flex-col md:flex-row items-start md:items-center gap-8 md:gap-8 lg:gap-12">
                    <ul class="flex flex-col md:flex-row gap-6 md:gap-8 lg:gap-10 text-lg md:text-base lg:text-lg font-semibold tracking-wide w-full md:w-auto">
                        <li><a class="block py-2 text-slate-300 hover:text-blue-400 transition" href="#home">Home</a></li>
                        <li><a class="block py-2 text-slate-300 hover:text-blue-400 transition" href="#info">Info</a></li>
                        <li><a class="block py-2 text-slate-300 hover:text-blue-400 transition" href="{{ route('projects.all') }}">Projects</a></li>
                        <li><a class="block py-2 text-slate-300 hover:text-blue-400 transition" href="#aboutME">About Me</a></li>
                        <li><a class="block py-2 text-slate-300 hover:text-blue-400 transition" href="#ContactME">Contact Me</a></li>
                    </ul>
                </div>

                <!-- User Profile Headshot Container -->
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-sky-500 rounded-full blur opacity-60 group-hover:opacity-100 transition duration-300"></div>
                    <img src="{{asset('images/me.jpg')}}" alt="Avatar" class="relative size-10 rounded-full object-cover border border-slate-900 cursor-pointer">
                </div>

                <!-- Ionicons Driven Hamburger Trigger -->
                <button id="menu-toggle" aria-label="Toggle menu" class="text-4xl text-blue-400 hover:text-sky-300 cursor-pointer focus:outline-none md:hidden flex items-center justify-center">
                    {{-- <ion-icon id="menu-icon" name="menu-outline"></ion-icon> --}}
                     <svg id="menu-icon" name="menu-outline" width="40" height="40" viewBox="0 0 21 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="21" height="1.5" rx=".75" fill="white"/>
                                <rect x="8" y="6" width="13" height="1.5" rx=".75" fill="white"/>
                                <rect x="6" y="13" width="15" height="1.5" rx=".75" fill="white"/>
                            </svg>
                </button>
            </div>
        </nav>
    </header>

    <!-- Main Content Area Container Ecosystem -->
    <main class="max-w-7xl mx-auto px-6 " id="home">

        <!-- Hero / Info Section Frame -->
        <section id="info" class="hide min-h-[calc(100vh-72px)] flex flex-col justify-center items-center text-center gap-6 py-12">
            <span class="text-blue-400 text-sm md:text-base font-bold tracking-widest uppercase bg-blue-950/60 px-4 py-1.5 rounded-full border border-blue-800/60">
                Available for Freelance & Contracts
            </span>
            <h1 class="text-4xl sm:text-5xl md:text-7xl lg:text-8xl font-extrabold tracking-tight max-w-5xl leading-tight">
                I'm A Rising <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-400 via-sky-400 to-indigo-400">Web & Mobile</span> <span class="bg-clip-text text-transparent bg-gradient-to-r from-indigo-400 to-blue-400">FullStack</span> Developer
            </h1>
            <p class="text-slate-400 text-lg sm:text-xl md:text-2xl max-w-2xl font-light">
                I Design Modern, Fluid, and User-Friendly Websites and Applications.
            </p>
            <div class="mt-4">
                <a href="#ContactME" class="relative inline-flex items-center justify-center p-0.5 overflow-hidden text-base font-bold text-white rounded-full group bg-gradient-to-br from-blue-600 to-sky-500 group-hover:from-blue-600 group-hover:to-sky-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-800 transition">
                    <span class="relative px-8 py-3.5 transition-all ease-in duration-75 bg-slate-950 rounded-full group-hover:bg-opacity-0">
                        Hire Me Now
                    </span>
                </a>
            </div>
        </section>

        <!-- About Me Section Frame -->
        <section id="aboutME" class="hide min-h-screen flex flex-col lg:flex-row items-center justify-center gap-12 lg:gap-20 py-20">
            <!-- Image Frame -->
            <div class="about1 w-full max-w-md lg:max-w-lg relative group shrink-0">
                <div class="absolute -inset-1.5 bg-gradient-to-r from-blue-600 to-sky-500 rounded-3xl blur opacity-40 group-hover:opacity-70 transition duration-500"></div>
               <div class="relative overflow-hidden rounded-2xl border border-blue-900/50 bg-slate-900/10 flex items-center justify-center">
    <img src="{{ asset('images/me.jpg') }}" 
         alt="About Me Workstation" 
         class="w-full h-auto max-h-[500px] object-contain transform transition-transform duration-700 hover:scale-105"
         loading="eager">
</div>
            </div>
            
            <!-- Text Content Frame -->
            <div class="about1 flex flex-col gap-6 max-w-xl text-center lg:text-left items-center lg:items-start">
                <h2 class="text-3xl sm:text-5xl font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-indigo-200">
                    About Me
                </h2>
                <h3 class="text-xl sm:text-2xl font-semibold text-sky-400">
                    Full-Stack Web & Mobile Engineer
                </h3>
                <p class="text-slate-300 text-base sm:text-lg leading-relaxed font-light">
                    I am a rising and passionate developer whose aim is to build modern, highly performant, and useful cross-platform ecosystems. Based in Cameroon, I love turning complex logic challenges into elegant, clean architectural patterns.
                </p>
                <div class="pt-2">
                    <a href="#ContactME" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-500 text-white font-bold px-6 py-3 rounded-xl transition shadow-lg shadow-blue-950/50">
                        <span>Get In Touch</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48"><path d="M268 112l144 144m0 0l-144 144m144-144H100"/></svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- Services Section Frame -->
        <section class="hide min-h-screen flex flex-col justify-center items-center py-20">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-5xl font-extrabold text-blue-400 mb-4">My Core Expertises</h2>
                <div class="h-1 w-20 bg-blue-500 mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full">
                <!-- Service Card 1 -->
                <div class="service1 stagger-1 bg-slate-900/60 backdrop-blur border border-blue-900/40 p-8 rounded-2xl text-center flex flex-col items-center gap-4 transition-all duration-300 hover:-translate-y-2 hover:border-blue-500 hover:bg-slate-900/90 group">
                    <div class="size-14 bg-blue-950 rounded-xl flex items-center justify-center text-3xl text-blue-400 border border-blue-800/60 group-hover:bg-blue-600 group-hover:text-white transition duration-300">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32">
  <polyline points="160 368 32 256 160 144"/>
  <polyline points="352 144 480 256 352 368"/>
  <line x1="304" y1="96" x2="208" y2="416"/>
</svg>
                        
                    </div>
                    <h3 class="text-xl font-bold text-slate-100 group-hover:text-blue-400 transition">HTML DEVELOPMENT</h3>
                    <p class="text-slate-400 text-sm sm:text-base leading-relaxed">
                        Structuring modern, standard-compliant semantic mockups optimized for top-tier accessibility and performance metrics.
                    </p>
                </div>

                <!-- Service Card 2 -->
                <div class="service1 stagger-2 bg-slate-900/60 backdrop-blur border border-blue-900/40 p-8 rounded-2xl text-center flex flex-col items-center gap-4 transition-all duration-300 hover:-translate-y-2 hover:border-blue-500 hover:bg-slate-900/90 group">
                    <div class="size-14 bg-blue-950 rounded-xl flex items-center justify-center text-3xl text-blue-400 border border-blue-800/60 group-hover:bg-blue-600 group-hover:text-white transition duration-300">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32">
  <rect x="64" y="64" width="384" height="112" rx="16" ry="16"/>
  <circle cx="112" cy="120" r="16" fill="currentColor"/>
  
  <rect x="64" y="200" width="384" height="112" rx="16" ry="16"/>
  <circle cx="112" cy="256" r="16" fill="currentColor"/>
  
  <rect x="64" y="336" width="384" height="112" rx="16" ry="16"/>
  <circle cx="112" cy="392" r="16" fill="currentColor"/>
</svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-100 group-hover:text-blue-400 transition">Laravel X TailwindCSS</h3>
                    <p class="text-slate-400 text-sm sm:text-base leading-relaxed">
                        Crafting highly stylized custom web apps built with reliable architectural MVC models coupled with clean functional utility frameworks.
                    </p>
                </div>

                <!-- Service Card 3 -->
                <div class="service1 stagger-3 bg-slate-900/60 backdrop-blur border border-blue-900/40 p-8 rounded-2xl text-center flex flex-col items-center gap-4 transition-all duration-300 hover:-translate-y-2 hover:border-blue-500 hover:bg-slate-900/90 group">
                    <div class="size-14 bg-blue-950 rounded-xl flex items-center justify-center text-3xl text-blue-400 border border-blue-800/60 group-hover:bg-blue-600 group-hover:text-white transition duration-300">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32">
  <rect x="128" y="48" width="256" height="416" rx="48" ry="48"/>
  
  <path d="M208,416h96" stroke-linecap="round"/>
</svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-100 group-hover:text-blue-400 transition">React Native Development</h3>
                    <p class="text-slate-400 text-sm sm:text-base leading-relaxed">
                        Building premium native applications executing seamlessly across Android and iOS touchscreens utilizing fluid responsive styling paradigms.
                    </p>
                </div>
            </div>
        </section>

        <!-- Projects Portfolio Section Frame -->
        <section class="hide min-h-screen flex flex-col justify-center items-center py-20">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-5xl font-extrabold text-blue-400 mb-4">Featured Work</h2>
                <div class="h-1 w-20 bg-blue-500 mx-auto rounded-full"></div>
            </div>
        
            <div class="w-full">
                <!-- Mobile & Tablet: Horizontal Scroll -->
                <div class="md:hidden flex overflow-x-auto snap-x snap-mandatory gap-8 pb-4">
                    @php
                        $projects = [
                            1 => [
                                'id' => 1,
                                'title' => 'Url Shortener',
                                'image' => asset('images/url-shortener.png'),
                                'description' => 'Url shortener flask application',
                                'stack' => 'Python , Flask',
                                'platform' => 'Responsive web application',
                                'category' => 'web',
                                'url' => 'https://url-shortener-y2fi.vercel.app/',
                                'github' => 'https://github.com/ArnoldCtn/url-shortener.git',
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'React Native Crud application',
                                'image' => asset('images/iPhone-13-PRO-localhost (1).png'),
                                'stack' => 'React Native',
                                'platform' => 'Mobile application',
                                'category' => 'mobile',
                                'github' => 'https://github.com/ArnoldCtn/React-native-crud',
                                'description' => 'Simple crud project',
                            ],
                            3 => [
                                'id' => 3,
                                'title' => 'Todo Tkinter',
                                'image' => asset('images/tkinter_todo.jpg'),
                                'description' => 'Simple todo app built with python and tkinter',
                                'stack' => 'Python , Tkinter',
                                'platform' => 'Desktop application',
                                'category' => 'desktop',
                                'github' => 'https://github.com/ArnoldCtn/todo-python',
                            ],
                            4 => [
                                'id' => 4,
                                'title' => 'Weather App',
                                'image' => asset('images/weatherappImg.png'),
                                'description' => 'Weather laravel web app using weatherapi.com api',
                                'stack' => 'Laravel, TailwindCSS',
                                'platform' => 'Web application',
                                'category' => 'web',
                                'github' => 'https://github.com/ArnoldCtn/weather-laravel-app.git',
                            ],
                            5 => [
                                'id' => 5,
                                'title' => 'Country Explorer',
                                'image' => asset('images/cmr.png'),
                                'description' => 'Explore countries and their details.',
                                'stack' => 'Laravel, TailwindCSS',
                                'platform' => 'Web application',
                                'category' => 'web',
                                'github' => 'https://github.com/ArnoldCtn/countryExplorer.git',
                            ],
                            6 => [
                                'id' => 6,
                                'title' => 'Library Management',
                                'image' => asset('images/lib.jpg'),
                                'description' => 'Desktop application for managing library resources.',
                                'stack' => 'python, Tkinter',
                                'platform' => 'Desktop application',
                                'category' => 'desktop',
                                'github' => 'https://github.com/ArnoldCtn/library-management.git',
                            ],
                            
                        ];
                    @endphp

                    @foreach (array_slice($projects, 0, 7) as $project)
                        <a href="{{ route('project.show', $project['id']) }}" class="service1 group bg-slate-900/50 rounded-2xl overflow-hidden border border-blue-900/40 hover:border-blue-500 transition-all duration-300 hover:-translate-y-1 flex flex-col snap-center shrink-0 w-72 sm:w-80">
                            <div class="relative overflow-hidden aspect-video w-full bg-slate-950">
                                <img src="{{$project['image']}}" alt="{{$project['title']}} Screenshot" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-105">
                                <div class="absolute inset-0 bg-slate-950/20 group-hover:bg-slate-950/0 transition"></div>
                            </div>
                            <div class="p-6 bg-slate-900/90 flex-grow flex flex-col justify-between items-center gap-4 border-t border-blue-950">
                                <h3 class="text-xl font-bold tracking-wide text-slate-200 group-hover:text-blue-400 transition">{{$project['title']}}</h3>
                                <span class="inline-flex items-center gap-1 text-sm text-sky-400 font-medium">
                                    Explore Project <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="16" height="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48"><path d="M400 64H112a48 48 0 00-48 48v288a48 48 0 0048 48h288a48 48 0 0048-48V112a48 48 0 00-48-48z"/><path d="M336 176L224 288m0 0l-48-48m48 48l48-48"/></svg>
                                </span>
                            </div>
                        </a>
                    @endforeach
                </div>

                <!-- Desktop: Grid Layout -->
                <div class="hidden md:grid md:grid-cols-2 lg:grid-cols-3 gap-8 w-full">
                    @foreach (array_slice($projects, 0, 6) as $project)
                        <a href="{{ route('project.show', $project['id']) }}" class="service1 group bg-slate-900/50 rounded-2xl overflow-hidden border border-blue-900/40 hover:border-blue-500 transition-all duration-300 hover:-translate-y-1 flex flex-col h-full">
                            <div class="relative overflow-hidden aspect-video w-full bg-slate-950">
                                <img src="{{$project['image']}}" alt="{{$project['title']}} Screenshot" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-105">
                                <div class="absolute inset-0 bg-slate-950/20 group-hover:bg-slate-950/0 transition"></div>
                            </div>
                            <div class="p-6 bg-slate-900/90 flex-grow flex flex-col justify-between items-center gap-4 border-t border-blue-950">
                                <h3 class="text-lg font-bold tracking-wide text-slate-200 group-hover:text-blue-400 transition line-clamp-2">{{$project['title']}}</h3>
                                <span class="inline-flex items-center gap-1 text-sm text-sky-400 font-medium">
                                    Explore Project <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="16" height="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48"><path d="M400 64H112a48 48 0 00-48 48v288a48 48 0 0048 48h288a48 48 0 0048-48V112a48 48 0 00-48-48z"/><path d="M336 176L224 288m0 0l-48-48m48 48l48-48"/></svg>
                                </span>
                            </div>
                        </a>
                    @endforeach
                </div>
                
                @if (count($projects) > 6)
                    <div class="mt-8 text-center">
                        <a href="{{ route('projects.all') }}" class="relative inline-flex items-center justify-center p-0.5 overflow-hidden text-base font-bold text-white rounded-full group bg-gradient-to-br from-blue-600 to-sky-500 group-hover:from-blue-600 group-hover:to-sky-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-800 transition">
                            <span class="relative px-8 py-3.5 transition-all ease-in duration-75 bg-slate-950 rounded-full group-hover:bg-opacity-0">
                                View All Projects
                            </span>
                        </a>
                    </div>
                @endif
            </div>
        </section>
        
        <!-- Contact Section Frame -->
        <section id="ContactME" class="hide min-h-screen flex flex-col justify-center items-center py-20">
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-5xl font-extrabold text-blue-400 mb-4">Contact Me</h2>

                 @if(session('success'))
    <div class="bg-green-500 text-white p-1 rounded mb-4 mx-4">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="bg-red-500 text-white p-1 rounded mb-4 mx-4">
        {{ session('error') }}
    </div>
@endif
                <div class="h-1 w-20 bg-blue-500 mx-auto rounded-full"></div>
            </div>
            
            <div class="flex flex-col lg:flex-row items-stretch justify-center gap-12 w-full max-w-5xl">
                <!-- Form Module Wrapper -->
                <div class="w-full lg:w-3/5 bg-slate-900/50 backdrop-blur p-6 sm:p-10 rounded-2xl border border-blue-900/40">
                    <form method="POST" action="{{ route('contact.submit') }}" class="space-y-5">
                        @csrf
                        <div>
                            <label class="block text-sm font-semibold text-slate-300 mb-2">Name</label>
                            <input type="text" name="name" id="name" placeholder="Enter Name" class="w-full p-4 rounded-xl bg-slate-950 border border-blue-900/60 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none text-slate-100 transition">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-slate-300 mb-2">Email Address</label>
                            <input type="email" name="email" id="email" placeholder="Enter Email" class="w-full p-4 rounded-xl bg-slate-950 border border-blue-900/60 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none text-slate-100 transition">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-slate-300 mb-2">Message</label>
                            <textarea name="messageContent" rows="5" placeholder="Your Message" class="w-full p-4 rounded-xl bg-slate-950 border border-blue-900/60 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none text-slate-100 transition resize-none"></textarea>
                        </div>
                        
                        <button type="submit" class="w-full py-4 bg-blue-600 hover:bg-blue-500 rounded-xl text-white font-bold tracking-wide transition shadow-lg shadow-blue-950/50 cursor-pointer">
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Info Cards Contact Stack Module Wrapper -->
                <div class="w-full lg:w-2/5 flex flex-col justify-between gap-6">
                    <!-- Email Card -->
                    <div class="flex items-center gap-5 p-6 bg-slate-900/40 border border-blue-900/30 rounded-2xl h-full">
                        <div class="text-3xl text-blue-400 bg-blue-950/60 p-4 rounded-xl border border-blue-900/50 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"><rect x="48" y="64" width="416" height="384" rx="32" ry="32"/><path d="M112 144l144 112 144-112"/></svg>
                        </div>
                        <div class="overflow-hidden">
                            <h4 class="text-sm font-bold uppercase text-slate-400 tracking-wider">Email</h4>
                            <p class="text-base sm:text-lg text-slate-200 font-medium truncate">arnoldctn@gmail.com</p>
                        </div>
                    </div>

                    <!-- Tel Card -->
                    <div class="flex items-center gap-5 p-6 bg-slate-900/40 border border-blue-900/30 rounded-2xl h-full">
                        <div class="text-3xl text-blue-400 bg-blue-950/60 p-4 rounded-xl border border-blue-900/50 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"><path d="M391 480c-19.52 0-46.94-7.06-86-24-43.4-19.47-86.4-47.6-127.3-88.5s-69-83.9-88.5-127.3c-17-39.08-24-66.48-24-86C65 140.24 82.24 123 102.66 123c6.93 0 13.89.57 20.82 2.23 8.28 1.92 16.83 6.61 23.28 13.65l30 45.08a32.05 32.05 0 003.06 36.78l-24.27 24.27c25.2 39.2 57.85 71.86 97 97l24.27-24.27a32 32 0 0136.73 3.06l45.07 30.06c7 6.4 11.7 15 13.62 23.27 1.66 6.93 2.24 13.89 2.24 20.82C489 429.76 471.76 447 451.34 447z"/></svg>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold uppercase text-slate-400 tracking-wider">Tel</h4>
                            <p class="text-base sm:text-lg text-slate-200 font-medium">+237-696-69-29-61</p>
                            <p class="text-base sm:text-lg text-slate-200 font-medium">+237-675-82-87-11</p>
                        </div>
                    </div>

                    <!-- Location Card -->
                    <div class="flex items-center gap-5 p-6 bg-slate-900/40 border border-blue-900/30 rounded-2xl h-full">
                        <div class="text-3xl text-blue-400 bg-blue-950/60 p-4 rounded-xl border border-blue-900/50 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"><path d="M256 48c-79.53 0-144 61.79-144 137.6 0 72.211 58.225 155.634 144 224 85.775-68.366 144-151.789 144-224C400 109.79 335.53 48 256 48z"/><circle cx="256" cy="185.5" r="40" fill="currentColor"/></svg>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold uppercase text-slate-400 tracking-wider">Location</h4>
                            <p class="text-base sm:text-lg text-slate-200 font-medium">Cameroon</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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

        // Reveal viewframes fluidly on scroll behaviors via IntersectionObserver API
        document.addEventListener('DOMContentLoaded', () => {
            const elementsToReveal = document.querySelectorAll('.hide');
            const observerOptions = {
                root: null,
                threshold: 0.12,
                rootMargin: '0px 0px -40px 0px'
            };

            const revealObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('show');
                        // Optional: unobserve if animation is execution-once criteria
                        // observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            elementsToReveal.forEach(element => revealObserver.observe(element));
        });
    </script>

</body>
</html>