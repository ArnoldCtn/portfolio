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
            top:7%;
            border-top-left-radius:80px;
            border-bottom-right-radius:80px;
            padding:40px;
            padding-top: 80px;
            
        }
    </style>
     <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class="bg-gradient-to-t from-[#0277BD] to-[#B3E5FC] h-screen ">
    <div class=" bg-gradient-to-r from-[#4FC3F7] to-[#01579B] rounded-tr-full rounded-bl-full">
        <nav class="flex justify-between w-[100%] text-white px-10 py-2 max-h-20">
            <div class="my-auto">
            <h1 class=" text-[40px] md:text-[53px] my-auto cursor-pointer hover:scale-120 font-bold ml-3">Portfolio</h1>
            </div>

<div class="flex md:gap-3 lg:gap-10 gap-5">
            <div class="my-auto min-md:static absolute top-[-50%] md:min-h-fit min-h-[48vh] md:bg-transparent bg-[#B3E5FC] left-0 w-full md:w-auto" id="nav-menu">
            <ul class="flex md:flex-row flex-col md:gap-7 lg:gap-11 gap-14 md:text-[19px] lg:text-[27px] font-extrabold">
                <li> <a class="hover:text-gray-300" href="">Home</a></li>
                <li> <a class="hover:text-gray-300" href="">Info</a></li>
                <li> <a class="hover:text-gray-300" href="">About Us</a></li>
                <li> <a class="hover:text-gray-300" href="">Contact Us</a></li>
                
            </ul>
            </div>

            <div class="my-auto">
                <img src="{{asset('images/clint.jpg')}}" alt=""  class="size-11 rounded-full bg-gray-800 hover:scale-200 cursor-pointer shadow-2xl">
            </div>


                <button id="menu-toggle" class="cursor-pointer bg-transparent hover:rounded-md hover:bg-transparent hover:border-1 my-auto  md:hidden">
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12 ">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
</svg>

                </button>
            </div>

            
                

        </nav>
    </div>
    {{-- main part --}}
    <main class=" space-y-45 md:space-y-50 " id="home">
{{-- main section  --}}
        <div class="flex flex-col justify-center items-center text-center md:mt-[20%] mt-[50%] gap-3.5 md:pb-105 pb-70  rounded h-">
            <h1 class="text-4xl md:text-7xl lg-text-9xl font-extrabold">I'm A Rising Web And Mobile Developer </h1>
            <p class="text-2xl md:text-4xl lg-text-6xl">I Design Modern, User-Friendly Websites and Applications</p>
            <button class="rounded-full bg-gradient-to-r from-[#4FC3F7] to-[#01579B] p-5 hover:bg-transparent cursor-pointer w-35 md:w-50 hover:scale-y-115 hover:border-blue-500 hover:border-4">Hire me</button>
        </div>

        {{-- About US  --}}

        <div class="flex md:flex-row flex-col justify-center md:space-y-0 space-y-10">
            {{-- img container  --}}
            <div class=" md:w-[30%] md:mx-0 mx-10">
            <img src="{{asset('images/clint.jpg')}}"  alt="" class=" rounded-4xl md:h-140 md:max-w-160 w-[95%] h-120 hover:scale-x-110">
            </div>
            <div class="flex flex-col gap-8 md:w-[30%] w-auto md:mx-0 mx-20 items-center">
                <h1 class=" md:text-6xl text-5xl text-blue-100 text-center font-extrabold">About Me</h1>
                <h2 class="text-3xl md:text-4xl text-gray-600">Front-End And Backend Web And Mobile Developer</h2>
                <p class="md:text-3xl text-2xl">I Am Rising And Passionate Developer whose Aim Is To Build Modern, User Friendly and Useful Websites And Applications. I Am Cameroonian and Aiming to Brng the Flag More And More Higher </p>
                    <button class=" rounded-4xl p-6 bg-[#01579B] w-64 hover:scale-y-115 hover:border-blue-500 hover:border-4"><a href="#ContactME">Contact Me</a></button>
            </div>
        </div>

        {{-- MY SERVICES  --}}
        <div class=" md:pt-30 ">
            <h1 class="md:text-6xl text-5xl text-blue-800 text-center font-extrabold pb-15">My Services</h1>

            <div class="grid md:grid-cols-4 mx-10 space-x-4 space-y-7 text-white ">
                 <div class=" p-4 bg-[#01579B] shadow-2xl flex flex-col border-1  rounded-3xl text-center justify-center py-6 space-y-5 h-65 max-h-80 overflow-hidden hover:scale-y-115 hover:border-blue-500 hover:border-4" >
                    <h2 class="text-3xl  text-blue-400 font-extrabold pt-5">HTML DEVELOPMENT</h2>
                    <p class=" text-2xl">Clean and Responsive HTMl5 websites.</p>
                </div>
                 <div class=" p-4 bg-[#01579B] shadow-2xl flex flex-col border-1  rounded-3xl text-center justify-center py-6 space-y-5 h-65 max-h-80 overflow-hidden hover:scale-y-115 hover:border-blue-500 hover:border-4" >
                    <h2 class="text-3xl  text-blue-400 font-extrabold pt-5">TailwindCss DEVELOPMENT</h2>
                    <p class=" text-2xl">Beautiful, Responsive UI using Css,TailwindCSs</p>
                </div>
                 <div class=" p-4 bg-[#01579B] shadow-2xl flex flex-col border-1  rounded-3xl text-center justify-center py-6 space-y-5 h-65 max-h-80 overflow-hidden hover:scale-y-115 hover:border-blue-500 hover:border-4" >
                    <h2 class="text-3xl  text-blue-400 font-extrabold pt-5">Laravel DEVELOPMENT</h2>
                    <p class=" text-2xl">Securised Dynamic Website Logic using Laravel(PHP) Backend</p>
                </div>
                 <div class=" p-4 bg-[#01579B] shadow-2xl flex flex-col border-1  rounded-3xl text-center justify-center py-6 space-y-5 h-65 max-h-80 overflow-hidden hover:scale-y-115 hover:border-blue-500 hover:border-4" >
                    <h2 class="text-3xl  text-blue-400 font-extrabold pt-5">React Native DEVELOPMENT</h2>
                    <p class=" text-2xl">Beautiful, Responsive Mobile UI using React Native</p>
                </div>
                
              
            </div>
        </div>

        {{-- contact ME --}}
        
        <div id="ContactME">
            <h1 class="md:text-6xl text-5xl text-blue-800 text-center font-extrabold">Contact Me</h1>
            
            <div class="flex justify-center space-x-16">
                <div class="flex flex-col items-center space-y-90">
                    <form action="">
                        @csrf
                        
                    <input type="text" name="" id="" placeholder="Enter Name" class="p-6 border-2 border-blue-500 rounded-3xl w-[100%] bg-[#01579B]">
                    <input type="email" name="" id="" placeholder="Enter Email" class="p-6 border-2 border-blue-500 rounded-3xl w-[100%] bg-[#01579B]">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Your Message" class="p-6 border-2 border-blue-500 rounded-3xl w-[100%] bg-[#01579B]"></textarea>
                    </form>
                    
                </div>
                <div class="flex flex-col">
                <p class="p-6 border-2 border-blue-500 rounded-3xl w-100 bg-[#01579B]"><strong class=" text-blue-800">Email:</strong>arnoldctn@gmail.com</p>
                </div>
            </div>
        </div>
    </main>


</body>


</html>

{{-- <ion-icon name="close-outline"></ion-icon>
<ion-icon name="menu-outline"></ion-icon> --}}