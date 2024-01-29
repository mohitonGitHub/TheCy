@extends('layout.main')
@section('title')
    All-Items
@endsection
@section('style')
    <style>
        #all-item {
            background-image: url("https://t4.ftcdn.net/jpg/03/44/03/85/360_F_344038572_qWBkxhY2mT33kEwIRKi733rL1YRHgpDN.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            padding: 12rem 8rem 5rem 8rem;
        }

        .select {
            display: block;
            width: 100%;
            padding: 0.375rem 2.35rem 0.375rem 0.55rem;
            font-size: 1rem;
            padding: 5px;
            color: #212529;
            background-color: #fff;
            background-repeat: no-repeat;
            background-position: right 0.75rem center;
            background-size: 16px 12px;
            border: 1px solid #ced4da;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }   

        .relative {
            color:#000000;
            text-decoration: none;            
            /* border: 1px solid black; */
            border: none !important;
            transition: 0.3s ease-in-out;
        }
        
        .relative:hover {
            color: #b21515;
        }
     
        .select:hover {
            /* color: white; */
            /* background-color: rgb(220, 86, 86); */
            transition: 0.2s ease-in-out;
        }

        .product-headline {
            font-weight: 700;
            font-size: 3.8rem;
        }

        .checkbox .col-lg-12 {
            display: flex;
        }

        .checkbox .form-check {
            margin-right: 1.6rem;
            padding-left: 1.5rem;
        }

        @media (max-width: 2560px) {
            .fixed-bottom {
                display: none;
            }
        }

        @media (max-width: 1024px) {
            #all-item {
                padding: 10rem 5rem 3rem 5rem;
            }

            .product {
                margin-top: 2rem;
            }

            .fixed-bottom {
                display: none;
            }
        }

        @media (max-width: 786px) {
            #all-item {
                padding: 8rem 3rem 1rem 3rem;
            }

            .Large_screen_sorting {
                display: none;
            }

            .fixed-bottom {
                display: block;
            }

            .product-headline {
                font-weight: 600;
                font-size: 3.2rem;
            }
        }

        @media (max-width: 425px) {
            #all-item {
                padding: 6rem 1rem 1rem 1rem;
            }

            .product {
                margin-top: 1.6rem;
            }

            .product-headline {
                font-weight: 600;
                font-size: 3rem;
            }

            #filter {
                font-size: 25px;
            }

            #sort {
                font-size: 25px;
            }
        }

        @media (max-width: 320px) {
            #filter {
                font-size: 22px;
            }

            #sort {
                font-size: 22px;
            }
        }

        #sortfilter {
            padding: 0.5rem;
            background-color: #ffffff;
            border: 1px solid #b6b6b6;
        }

        #sortfilter .row .col-6:first-child {
            border-right: 1px solid #b6b6b6;
        }

        .fixed-bottom .row .col-6 {
            text-align: center;
        }

        /* fafaf */
        .slider {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 500px;
            height: 60px;
            padding: 30px;
            padding-left: 40px;
            background: #fcfcfc;
            border-radius: 20px;
            display: flex;
            align-items: center;
            box-shadow: 0px 15px 40px #7E6D5766;
        }

        .slider p {
            font-size: 26px;
            font-weight: 600;
            padding-left: 30px;
            color: black;
        }

        .slider input[type="range"] {
            -webkit-appearance: none !important;
            width: 420px;
            height: 2px;
            background: black;
            border: none;
            outline: none;
        }

        .slider input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none !important;
            width: 30px;
            height: 30px;
            background: black;
            border: 2px solid black;
            border-radius: 50%;
            cursor: pointer;
        }

        .slider input[type="range"]::-webkit-slider-thumb:hover {
            background: black;
        }

        .modal-footer {
            flex-wrap: nowrap;
            align-items: center;
            justify-content: center;
        }

        #sort {
            transition: 0.5s ease-in-out;
        }
    </style>
