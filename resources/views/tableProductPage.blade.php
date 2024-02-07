@extends('layouts.components.adminTemplate')

@section('body')
    @if ($name == 'products')
        @component('layouts.components.productTable')
        @endcomponent
    @elseif ($name == 'categories')

    @endif
@endsection


@push('scripts')

<script type="module">

    function getUserData() {
        // sesssionStorage.setItem("web_token", token);
        let x = localStorage.getItem("user_data");
        let obj = JSON.parse(x)
        return obj;
    }
    const userdata = getUserData();
    console.log(userdata)

    function getResponse(url, method, authorization) {
        // let settings = {
        //     "url": url,
        //     "method": method,
        //     "timeout": 0,
        //     // "async": false,
        //     "headers": {
        //         "Authorization": authorization,
        //     },
        // };
        let response = null;

        let settings = {
            "url": url,
            "method": method,
            "timeout": 0,
            "async": false,
            "headers": {
                "Authorization": `Bearer ${authorization}`,
            },
            beforeSend: function() {
                console.log("waiting")
            },
            success: function(res) {
                console.log(response)
                response = res;
                // saveToken(response.data.token);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR);
            }
        };
        $.ajax(settings);
        return response;
    }

    function loadProductData(page = 1) {
        var response = null;
        let url = `http://127.0.0.1:8000/api/products?page=${page}`;
        // let settings = setting(url, "GET",
        //     "Bearer " + userdata.token)

        // $.ajax(setting(url, "GET", authorization));
        // $.ajax(settings).done(function(res) {
        //     response = res;
        //     // console.log(response);
        // });
        return getResponse(url, "GET", userdata.token);
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
        let getData = null;
        // console.log(loadProductData(page))
        getData = loadProductData(page).data;

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
        // let settings = setting(url, "GET",
        //     "Bearer 1|IhNn8OHUHlZPFl8fIBN41RhukE444SfRRFuCuHJi1102ff7f")
        // $.ajax(settings).done(function(res) {
        //     response = res;
        //     // console.log(response);
        // });
        return getResponse(url, "GET", userdata.token);
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
