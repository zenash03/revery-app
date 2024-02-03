@extends('layouts.components.app')
@section('header')
    @component('layouts.components.header')
    @endcomponent
@endsection

@section('body')
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
                            <span class="ms-1 text-sm font-secondary font-semibold md:ms-2 text-gray-400">Products</span>
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

            <div class="mt-5 grid xs:grid-cols-1 md:grid-cols-5 lg:grid-cols-5 gap-8" id="productData">
                {{-- @for ($i = 0; $i < 10; $i++) --}}
                {{-- <div class="w-full max-w-lg bg-white border border-gray-200 rounded-lg shadow">
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
                                    <svg class="w-4 h-4 text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                </div>
                                <span
                                    class="bg-pink-100 text-primary text-xs font-semibold px-2.5 py-0.5 rounded ms-3">5.0</span>
                            </div>
                        </div> --}}
            </div>
            {{-- @endfor --}}


            <div class="flex flex-col py-12 justify-center items-center">
                <!-- Previous Button -->
                <span class="text-sm text-gray-700 dark:text-gray-400 font-secondary">
                    Showing <span class="font-semibold text-gray-900 dark:text-white" id="pageFrom">1</span> to <span
                        class="font-semibold text-gray-900 dark:text-white" id="pageTo">10</span> of <span
                        class="font-semibold text-gray-900 dark:text-white" id="totalEntry">100</span> Entries
                </span>
                <div class="inline-flex mt-2 xs:mt-0">
                    <button id="previousButton"
                        class="flex items-center justify-center px-3 h-8 me-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white font-secondary">
                        <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.25"
                                d="M13 5H1m0 0 4 4M1 5l4-4" />
                        </svg>
                        Previous
                    </button>
                    <button id="nextButton"
                        class="flex items-center justify-center px-3 h-8 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white font-secondary">
                        Next
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.25"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>





        </div>
    </section>
@endsection

@section('footer')
@endsection

@push('scripts')
    <script type="module">
        function setting(url, method, authorization) {
            let settings = {
                "url": url,
                "method": method,
                "timeout": 0,
                "async": false,
                "headers": {
                    "Authorization": authorization,
                },
            };
            return settings;
        }


        function loadProductData(page = 1) {
            var response = null;
            let url = `http://127.0.0.1:8000/api/products?page=${page}`;
            let settings = setting(url, "GET",
                "Bearer 1|IhNn8OHUHlZPFl8fIBN41RhukE444SfRRFuCuHJi1102ff7f")
            $.ajax(settings).done(function(res) {
                response = res;
                // console.log(response);
            });
            return response;
        }

        // let data = loadProductData()
        // console.log(data)

        function templateProduct(data) {
            // let product_id = data.product_id;
            // console.log(data)
            let product_name = data.product_name;
            let slug = data.slug;
            let product_price = data.product_price;
            let category_name = data.category.category_name;
            let product_image_url = data.product_image_url;

            let params = data;
            // let str = $.param(params);
            let str = encodeURIComponent(JSON.stringify(params))
            // let decode = decodeURIComponent($.param (params));
            // console.log(decode)

            product_price = "Rp " + product_price
            let element =
            // onclick="navigate('${str}')"
                `<div class="w-full max-w-lg bg-white border border-gray-200 rounded-lg shadow">
                    <a href="/products/${slug}" onclick="navigate('${str}', '${slug}')">
                        <img class="p-5 pb-3 rounded-t-lg"
                            src="{{ asset('images/collections -20240110T133638Z-001/collections/Custom Bouquet/2E280149-EB91-4844-8350-D03F5CC2CCCB.jpg') }}"
                            alt="product image" />
                    </a>
                        <div class="px-5 pb-5">
                            <p class="font-secondary text-xs font-semibold text-primary pb-1">${category_name}</p>
                            <div>
                                <h5 class="text-md font-secondary font-medium text-gray-900">${product_name}</h5>
                            </div>
                            <h5 class="py-2 text-md font-secondary font-semibold tracking-normal text-gray-900">${product_price}</h5>
                        </div>`

            return element;
        }

        $.urlParam = function(name) {
            var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
            if (results != null) {
                return results[1] || 0
            } else {
                return 1
            }
        }
        $(document).ready(function () {
            $("button").click(function () {
                console.log("adwad")
            })
        })

        $(window).on("load", function() {
            let page = $.urlParam('page');
            // console.log(page)

            let getData = loadProductData(page).data
            // console.log(getData)

            let productData = getData.data
            productData.forEach(data => {
                $('#productData').append(templateProduct(data))
            });

            let meta = getData.meta;

            $('#pageFrom').text(meta.from)
            $('#pageTo').text(meta.to)
            $('#totalEntry').text(meta.total)

            let links = getData.links;

            $("#previousButton").click(function() {
                let currentPage = parseInt(meta.current_page) - 1;
                if (links.prev != null) {
                    window.location = `/products?page=${currentPage}`
                }
            })
            $('#nextButton').click(function() {
                let currentPage = parseInt(meta.current_page) + 1;
                if (links.next != null) {
                    window.location = `/products?page=${currentPage}`;
                }
            })
        })
    </script>
    <script type="text/javascript">
        function navigate(url, slug) {
            let decode = decodeURIComponent(url);
            console.log(url);
            console.log(decode)

            sessionStorage.setItem("url", url);

            window.location = `/products/${slug}`;
        }
    </script>
@endpush
