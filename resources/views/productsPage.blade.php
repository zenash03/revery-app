<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Include Swiper CSS -->
    {{-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Include Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body class="w-full">
    @component('layouts.components.header')
    @endcomponent
    <section class="p-12"></section>
    <section>
        {{-- {{ $url }} --}}
        {{-- {{ $headers["Authorization"] }} --}}
    </section>
    <section class="py-8" id="breadcrumb">
        <div class="container px-8 mx-auto">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="#"
                            class="inline-flex items-center text-sm font-secondary font-semibold text-gray-600 hover:text-blue-600 dark:text-gray-400 dark:hover:text-slate-300">
                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                            </svg>
                            Home
                        </a>
                    </li>
                    {{-- <li>
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 block w-3 h-3 mx-1 text-gray-400 " aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="#"
                                class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Templates</a>
                        </div>
                    </li> --}}
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="m1 9 4-4-4-4" />
                            </svg>
                            <span
                                class="ms-1 text-sm font-secondary font-semibold md:ms-2 text-gray-400">Products</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="py-8 pb-40">
        <div class="container px-8 mx-auto overflow-hidden">
            <h2 class="text-2xl font-secondary text-gray-800">Products</h2>
            {{-- <div class="py-6">
                <button id="dropdownOffsetButton" data-dropdown-toggle="dropdownSkidding" data-dropdown-offset-distance="10" data-dropdown-offset-skidding="100" data-dropdown-placement="right" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Dropdown button <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownSkidding" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                          <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                          </li>
                          <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                          </li>
                          <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                          </li>
                          <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                          </li>
                        </ul>
                    </div>
            </div> --}}

            <div class="mt-5 grid xs:grid-cols-1 md:grid-cols-5 lg:grid-cols-5 gap-8">
                @for ($i = 0; $i < 10; $i++)
                    <div class="w-full max-w-lg bg-white border border-gray-200 rounded-lg shadow">
                        <a href="#">
                            <img class="p-5 rounded-t-lg"
                                src="{{ asset('images/collections -20240110T133638Z-001/collections/Custom Bouquet/2E280149-EB91-4844-8350-D03F5CC2CCCB.jpg') }}"
                                alt="product image" />
                        </a>
                        <div class="px-5 pb-5">
                            <a href="#">
                                <h5 class="text-md font-secondary font-medium text-gray-900">Apple Watch
                                    Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                            </a>
                            <h5 class="py-2 text-md font-secondary font-semibold tracking-normal text-gray-900">Rp
                                40.000,00</h5>
                            <div class="flex items-center mt-1 mb-5">
                                <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-gray-200" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                </div>
                                <span
                                    class="bg-pink-100 text-primary text-xs font-semibold px-2.5 py-0.5 rounded ms-3">5.0</span>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>




        </div>
    </section>

    {{--
    <section class="py-16 bg-neutral-50 pb-40" id="products">
        <div class="container mx-auto px-8 pb-5 overflow-hidden">
            <h2 class="text-3xl font-primary text-gray-800 mb-10 text-center">Products</h2>
            @if ($agent::isMobile())
                <div class="swiper-container">
                    <div class="swiper-wrapper grid">
                        <!-- Hand Bouquet -->
                        <div class="swiper-slide rounded-lg shadow-md">
                            <img src="{{ asset('images/image (1).jpg') }}" alt="Hand Bouquet Image"
                                class="w-full h-64 object-cover">
                            <div class="p-6">
                                <h3 class="text-xl font-primary text-gray-800 mb-2">Hand Bouquet</h3>
                                <p class="text-gray-600 font-secondary">Elegantly crafted hand bouquets for special
                                    moments.</p>
                                <button class="mt-4 font-secondary bg-primary text-white py-2 px-4 rounded-full">Shop
                                    Now</button>
                            </div>
                        </div>
                        <!-- Money Bouquet -->
                        <div class="swiper-slide rounded-lg shadow-md">
                            <img src="{{ asset('images/image (3).jpg') }}" alt="Money Bouquet Image"
                                class="w-full h-64 object-cover">
                            <div class="p-6">
                                <h3 class="text-xl font-primary text-gray-800 mb-2">Money Bouquet</h3>
                                <p class="text-gray-600 font-secondary">A unique blend of flowers and notes for a
                                    creative gift.</p>
                                <button class="mt-4 font-secondary bg-primary text-white py-2 px-4 rounded-full">Shop
                                    Now</button>
                            </div>
                        </div>
                        <!-- Custom Bouquet -->
                        <div class="swiper-slide rounded-lg shadow-md">
                            <img src="{{ asset('images/image (6).jpg') }}" alt="Custom Bouquet Image"
                                class="w-full h-64 object-cover">
                            <div class="p-6">
                                <h3 class="text-xl font-primary text-gray-800 mb-2">Custom Bouquet</h3>
                                <p class="text-gray-600 font-secondary">Create your own bouquet with our customizable
                                    options.</p>
                                <button class="mt-4 font-secondary bg-primary text-white py-2 px-4 rounded-full">Shop
                                    Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-scrollbar"></div>
                </div>
            @else
                <div class="grid snap-x xs:grid-cols-3 md:grid-cols-3 lg:grid-cols-3 gap-8">
                    <!-- Hand Bouquet -->
                    <div class="snap-center overflow-hidden rounded-lg shadow-md">
                        <img src="{{ asset('images/image (1).jpg') }}" alt="Hand Bouquet Image"
                            class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-primary text-gray-800 mb-2">Hand Bouquet</h3>
                            <p class="font-secondary text-gray-600">Elegantly crafted hand bouquets for special
                                moments.</p>
                            <button class="mt-4 font-secondary bg-primary text-white py-2 px-4 rounded-full">Shop
                                Now</button>
                        </div>
                    </div>
                    <!-- Money Bouquet -->
                    <div class="snap-center overflow-hidden rounded-lg shadow-md">
                        <img src="{{ asset('images/image (3).jpg') }}" alt="Money Bouquet Image"
                            class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-primary text-gray-800 mb-2">Money Bouquet</h3>
                            <p class="font-secondary text-gray-600">A unique blend of flowers and notes for a creative
                                gift.</p>
                            <button class="mt-4 font-secondary bg-primary text-white py-2 px-4 rounded-full">Shop
                                Now</button>
                        </div>
                    </div>
                    <!-- Custom Bouquet -->
                    <div class="snap-center overflow-hidden rounded-lg shadow-md">
                        <img src="{{ asset('images/image (6).jpg') }}" alt="Custom Bouquet Image"
                            class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-primary text-gray-800 mb-2">Custom Bouquet</h3>
                            <p class="font-secondary text-gray-600">Create your own bouquet with our customizable
                                options.</p>
                            <button class="mt-4 font-secondary bg-primary text-white py-2 px-4 rounded-full">Shop
                                Now</button>
                        </div>
                    </div>
                </div>
            @endif
            <div class="text-center mt-20">
                <button class="bg-primary text-white py-3 px-8 rounded-full font-secondary text-lg hover:bg-opacity-80"
                    data-ripple-light="true">
                    Explore All Collections
                </button>
            </div>


        </div>
    </section>
    --}}
    <script>
        console.log("baye")
    </script>
    <script type="module">
    console.log("WDAWDAd")
        var settings = {
            "url": "http://127.0.0.1:8000/api/products",
            "method": "GET",
            "timeout": 0,
            "headers": {
                "Authorization": "Bearer 3|n4cDcB5uGDRDkCKVXR3mM72zyuNGKfaloxY2Lm7ue80657bc"
            },
        };
        console.log("heelo")

        $.ajax(settings).done(function(response) {
            console.log(response);
            console.log('aaa')
        });
    </script>
</body>

</html>
