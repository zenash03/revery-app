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
    @component('layouts.components.header')

    @endcomponent
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
