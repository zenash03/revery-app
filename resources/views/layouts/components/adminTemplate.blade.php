<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Revery Admin</title>

    @vite('resources/css/app.css')

    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <!-- Include Swiper CSS -->
    {{-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Include Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    @vite('resources/js/app.js')
</head>

<body class="bg-slate-50 w-full">

    <div class="flex flex-col bg-gray-100 min-h-screen">
        <div class="bg-white text-white drop-shadow-sm w-full p-2 flex items-center justify-between z-10">
            <div class="flex items-center">
                <div class="hidden md:flex items-center py-4 px-8"> <!-- Se oculta en dispositivos pequeños -->
                    {{-- <img src="https://www.emprenderconactitud.com/img/POC%20WCS%20(1).png" alt="Logo"
                        class="w-28 h-18 mr-2"> --}}
                    <h2 class="font-bold text-xl text-primary font-secondary">Revery.Ind</h2>
                </div>
                <div class="md:hidden flex items-center">
                    <button id="menuBtn">
                        <i class="fas fa-bars text-gray-500 text-lg"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="flex-1 flex">
            <div class="p-2 bg-white w-60 flex shadow-sm z-0 flex-col md:flex" id="sideNav">
                <nav>
                    <a href="/dashboard"
                        class="flex items-center p-2 py-4 text-gray-600 rounded-lg hover:bg-gray-100 font-secondary group">
                        <svg class="w-5 h-5 text-gray-400 transition duration-75 dark:text-gray-400 group-hover:text-gray-700"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                            <path
                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path
                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ms-3">Dashboard</span>
                    </a>
                    <button type="button"
                        class="flex items-center w-full py-4 p-2 text-base text-gray-600 transition duration-75 rounded-lg group hover:bg-gray-100 font-secondary"
                        aria-controls="dropdown" data-collapse-toggle="dropdown">
                        <svg class="flex-shrink-0 w-5 h-6 text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="2"
                                d="M3 11h18m-9 0v8m-8 0h16c.6 0 1-.4 1-1V6c0-.6-.4-1-1-1H4a1 1 0 0 0-1 1v12c0 .6.4 1 1 1Z" />
                        </svg>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Table</span>
                        <svg class="w-3 h-3 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="dropdown" class="hidden py-1 space-y-2">
                        <div>
                            <a href="/table/products"
                                class="flex items-center w-full p-2 text-gray-700 transition duration-75 rounded-lg pl-11 group hover:bg-slate-100 font-secondary">Products</a>
                        </div>
                        <div>
                            <a href="#"
                                class="flex items-center w-full p-2 text-gray-700 transition duration-75 rounded-lg pl-11 group hover:bg-slate-100 font-secondary">Categories</a>
                        </div>
                    </div>

                </nav>

                <a class="block text-gray-500 py-2.5 px-4 my-2 rounded transition duration-200 hover:bg-slate-100 hover:text-gray-800 mt-auto"
                    href="#">
                    <i class="fas fa-sign-out-alt mr-2"></i>Logout
                </a>
                <div class="bg-gradient-to-r from-pink-300 to-pink-500 h-px mt-2"></div>

                <p class="mb-1 px-5 py-3 text-left text-xs text-primary">Copyright 2024@Zenash</p>

            </div>

            @yield('body')
        </div>
    </div>
        {{-- <div class="space-x-5">
            <button>
                <i class="fas fa-bell text-gray-500 text-lg"></i>
            </button>
            <button>
                <i class="fas fa-user text-red text-lg"></i>
            </button>
        </div> --}}
        {{-- @yield('header') --}}
        @yield('footer')
        @stack('scripts')
</body>

</html>