@endsection
@section('content')
    <div class="container my-5 blc" id="all-item">
        <div class="row justify-content-center">
            <div class="col-3 col-md-6">
                <div class="text-center text-white">
                    <h1 class="mb-5 page-heading">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita,
                        rem!"
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5 blc">
        <h1 class="text-center product-headline my-3">Our <span style="color: ;">Products</span></h1>
        {{-- sprting and filter for larger screens --}}
        <div class="row">
            {{-- <div class="col-lg-3 Large_screen_sorting">
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="" class="form-label">Sort</label>
                                <select class="select" name="" id="sorting">
                                    <option selected>Sort by</option>
                                    <option value="popularity">Sort by Popularity</option>
                                    <option value="latest">Sort by latest</option>
                                    <option value="lowTohigh">Sort by price: low to high</option>
                                    <option value="highTolow">Sort by price: high to low</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="" class="form-label">Products Types</label>
                                <select class="select" name="" id="product_type">
                                    <option value="Upper" selected>Select One</option>
                                    <option value="Upper">Upper wear</option>
                                    <option value="Lower">Lower</option>
                                    <option value="Head">Head wear</option>
                                    <option value="Gifting">Gifting Item</option>
                                    <option value="Personalized">Personalized</option>
                                    <option value="Professional">Professional</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label>Sizes</label>
                            <div class="checkbox">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-check">
                                            <input class="form-check-input sizes" type="checkbox" value="XS">
                                            <label> XS </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input sizes" type="checkbox" value="S">
                                            <label> S </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input sizes" type="checkbox" value="M">
                                            <label> M </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-check">
                                            <input class="form-check-input sizes" type="checkbox" value="L">
                                            <label> L </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input sizes" type="checkbox" value="XL">
                                            <label> XL </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input sizes" type="checkbox" value="XXL">
                                            <label> XXL </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <label for="customRange1" class="form-label">Price Range</label><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <span id="selectedRange">₹ 0</span>
                                </div>
                                <div class="col-md-6 text-end">
                                    <span id="selectedRange">₹ 4500</span>
                                </div>
                            </div>
                            <input type="range" class="form-range" id="price_range" min="0" max="4500"
                                value="100" oninput="rangeValue.innerText = this.value">
                            <div class="d-flex">
                                <span>₹&nbsp;</span>
                                <p id="rangeValue">100</p>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <label for="" class="form-label">Gender</label>
                            <div class="d-flex">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="M"
                                        id="gender">
                                    <label class="form-check-label" for="" style="margin-right: 10px;">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="F"
                                        id="gender">
                                    <label class="form-check-label" for="" style="margin-right: 10px;">
                                        Female
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="U"
                                        id="gender">
                                    <label class="form-check-label" for="">
                                        Unisex
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-4">
                            <div class="row">
                                <div class="col-6 col-md-6">
                                    <button type="button" class="btn btn-outline-primary w-100 p-2"
                                        id="filterApply">Apply</button>
                                </div>
                                <div class="col-6 col-md-6">
                                    <button type="button" class="btn btn-outline-primary w-100 p-2"
                                        id="filterClear">Clear</button>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </form>
            </div> --}}
            {{-- Products --}}
            <div class="col-lg-12">
                <div class="container d-flex">
                    <div class="row" id="pro">
                        @foreach ($product as $item)
                            @php
                                $cov = json_decode($item->product_image);
                                $str = implode(' ', $cov);
                                // dd($str);
                            @endphp
                            <div class="col-6 col-md-3 col-lg-2 mt-4">
                                <a href="{{ url('single-product', $item->id) }}">
                                    <img src="../product_image/{{ $str }}" class="img-fluid"
                                        alt="{{ $item->product_name }}">
                                </a>
                                <div class="row justify-content-center align-items-center g-2 mt-1 pb-1"
                                    style="border-bottom: 1px solid rgba(128, 128, 128, 0.723);">
                                    <div class="col-12">
                                        <h5 class="item-font float-start"><strong>{{ $item->product_name }}</strong></h5>
                                    </div>
                                    {{-- <div class="col-6">
                                        <h5 class="item-font float-end"><strong>
                                                @if (isset($item->type->product_type))
                                                    {{ $item->type->product_type }}
                                                @endif
                                            </strong>
                                        </h5>
                                    </div> --}}
                                </div>
                                {{-- <div class="row pt-1">
                                    <div class="col-md-6">
                                        <span class="mb-0" style="font-weight: 400" id="rs">
                                            {{ $item->product_type }}
                                        </span>
                                    </div>
                                </div> --}}
                            </div>
                            @endforeach
                            <div class="mt-5 d-flex justify-content-center">
                                {!! $product->links() !!}
                            </div>
                    </div>                   
                </div>
            </div>
        </div>

    </div>
    {{-- <div class="fixed-bottom">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">                       
                        <div class="row justify-content-end pt-1 pb-1 px-3 close" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo">
                            <div class="col-1 mr-2 pt-1">
                                <span class="float-right">
                                    <i class="fa-solid fa-xmark" style="font-size: 1.3rem"></i>
                                </span>
                            </div>
                        </div>                    
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="" class="form-label">Products Types</label>
                                    <select class="select" name="" id="product_type">
                                        <option value="Upper" selected>Select One</option>
                                        <option value="Upper">Upper wear</option>
                                        <option value="Lower">Lower</option>
                                        <option value="Head">Head wear</option>
                                        <option value="Gifting">Gifting Item</option>
                                        <option value="Personalized">Personalized</option>
                                        <option value="Professional">Professional</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label>Sizes</label>
                                <div class="checkbox d-flex">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <label> XS </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <label> S </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <label> M </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <label> L </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <label> XL </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <label> XXL </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 mt-3">
                                <label for="customRange1" class="form-label">Price Range</label><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <span id="selectedRange1">₹ 0</span>
                                    </div>
                                    <div class="col-md-6 text-end">
                                        <span id="selectedRange1">₹ 4500</span>
                                    </div>
                                </div>
                                <input type="range" class="form-range " id="customRange1" min="0"
                                    max="4500" value="100" oninput="rangeValue1.innerText = this.value">
                                <div class="d-flex">
                                    <span>₹&nbsp;</span>
                                    <p id="rangeValue1">100</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 mt-3">
                                <label for="" class="form-label">Gender</label>
                                <div class="d-flex">
                                    <div class="form-check">
                                        <input class="form-check-input " type="radio" name="gender">
                                        <label class="form-check-label" for="" style="margin-right: 18px;">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input " type="radio" name="gender">
                                        <label class="form-check-label" for="" style="margin-right: 18px;">
                                            Female
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input " type="radio" name="gender">
                                        <label class="form-check-label" for="">
                                            Other
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 mt-4">
                                <div class="row">
                                    <div class="col-6 col-md-6">
                                        <button type="button" class="btn btn-outline-primary w-100 p-2 ">Apply</button>
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <button type="button" class="btn btn-outline-primary w-100 p-2 close"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo ">Clear</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
       
            <div class="accordion" id="accordionExample">
                <div class="accordion-item" style="border: none;">
                    <h2 class="accordion-header">
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="padding: 0.5rem 1rem 1rem 1rem">

                            <div class="filteroptionsModal active" style="background: transparent;">

                                <div class="row justify-content-end pt-1 pb-1 px-3 close" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne">
                                    <div class="col-1 mr-2 pt-1">
                                        <span class="float-right">
                                            <i class="fa-solid fa-xmark" style="font-size: 1.3rem"></i>
                                        </span>
                                    </div>
                                </div>

                                <div style="overflow-x: hidden;">
                                    <div class="row justify-content-end pt-1 pb-1 px-3"
                                        style="background: rgb(255, 255, 255); border-bottom: 1px solid rgb(242, 242, 242);">
                                        <div class="col pt-1">
                                            <span class="ml-2 dark-text">A to Z</span>
                                        </div>
                                        <div class="col-1 mr-2 pt-1">
                                            <label>
                                                <input type="radio" name="sort" rel="A to Z" value="A2Z">
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row justify-content-end pt-1 pb-1 px-3"
                                        style="background: rgb(255, 255, 255); border-bottom: 1px solid rgb(242, 242, 242);">
                                        <div class="col pt-1"><span class="ml-2 dark-text">Price-High to Low</span>
                                        </div>
                                        <div class="col-1 mr-2 pt-1"><label><input type="radio" name="sort"
                                                    rel="Price-High to Low" value="PRICE_H2L"> <span></span></label>
                                        </div>
                                    </div>

                                    <div class="row justify-content-end pt-1 pb-1 px-3"
                                        style="background: rgb(255, 255, 255); border-bottom: 1px solid rgb(242, 242, 242);">
                                        <div class="col pt-1"><span class="ml-2 dark-text">Price-Low to High</span>
                                        </div>
                                        <div class="col-1 mr-2 pt-1"><label><input type="radio" name="sort"
                                                    rel="Price-Low to High" value="PRICE_L2H"> <span></span></label>
                                        </div>
                                    </div>
                                    <div class="row justify-content-end pt-1 pb-1 px-3"
                                        style="background: rgb(255, 255, 255); border-bottom: 1px solid rgb(242, 242, 242);">
                                        <div class="col pt-1"><span class="ml-2 dark-text">Newest</span></div>
                                        <div class="col-1 mr-2 pt-1"><label><input type="radio" name="sort"
                                                    rel="Newest" value="LATEST"> <span></span></label></div>
                                    </div>
                                    <div class="row justify-content-end pt-1 pb-1 px-3"
                                        style="background: rgb(255, 255, 255);">
                                        <div class="col pt-1"><span class="ml-2 dark-text">Popularity</span></div>
                                        <div class="col-1 mr-2 pt-1"><label><input type="radio" name="sort"
                                                    rel="Popularity" value="POPULARITY"> <span></span></label></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
@section('script')
    <script>
        $(document).ready(function() {

            $('#sort').on('click', function() {
                $('.blc').css("filter", " blur(1.5px)");
            });
            $('#filter').on('click', function() {
                $('.blc').css("filter", " blur(1.5px)");
            });
            $('.close').on('click', function() {
                $('.blc').css('filter', 'none');
            });

            // sortingggg
            $('#sorting').on('change', function() {
                var data = $(this).val();

                $.ajax({
                    type: "GET",
                    url: "{{ route('sorting') }}",
                    data: {
                        'data': data
                    },
                    success: function(res) {
                        var productData = res.products;
                        var html = '';
                        if (productData.length > 0) {
                            for (var i = 0; i < productData.length; i++) {

                                var id = productData[i].id;
                                var productUrl = 'single-product/' + id;

                                html += `<div class="col-6 col-md-4 col-lg-3 mt-4">
                                <a href="{{ url('${productUrl}') }}">
                                    <img src="product_image/${ productData[i].product_image }" class="img-fluid"
                                        alt="${ productData[i].product_name }">
                                </a>
                                <div class="row justify-content-center align-items-center g-2 mt-1 pb-1"
                                    style="border-bottom: 1px solid rgba(128, 128, 128, 0.723);">
                                    <div class="col-6">
                                        <h5 class="item-font float-start"><strong>${ productData[i].product_name }</strong></h5>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="item-font float-end"><strong>₹ ${ productData[i].product_price }</strong></h5>
                                    </div>
                                </div>
                                <div class="row pt-1">
                                    <div class="col-md-6">
                                        <span class="mb-0" style="font-weight: 400" id="rs">
                                            ${ productData[i].product_type }
                                        </span>
                                    </div>
                                </div>
                            </div>`;
                            }
                            $('#pro').html(html);
                        } else {
                            alert('dgSrg');
                        }
                    }
                });
            });


            // filteringgg
            $('#filterApply').on('click', function() {
                var Ptype = $('#product_type').val();
                var Psize = $('.sizes').val();
                var Prange = $('#price_range').val();
                var Pgender = $('#gender').val();

                console.log(Ptype + ',' + Psize + ',' + Prange + ',' + Pgender);
            });

        });
    </script>
@endsection
