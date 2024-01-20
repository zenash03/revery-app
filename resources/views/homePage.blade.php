<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    @vite('resources/css/app.css')
    <!-- Include Swiper CSS -->
    {{-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Include Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>


<body class="bg-slate-50 w-full">
    {{-- <h1 class="text-3xl font-primary">Hai</h1> --}}

    {{-- <Header class="w-full text-gray-700 bg-white">
        <h1 class="font-primary">HHHHA</h1>
    </Header> --}}

    <!-- component -->
    <div class="w-screen main-navigation text-gray bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 p-4 fixed shadow-sm z-50">
        <div x-data="{ open: false }" id="navbar"
            class="flex flex-col px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
            <div class="p-4 flex flex-row items-center justify-between">
                <a href="#"
                    class="text-2xl font-primary tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Revery
                </a>
                <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{ 'flex': open, 'hidden': !open }"
                class="flex-col flex-grow pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
                <a class="px-4 py-2 mt-2 text-base font-secondary bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-600 focus:outline-none focus:shadow-outline"
                    href="#home">Home</a>
                <a class="px-4 py-2 mt-2 text-base font-secondary bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-600 focus:outline-none focus:shadow-outline"
                    href="#aboutus">About Us</a>
                <a class="px-4 py-2 mt-2 text-base font-secondary bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-600 focus:outline-none focus:shadow-outline"
                    href="#products">Products</a>
                <a class="px-4 py-2 mt-2 text-base font-secondary bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-600 focus:outline-none focus:shadow-outline"
                    href="#gallery">Gallery</a>
                <a class="px-4 py-2 mt-2 text-base font-secondary bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-600 focus:outline-none focus:shadow-outline"
                    href="#contact">Contact</a>
                {{-- <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open"
                        class="flex flex-row items-center w-full px-4 py-2 mt-2 text-base font-secondary text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <span>Dropdown</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
                            class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                        <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                href="#">Link #1</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                href="#">Link #2</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                href="#">Link #3</a>
                        </div>
                    </div>
                </div> --}}
            </nav>
        </div>
    </div>
    <div class="bg-cover bg-fixed bg-no-repeat bg-background1 h-screen bg-top" id="home">
        <div class="h-screen bg-opacity-50 bg-black flex items-center justify-center"
            style="background:rgba(0,0,0,0.5);">
            <div class="mx-2 text-center">
                <h1 class="text-gray-100 font-primary tracking-wide text-3xl xs:text-5xl md:text-6xl">
                    <span class="text-white">Welcome</span> To Revery
                </h1>
                <h2 class="text-gray-100 font-primary tracking-wide text-2xl xs:text-2xl md:text-5xl">
                    Beatiful <span class="text-white">Bouquets </span> for <span class="text-white">Every</span>
                    occasion!
                </h2>
                <div class="inline-flex my-5 mx-2">
                    <button
                        class="middle none center mr-3 rounded-lg bg-primary py-3 px-6 font-secondary text-xs font-bold uppercase text-white shadow-md transition-all disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none tracking-wide"
                        data-ripple-light="true">
                        Get Started
                    </button>
                </div>
            </div>
        </div>
    </div>
    <section class="py-16 bg-yellow" id="aboutus">
        <div class="container mx-auto px-6 xl:w-1/2">
            <h2 class="text-3xl font-primary text-text-2 mb-10 text-center font-medium">About Us</h2>
            <div class="flex flex-col md:flex-row items-center xl:space-x-8 md:space-x-8">
                <div class="xl:w-1/2 md:w-1/2">
                    <img src="{{ asset('images/about-us.jpg') }}" alt="About Us Image"
                        class="w-full h-auto rounded-lg shadow-md mb-8 md:mb-0">
                </div>
                <div class="xl:w-1/2 md:w-1/2">
                    <p class="text-text-2 mb-6 font-secondary font-medium">Welcome to Revery, your go-to destination for
                        enchanting bouquets that elevate every occasion. Our journey began with a simple yet profound
                        belief – that the beauty of nature can bring joy and meaning to life's special moments.</p>
                    <p class="text-text-2 mb-6 font-secondary font-medium">At Revery, we curate each bouquet with
                        passion and precision, ensuring that every arrangement is a work of art. Whether it's a romantic
                        gesture, a celebration, or a moment of solace, our bouquets are designed to convey emotions and
                        create lasting memories.</p>
                </div>
            </div>
        </div>
    </section>

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
                                <p class="text-gray-600 font-secondary">Elegantly crafted hand bouquets for special moments.</p>
                                <button class="mt-4 font-secondary bg-primary text-white py-2 px-4 rounded-full">Shop Now</button>
                            </div>
                        </div>
                        <!-- Money Bouquet -->
                        <div class="swiper-slide rounded-lg shadow-md">
                            <img src="{{ asset('images/image (3).jpg') }}" alt="Money Bouquet Image"
                                class="w-full h-64 object-cover">
                            <div class="p-6">
                                <h3 class="text-xl font-primary text-gray-800 mb-2">Money Bouquet</h3>
                                <p class="text-gray-600 font-secondary">A unique blend of flowers and notes for a creative gift.</p>
                                <button class="mt-4 font-secondary bg-primary text-white py-2 px-4 rounded-full">Shop Now</button>
                            </div>
                        </div>
                        <!-- Custom Bouquet -->
                        <div class="swiper-slide rounded-lg shadow-md">
                            <img src="{{ asset('images/image (6).jpg') }}" alt="Custom Bouquet Image"
                                class="w-full h-64 object-cover">
                            <div class="p-6">
                                <h3 class="text-xl font-primary text-gray-800 mb-2">Custom Bouquet</h3>
                                <p class="text-gray-600 font-secondary">Create your own bouquet with our customizable options.</p>
                                <button class="mt-4 font-secondary bg-primary text-white py-2 px-4 rounded-full">Shop Now</button>
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
                            <p class="font-secondary text-gray-600">Elegantly crafted hand bouquets for special moments.</p>
                            <button class="mt-4 font-secondary bg-primary text-white py-2 px-4 rounded-full">Shop Now</button>
                        </div>
                    </div>
                    <!-- Money Bouquet -->
                    <div class="snap-center overflow-hidden rounded-lg shadow-md">
                        <img src="{{ asset('images/image (3).jpg') }}" alt="Money Bouquet Image"
                            class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-primary text-gray-800 mb-2">Money Bouquet</h3>
                            <p class="font-secondary text-gray-600">A unique blend of flowers and notes for a creative gift.</p>
                            <button class="mt-4 font-secondary bg-primary text-white py-2 px-4 rounded-full">Shop Now</button>
                        </div>
                    </div>
                    <!-- Custom Bouquet -->
                    <div class="snap-center overflow-hidden rounded-lg shadow-md">
                        <img src="{{ asset('images/image (6).jpg') }}" alt="Custom Bouquet Image"
                            class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-primary text-gray-800 mb-2">Custom Bouquet</h3>
                            <p class="font-secondary text-gray-600">Create your own bouquet with our customizable options.</p>
                            <button class="mt-4 font-secondary bg-primary text-white py-2 px-4 rounded-full">Shop Now</button>
                        </div>
                    </div>
                </div>
            @endif
            <div class="text-center mt-20">
                <button class="bg-primary text-white py-3 px-8 rounded-full font-secondary text-lg hover:bg-opacity-80" data-ripple-light="true">
                    Explore All Collections
                </button>
            </div>


        </div>
    </section>

    <section class="py-16 bg-yellow" id="gallery">
        <div class="container mx-auto px-8">
            <h2 class="text-3xl font-primary text-gray-800 mb-10 text-center">Gallery</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <!-- Add gallery items here -->
                @for ($i = 1; $i <= 8; $i++)
                    <div class="overflow-hidden rounded-md shadow-sm ease-in">
                        <img src="{{ asset('images/image (' . $i . ').jpg') }}" alt="Bouquet Gallery Image"
                            class="w-full h-64 object-cover">
                    </div>
                @endfor

                <!-- Repeat the structure for additional gallery items -->
            </div>
        </div>
    </section>

    <section class="py-16 bg-neutral-50" id="contact">
        <div class="container mx-auto px-8">
            <h2 class="text-3xl font-primary text-gray-800 mb-10 text-center">Contact Us</h2>
            <div class="flex flex-col md:flex-row justify-center gap-8">
                <!-- Contact Form -->
                <div class="max-w-sm">
                    <img class=" rounded-lg" src="{{ asset('images/logo.png') }}">
                </div>
                <!-- Contact Details -->
                <div class="">
                    <div class=" md:text-left">
                        <h1 class="text-lg font-secondary mb-4 font-semibold">Contact Details</h1>
                        <p class="font-secondary tracking-wide text-gray-800 mb-4"><span
                                class="font-bold">Phone:</span> 0877 7366 7184</p>
                        <p class="font-secondary tracking-wide text-gray-800 mb-4"><span
                                class="font-bold">Instagram:</span> @revery.ind
                        </p>
                        <p class="font-secondary tracking-wide text-gray-800"><span class="font-bold">Alamat:</span>
                            Jelambar, Jakarta Barat, Indonesia</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

{{-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> --}}

<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 16,
        // pagination: {
        //     el: '.swiper-pagination',
        //     clickable: true,
        // },
        scrollbar: {
            el : '.swiper-scrollbar',
            hide: true
        }
    });

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            const target = document.querySelector(this.getAttribute('href'));
            const navigation = document.querySelector('.main-navigation');
            const navHeight = navigation.offsetHeight;

            document.documentElement.style.setProperty(
                "--scroll-padding",
                navHeight + 'px'
            )
            document.getElementById("navbar")

            target.scrollIntoView();
        });
    });
</script>

</html>
