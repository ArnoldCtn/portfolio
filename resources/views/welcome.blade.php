<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hero</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <style>
        body{
            font-family: Georgia, 'Times New Roman', Times, serif
        }
        .navbar-open{
            /* height: 500px; */
            /* top:7%; */
            left:0;
            border-top-left-radius:80px;
            border-bottom-right-radius:80px;
            padding:40px;
            padding-top: 80px;
            transition: all 0.3s ease-in;
            width: 50%;
            height:100%
            
               
        }
        /* Make navbar sticky */
        .sticky-nav {
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .hide{
                opacity: 0;
                transition: all 1s;
                filter: blur(15px);
                /* transform: translate(-10%); */
            }

.show{
    opacity: 1;
      /* transform: translate(0); */
      filter: blur(0);

}

.about1:nth-child(2){
transition-delay: 150ms;
}

.service1:nth-child(3){
transition-delay: 180ms;

}

.service1:nth-child(4){
transition-delay: 200ms;

}
        
    </style>
     <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class="bg-gradient-to-t from-[#0277BD] to-[#B3E5FC] min-h-screen">
    <div class="sticky-nav bg-gradient-to-r from-[#4FC3F7] to-[#01579B] rounded-tr-full rounded-bl-full">
        <nav id="navbar" class=" flex justify-between w-[100%] text-white px-10 py-2 max-h-40 ">
            <div class="my-auto">
            <h1 class=" text-[40px] md:text-[53px] my-auto cursor-pointer hover:scale-110 hover:text-blue-800 font-bold ml-3">My Portfolio</h1>
            </div>

<div class="flex md:gap-3 lg:gap-10 gap-5">
            <div class="my-auto md:static absolute left-[-100%] top-[7%] md:min-h-fit min-h-[48vh] md:bg-transparent bg-[#B3E5FC]  w-full md:w-auto" id="nav-menu">
            <ul class="flex md:flex-row flex-col md:gap-7 lg:gap-11 gap-8 md:text-[19px] lg:text-[27px] font-extrabold">
                <li> <a class="hover:text-gray-300 hover:pt-2" href="#">Home</a></li>
                <li> <a class="hover:text-gray-300 hover:pt-2" href="#info">Info</a></li>
                <li> <a class="hover:text-gray-300 hover:pt-2" href="#aboutME">About Us</a></li>
                <li> <a class="hover:text-gray-300 hover:pt-2" href="#ContactME">Contact Us</a></li>
                
            </ul>
            </div>

            <div class="my-auto">
                <img src="{{asset('images/clint.jpg')}}" alt=""  class="size-11 rounded-full bg-gray-800 hover:scale-105 cursor-pointer shadow-2xl">
            </div>


                <button id="menu-toggle" aria-label="Toggle menu" class="cursor-pointer bg-transparent hover:rounded-md hover:bg-transparent hover:border-1 my-auto  md:hidden">
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12 ">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
</svg>

                </button>
            </div>

            
                

        </nav>
    </div>
    {{-- main part --}}
    <main class=" space-y-20 md:space-y-0 " id="home">
{{-- main section  --}}
        <div id="info" class="hide min-h-screen flex flex-col justify-center items-center text-center  gap-5 rounded">
            <h1 class="text-4xl md:text-7xl lg-text-9xl font-extrabold ">I'm A Rising Web And Mobile Developer </h1>
            <p class="text-2xl md:text-4xl lg-text-6xl">I Design Modern, User-Friendly Websites and Applications</p>
            <button class="rounded-full bg-gradient-to-r from-[#4FC3F7] to-[#01579B] p-5 hover:bg-transparent cursor-pointer w-35 md:w-50  hover:border-blue-500 hover:text-[18px] hover:bg-gradient-to-r hover:from-[#e2e6e8] hover:to-[#161616]">Hire me</button>
        </div>

        {{-- About US  --}}

        <div id="aboutME" class=" hide min-h-screen items-center flex md:flex-row flex-col justify-center md:space-y-0 space-y-0 md:gap-30 gap-15 sm:pb-70 pb-0">
            {{-- img container  --}}
            <div class="about1 hide md:mx-0 mx-10">
            <img src="{{asset('images/yohan.jpg')}}"  alt="" class=" rounded-4xl md:h-130 md:w-160 w-100 h-120 hover:scale-x-110">
            </div>
            <div class="about1 hide flex flex-col gap-15 md:w-[30%] w-auto md:mx-0 mx-10 items-center">
                <h1 class=" md:text-6xl text-5xl text-blue-100 text-center font-extrabold">About Me</h1>
                <h2 class="text-3xl md:text-4xl text-gray-600">Front-End And Backend Web And Mobile Developer</h2>
                <p class="md:text-3xl text-2xl">I Am Rising And Passionate Developer whose Aim Is To Build Modern, User Friendly and Useful Websites And Applications. I Am Cameroonian and Aiming to Brng the Flag More And More Higher </p>
                    <button class=" rounded-4xl p-6 bg-[#01579B] w-64  hover:bg-blue-400 hover:border-blue-400 "><a href="#ContactME">Contact Me</a></button>
            </div>
        </div>

        {{-- MY SERVICES  --}}
        <div class="hide  min-h-screen  items-center flex flex-col justify-center md:pb-50 pb-0">
            <h1 class="md:text-6xl text-5xl text-blue-800 text-center font-extrabold pb-15">My Services</h1>

            <div class=" grid md:grid-cols-3 gap-6 mx-6 md:mx-10 text-white w-full">
                 <div class="service1 hide p-4 bg-[#01579B] shadow-2xl flex flex-col border-1  rounded-3xl text-center justify-center py-6 space-y-5 h-72 max-h-90 overflow-hidden hover:scale-105 hover:border-blue-500 hover:border-4" >
                    <h2 class="text-2xl md:text-3xl text-blue-400 font-extrabold pt-2">HTML DEVELOPMENT</h2>
                    <p class=" text-lg md:text-2xl">Clean and Responsive HTML5 websites.</p>
                </div>
                 {{-- <div class="service1 hide p-4 bg-[#01579B] shadow-2xl flex flex-col border-1  rounded-3xl text-center justify-center py-6 space-y-5 h-80 max-h-90 overflow-hidden hover:scale-y-115 hover:border-blue-500 hover:border-4" >
                    <h2 class="text-3xl  text-blue-400 font-extrabold pt-5">TailwindCss DEVELOPMENT</h2>
                    <p class=" text-2xl">Beautiful, Responsive UI using Css,TailwindCSs</p>
                </div> --}}
                 <div class="service1 hide p-4 bg-[#01579B] shadow-2xl flex flex-col border-1  rounded-3xl text-center justify-center py-6 space-y-5 h-72 max-h-90 overflow-hidden hover:scale-105 hover:border-blue-500 hover:border-4" >
                    <h2 class="text-2xl md:text-3xl text-blue-400 font-extrabold pt-2">Laravel X TailwindCSS DEVELOPMENT</h2>
                    <p class=" text-lg md:text-2xl">Beautiful, Responsive UI using TailwindCSS and secure Laravel backend logic.</p>
                </div>
                 <div class="service1 hide p-4 bg-[#01579B] shadow-2xl flex flex-col border-1  rounded-3xl text-center justify-center py-6 space-y-5 h-72 max-h-90 overflow-hidden hover:scale-105 hover:border-blue-500 hover:border-4" >
                    <h2 class="text-2xl md:text-3xl text-blue-400 font-extrabold pt-2">React Native DEVELOPMENT</h2>
                    <p class=" text-lg md:text-2xl">Beautiful, Responsive Mobile UIs built with React Native.</p>
                </div>
                
              
            </div>
        </div>

        {{-- //jobs --}}

        <div class="hide  min-h-screen  items-center flex flex-col justify-center md:pb-50 pb-0">
            <h1 class="md:text-6xl text-5xl text-blue-800 text-center font-extrabold pb-15">My Projects</h1>
        
            <div class=" grid md:grid-cols-3 gap-6 mx-6 md:mx-10 w-full text-white ">
             <a href="{{ route('project.show', 1) }}" class="service1 group hide block p-4 shadow-2xl flex flex-col border-1  rounded-3xl text-center justify-center py-4 space-y-4 h-72 overflow-hidden bg-[#01579B] hover:scale-105 hover:border-blue-500 hover:border-4 transition">
                <div class="about1 mx-auto">
                    <img src="{{asset('images/yohan.jpg')}}"  alt="Recipe App" class=" rounded-2xl md:h-44 md:w-64 w-full h-36 object-cover">
                </div>
                <div class="bg-red-500 rounded-2xl text-center items-center py-2">
                 <p class="md:text-2xl text-xl text-blue-100 text-center font-extrabold ">Recipe app</p>
                </div>
            </a>
                
             <a href="{{ route('project.show', 2) }}" class="service1 group hide block p-4 shadow-2xl flex flex-col border-1  rounded-3xl text-center justify-center py-4 space-y-4 h-72 overflow-hidden bg-[#01579B] hover:scale-105 hover:border-blue-500 hover:border-4 transition" >
                <div class="about1 mx-auto">
                    <img src="{{asset('images/clint.jpg')}}"  alt="Portfolio Site" class=" rounded-2xl md:h-44 md:w-64 w-full h-36 object-cover">
                </div>
                <div class="bg-red-500 rounded-2xl text-center items-center py-2">
                 <p class="md:text-2xl text-xl text-blue-100 text-center font-extrabold ">Portfolio Site</p>
                </div>
            </a>

             <a href="{{ route('project.show', 3) }}" class="service1 group hide block p-4 shadow-2xl flex flex-col border-1  rounded-3xl text-center justify-center py-4 space-y-4 h-72 overflow-hidden bg-[#01579B] hover:scale-105 hover:border-blue-500 hover:border-4 transition" >
                <div class="about1 mx-auto">
                    <img src="{{asset('images/yohan.jpg')}}"  alt="Mobile App" class=" rounded-2xl md:h-44 md:w-64 w-full h-36 object-cover">
                </div>
                <div class="bg-red-500 rounded-2xl text-center items-center py-2">
                 <p class="md:text-2xl text-xl text-blue-100 text-center font-extrabold ">Mobile App</p>
                </div>
            </a>
        
                 
                
                
              
            </div>
        </div>
        

        {{-- contact ME --}}
        
        <div id="ContactME" class="hide h-screen  flex flex-col justify-center gap-15">
            <h1 class="md:text-6xl text-5xl text-blue-800 text-center font-extrabold">Contact Me</h1>
            
            <div class="flex md:flex-row flex-col-reverse items-center justify-center space-x-16  md:gap-0 gap-20">
                <div class="flex flex-col items-center md:mx-0 mx-auto space-y-90">
                    <form action="" class=" space-y-6 mx-10 text-white text-[17px]">
                        @csrf
                        
                    <input type="text" name="" id="" placeholder="Enter Name" class="p-6 border-2 border-blue-500 rounded-3xl w-[100%] bg-[#01579B] outline-blue-400">
                    <input type="email" name="" id="" placeholder="Enter Email" class="p-6 border-2 border-blue-500 rounded-3xl w-[100%] bg-[#01579B] outline-blue-400">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Your Message" class="p-6 border-2 border-blue-500 rounded-3xl w-[100%] bg-[#01579B] outline-blue-400"></textarea>
                
                    <button class=" rounded-4xl p-5 bg-[#01579B] hover:bg-blue-400 mb-5 w-64  hover:border-blue-500"><a href="#ContactME">Contact Me</a></button>
                    
                </form>
                    
                </div>
                <div class="flex flex-col space-y-5 text-white text-2xl">
                <p class="p-6  border-2 border-blue-500 rounded-3xl w-100 bg-[#4FC3F7] "><strong class=" text-blue-800">Email:</strong>arnoldctn@gmail.com</p>
                <p class="p-6 border-2 border-blue-500 rounded-3xl w-100 bg-[#4FC3F7]"><strong class=" text-blue-800">Tel:</strong>+237-696-69-29-61</p>
                <p class="p-6 border-2 border-blue-500 rounded-3xl w-100 bg-[#4FC3F7]"><strong class=" text-blue-800">Location</strong>Cameroon</p>
                </div>
            </div>
        </div>
    </main>

    <script>
        // Menu toggle for small screens
        const menuToggle = document.getElementById('menu-toggle');
        const navMenu = document.getElementById('nav-menu');
        if (menuToggle && navMenu) {
            menuToggle.addEventListener('click', () => {
                if (navMenu.classList.contains('navbar-open')) {
                    navMenu.classList.remove('navbar-open');
                    navMenu.style.left = '-100%';
                } else {
                    navMenu.classList.add('navbar-open');
                    navMenu.style.left = '0';
                }
            });
        }

        // Reveal on scroll using IntersectionObserver
        document.addEventListener('DOMContentLoaded', () => {
            const items = document.querySelectorAll('.hide');
            const io = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('show');
                    }
                });
            }, { threshold: 0.15 });

            items.forEach(i => io.observe(i));
        });
    </script>

</body>


</html>

{{-- <ion-icon name="close-outline"></ion-icon>
<ion-icon name="menu-outline"></ion-icon> --}}

