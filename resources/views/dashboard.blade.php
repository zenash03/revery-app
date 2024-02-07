@extends('layouts.components.app')

    {{-- <style>
        /* Agregar estilos para la vista de dispositivos pequeños */
        /* @media (max-width: 768px) {
            .flex-wrap {
                display: flex;
                flex-wrap: wrap;
            }

            .section-small {
                width: 50%;
            }
        } */
    </style>

    @vite('resources/js/app.js')
</head> --}}

@section('body')
    <div class="flex flex-col bg-gray-100 min-h-screen">

        <div class="bg-white text-white shadow w-full p-2 flex items-center justify-between">
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
            {{-- <div class="space-x-5">
                <button>
                    <i class="fas fa-bell text-gray-500 text-lg"></i>
                </button>
                <button>
                    <i class="fas fa-user text-red text-lg"></i>
                </button>
            </div> --}}
        </div>

        <div class="flex-1 flex">
            <div class="p-2 bg-white w-60 flex flex-col md:flex" id="sideNav">
                <nav>
                    <a href="#"
                        class="flex items-center p-2 py-4 text-gray-600 rounded-lg hover:bg-gray-100 font-secondary group">
                        <svg class="w-5 h-5 text-gray-400 transition duration-75 dark:text-gray-400 group-hover:text-gray-700"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 22 21">
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
                            <a href="#"
                                class="flex items-center w-full p-2 text-gray-700 transition duration-75 rounded-lg pl-11 group hover:bg-slate-100 font-secondary">Products</a>
                        </div>
                        <div>
                            <a href="#"
                                class="flex items-center w-full p-2 text-gray-700 transition duration-75 rounded-lg pl-11 group hover:bg-slate-100 font-secondary">Billing</a>
                        </div>
                        <div>
                            <a href="#"
                                class="flex items-center w-full p-2 text-gray-700 transition duration-75 rounded-lg pl-11 group hover:bg-slate-100 font-secondary">Invoice</a>
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

            <div class="flex-1 p-6">
                <section class="flex justify-between items-center">
                    <h3 class="font-secondary text-lg font-medium">Product Table</h3>
                    <button type="button"
                        class="focus:outline-none text-white font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 bg-green-600 hover:bg-green-700 focus:ring-green-800"
                        data-modal-toggle="crud-modal" data-modal-target="crud-modal">Add Product</button>
                    <div id="crud-modal" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        Add New Product
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-toggle="crud-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <form class="p-4 md:p-5" id="crudForm">
                                    <div class="grid gap-4 mb-4 grid-cols-2">
                                        <div class="col-span-2">
                                            <label for="name"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                            <input type="text" name="name" id="name"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Type product name" required="">
                                        </div>
                                        <div class="col-span-2 sm:col-span-1">
                                            <label for="price"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                            <input type="number" name="price" id="price"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="$2999" required="">
                                        </div>
                                        <div class="col-span-2 sm:col-span-1">
                                            <label for="category"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                            <select id="category"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                required>
                                                <option selected="">Select category</option>
                                            </select>
                                        </div>
                                        <div class="col-span-2">
                                            <label for="description"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                                                Description</label>
                                            <textarea id="description" rows="4"
                                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Write product description here" required></textarea>
                                        </div>
                                        <div class="col-span-2">

                                            <label class="block mb-2 text-sm font-medium text-gray-900"
                                                for="file_input">Image</label>
                                            <input
                                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                                                aria-describedby="file_input_help" id="image_input" type="file">
                                            <p class="mt-1 text-sm text-gray-500" id="file_input_help">SVG, PNG, JPG
                                                or GIF</p>

                                            {{-- <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Image</label>
                                            <div class="flex items-center justify-center w-full">
                                                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                                        </svg>
                                                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                                    </div>
                                                    <input id="dropzone-file" type="file" class="hidden" />
                                                </label>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="col-span-2">
                                        <div class="grid justify-end">
                                            <button type="submit"
                                                class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Add new product
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="py-6">
                    <div class="flex flex-col">
                        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                        <thead class="bg-gray-50 dark:bg-gray-800">
                                            <tr>
                                                <th scope="col"
                                                    class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    <div class="flex items-center gap-x-3">
                                                        <input type="checkbox"
                                                            class="text-blue-500 border-gray-300 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700">
                                                        <button class="flex items-center gap-x-2">
                                                            <span>ID</span>

                                                            {{-- <svg class="h-3" viewBox="0 0 10 11" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z"
                                                                    fill="currentColor" stroke="currentColor"
                                                                    stroke-width="0.1" />
                                                                <path
                                                                    d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z"
                                                                    fill="currentColor" stroke="currentColor"
                                                                    stroke-width="0.1" />
                                                                <path
                                                                    d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z"
                                                                    fill="currentColor" stroke="currentColor"
                                                                    stroke-width="0.3" />
                                                            </svg> --}}
                                                        </button>
                                                    </div>
                                                </th>

                                                <th scope="col"
                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Name
                                                </th>

                                                <th scope="col"
                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Description
                                                </th>

                                                <th scope="col"
                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Price
                                                </th>

                                                <th scope="col"
                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Category
                                                </th>

                                                <th scope="col"
                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Image
                                                </th>
                                                <th scope="col"
                                                    class="px-4 py-3.5 text-sm text-left rtl:text-right text-gray-800 dark:text-gray-400 font-semibold">
                                                    Actions
                                                </th>

                                                {{-- <th scope="col" class="relative py-3.5 px-4">
                                                    <span class="sr-only">Actions</span>
                                                </th> --}}
                                            </tr>
                                        </thead>
                                        <tbody id="tbody"
                                            class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <button id="previousButton"
                            class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                            </svg>

                            <span>
                                previous
                            </span>
                        </button>

                        <div class="items-center hidden md:flex gap-x-3">
                            <span class="text-sm text-gray-700 dark:text-gray-400 font-secondary">
                                Showing <span class="font-semibold text-gray-900 dark:text-white"
                                    id="pageFrom">1</span> to <span
                                    class="font-semibold text-gray-900 dark:text-white" id="pageTo">10</span> of
                                <span class="font-semibold text-gray-900 dark:text-white" id="totalEntry">100</span>
                                Entries
                            </span>
                            {{-- <a href="#"
                                class="px-2 py-1 text-sm text-blue-500 rounded-md dark:bg-gray-800 bg-blue-100/60">1</a>
                            <a href="#"
                                class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">2</a>
                            <a href="#"
                                class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">3</a>
                            <a href="#"
                                class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">...</a>
                            <a href="#"
                                class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">12</a>
                            <a href="#"
                                class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">13</a>
                            <a href="#"
                                class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">14</a> --}}
                        </div>

                        <button id="nextButton"
                            class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
                            <span>
                                Next
                            </span>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                            </svg>
                        </button>
                    </div>
                </section>
            </div>
            {{-- @component('layouts.components.compDashboard')

            @endcomponent --}}


        </div>
    </div>

@endsection

@push('scripts')

<script type="module">

    function getUserData() {
        // sesssionStorage.setItem("web_token", token);
        let x = localStorage.getItem("web_token");
        console.log(x);
    }
    getUserData();

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

    function templateProduct(data) {
        let product_id = data.product_id;
        let product_name = data.product_name;
        let product_description = data.product_description;
        let slug = data.slug;
        let product_price = data.product_price;
        let category_name = data.category.category_name;
        let product_image_url = data.product_image_url;

        let element = `
        <tr>
            <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                <div class="inline-flex items-center gap-x-3">
                    <input type="checkbox"
                        class="text-blue-500 border-gray-300 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700">

                    <span>${product_id}</span>
                </div>
            </td>
            <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                ${product_name}</td>
            <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                ${product_description}</td>
            <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                Rp ${product_price}</td>
            <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                <div class="flex w-max h-max">
                    <p class="">${category_name}</p></td>
                </div>
            <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                <div class="flex flex-col w-32 gap-y-1">
                    <img class="object-cover w-full" src="{{ asset('images/uploads/${product_image_url}') }}" />
                    <button class="bg-pink-500 text-white py-1 rounded-sm text-sm font-medium transition-colors duration-200 hover:text-white hover:bg-primary">
                        View Image
                    </button>
                </div>
            </td>
            <td class="px-4 py-4 text-sm whitespace-nowrap">
                <div class="flex flex-col items-start content-start justify-start gap-y-3">
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                        <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 21">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.3 4.8 2.9 2.9M7 7H4a1 1 0 0 0-1 1v10c0 .6.4 1 1 1h11c.6 0 1-.4 1-1v-4.5m2.4-10a2 2 0 0 1 0 3l-6.8 6.8L8 14l.7-3.6 6.9-6.8a2 2 0 0 1 2.8 0Z"/>
                        </svg>
                        Edit
                    </button>
                    <button type="button" class="text-white bg-red-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                        <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                        </svg>
                        Delete
                    </button>
                </div>
            </td>
        </tr>`;

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

    $(window).on("load", function() {
        let page = $.urlParam('page');
        let getData = loadProductData(page).data;

        let productData = getData.data
        productData.forEach(data => {
            $('#tbody').append(templateProduct(data))
        });

        let meta = getData.meta;

        $('#pageFrom').text(meta.from);
        $('#pageTo').text(meta.to);
        $('#totalEntry').text(meta.total);

        let links = getData.links;

        $("#previousButton").click(function() {
            let currentPage = parseInt(meta.current_page) - 1;
            if (links.prev != null) {
                window.location = `/dashboard/table/products?page=${currentPage}`
            }
        })
        $('#nextButton').click(function() {
            let currentPage = parseInt(meta.current_page) + 1;
            if (links.next != null) {
                window.location = `/dashboard/table/products?page=${currentPage}`;
            }
        })

        let getCategoryData = loadDataCategory(page).data;
        getCategoryData.forEach(data => {
            let category_id = data.category_id;
            let category_name = data.category_name;
            $('#category').append(`<option value="${category_id}">${category_name}</option>`)
        })
    })

    function loadDataCategory(page = 1) {
        var response = null;
        let url = `http://127.0.0.1:8000/api/categories?page=${page}`;
        let settings = setting(url, "GET",
            "Bearer 1|IhNn8OHUHlZPFl8fIBN41RhukE444SfRRFuCuHJi1102ff7f")
        $.ajax(settings).done(function(res) {
            response = res;
            // console.log(response);
        });
        return response;
    }

    $('#crudForm').on("submit", function(e) {
        e.preventDefault();
        let product_name = $('#name').val();
        let product_price = $('#price').val();
        let category = $('#category').val();
        let description = $('#description').val();
        let image = $('#image_input')[0];
        let image_input = $('#image_input')[0].files;

        // let tmppath = URL.createObjectURL(e.target.files[0])

        // let form = {
        //     "product_name": product_name,
        //     "product_price": product_price,
        //     "product_description": description,
        //     "category_id": category,
        //     "product_image_url": image,
        //     "_token": $('meta[name="csrf-token"]').attr('content')
        // };
        let form = new FormData();
        form.append("product_name", product_name);
        form.append("product_price", product_price);
        form.append("product_description", description);
        form.append("category_id", category);
        form.append("product_image_url", image_input[0]);
        form.append("_token", $('meta[name="csrf-token"]').attr('content'));
        let url = `http://127.0.0.1:8000/api/products/`

        let settings = {
            "url": url,
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Authorization": "Bearer 1|IhNn8OHUHlZPFl8fIBN41RhukE444SfRRFuCuHJi1102ff7f",
                "X-CSRF-TOKEN"  : $('meta[name="csrf-token"]').attr('content')
            },
            "processData": false,
            "contentType": false,
            "dataType": "json",
            // "mimeType": "multipart/form-data",
            "data": form,
            beforeSend: function() {
                console.log("waiting")
            },
            success: function(response) {
                console.log("aaa")
                console.log(response)
                // saveToken(response.data.token);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR);
            }
        };

        $.ajax(settings);

    })
</script>
{{-- <script>

    var usersChart = new Chart(document.getElementById('usersChart'), {
        type: 'doughnut',
        data: {
            labels: ['Nuevos', 'Registrados'],
            datasets: [{
                data: [30, 65],
                backgroundColor: ['#00F0FF', '#8B8B8D'],
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom'
            }
        }
    });


    var commercesChart = new Chart(document.getElementById('commercesChart'), {
        type: 'doughnut',
        data: {
            labels: ['Nuevos', 'Registrados'],
            datasets: [{
                data: [60, 40],
                backgroundColor: ['#FEC500', '#8B8B8D'],
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom'
            }
        }
    });


    const menuBtn = document.getElementById('menuBtn');
    const sideNav = document.getElementById('sideNav');

    menuBtn.addEventListener('click', () => {
        sideNav.classList.toggle('hidden');
    });
</script> --}}

@endpush
