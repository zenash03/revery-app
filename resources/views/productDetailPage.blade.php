@extends('layouts.components.app')
@section('header')
    @component('layouts.components.header')
    @endcomponent
@endsection

@section('body')
    <section class="p-12"></section>

    <section class="py-8" id="breadcrumb">
        <div class="container px-8 mx-auto">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li>
                        <a href="/products" type="button" class="text-white bg-pink-500 hover:bg-primary focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2">
                            <svg class="w-3.5 h-3.5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m15 19-7-7 7-7"/>
                            </svg>
                            Back
                        </a>
                    </li>
                    <li class="inline-flex items-center">
                        <a href="/home"
                            class="inline-flex items-center text-sm font-secondary font-semibold text-gray-600 hover:text-primary">
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
                            <a class="ms-1 text-sm font-secondary font-semibold md:ms-2 text-gray-600 hover:text-primary" href="/products">Products</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="ms-1 text-sm font-secondary font-semibold md:ms-2 text-gray-400">Details</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="text-gray-700 body-font overflow-hidden bg-white">
        <div class="container px-5 py-16 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <div class="lg:w-1/2">
                    <img class="object-cover object-center rounded"
                         alt="Product image" id="product_image">
                </div>
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 px-8 lg:mt-0">
                    <h2 class="text-sm text-gray-500 tracking-widest font-secondary mb-2" id="category_name"></h2>
                    <h1 class="text-gray-900 text-3xl font-medium mb-4 font-secondary" id="product_name"></h1>
                    <p class="leading-relaxed" id="product_description"></p>
                    <div class="flex py-5">
                        <span class="title-font font-medium text-2xl text-gray-900" id="product_price">Rp 453</span>
                        <button
                            class="flex ml-auto text-white bg-pink-500 border-0 py-2 px-6 focus:outline-none hover:bg-primary rounded">Contact
                            Now</button>
                        {{-- <button
                            class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path
                                    d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z">
                                </path>
                            </svg>
                        </button> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@push('scripts')
    <script type="module">
        function getData() {
            let url = sessionStorage.getItem("url")

            let decode = JSON.parse(decodeURIComponent(url));

            return decode;
        }

        $(window).on("load", function() {
            let data = getData();
            $('#category_name').text(data.category.category_name);
            $('#product_name').text(data.product_name);
            $('#product_description').text(data.product_description);

            let productPrice = "Rp " + data.product_price.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
            $('#product_price').text(productPrice);
            $('#product_image').attr('src', `{{ asset('images/uploads/${data.product_image_url}') }}`);
        })


    </script>
@endpush
