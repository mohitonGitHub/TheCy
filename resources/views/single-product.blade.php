@extends('layout.main')
@section('title')
    Single Products
@endsection
@section('style')
    <style>
        .sub-heading {
            font-size: 20px;
            font-weight: 600;
        }

        #qty {
            padding: 0rem 0.5rem;
            font-size: 18px;
            border-top: none;
            border-right: none;
            border-left: none;
            border-bottom: 1px solid rgb(180, 180, 180) !important;
        }

        #qty:focus {
            border-bottom: 1px solid rgb(0, 0, 0) !important;
        }

        #qty:focus-visible {
            outline: none;
        }

        .colour {
            border: none;
            border-radius: 25%;
            margin-right: 5px;
        }

        #heading {
            margin: 0rem 0rem 1.2rem 0rem;
        }

        @media (max-width: 786px) {
            #heading {
                margin: 0rem 0rem 1.2rem 0rem;
            }
        }
    </style>
@endsection
@section('content')
    <div class="home1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12">
                    <div class="text-center text-white">
                        <h1 class="mb-5 page-heading">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita,
                            rem!"
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h6 id="heading">all-item\{{ $data->product_name }}</h6>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-6 text-center">
                @php
                    $cov = json_decode($data->product_image);
                    $str = implode(' ', $cov);
                    // dd($str);
                @endphp
                <img src="../product_image/{{ $str }}" alt="{{ $str }}" class="img-fluid">
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <div>
                    <h1 class="" style="font-size: 4rem; font-weight: 600;">{{ $data->product_name }}</h1>
                    <h2 class="">{{ $data->product_sub_name }}</h2>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <span class="sub-heading"> {{ $data->type->product_type }} </span>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-12">

                        </div>
                        <div class="col-md-12">

                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 3rem;">
                    <div class="col-md-10" style="margin-left: 50px;">
                        {{-- <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Product Description
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>{{ $data->product_desc }}</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Product Details
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>{{ $data->product_details }}</strong>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>

                <div class="row my-3">
                    {!! html_entity_decode($data->product_details) !!}
                    <p style="font-weight: 500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel rerum eos animi
                        ducimus possimus
                        delectus, quo totam fugit deleniti saepe harum voluptatibus sequi quam, consequatur libero
                        voluptatem voluptatum, quidem nam magnam id et dolor qui suscipit. Ad tempora ipsa animi laborum,
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container my-5">
        <div class="product-container">
            <div class="product-image">
                <img src="product-image.jpg" alt="Product Image">
            </div>
            <div class="product-details">
                <h2>Product Name</h2>
                <p>Product Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p><strong>Price: <span id="product-price">$49.99</span></strong></p>
                <div class="row">
                    <div class="col-md-2">
                        <label for="product-color">Select Color:</label>
                        <select id="product-color" class="form-control">
                            <option value="red">Red</option>
                            <option value="blue">Blue</option>
                            <option value="green">Green</option>
                        </select>
                    </div>
                    <div class="col-md-2 mt-auto">
                        <button class="btn btn-primary" id="buy-button">Buy Now</button>
                    </div>
                    <div class="col-md-8">

                    </div>
                </div>

            </div>
        </div>
    </div> --}}
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            let productPrice = $('#product-price');
            let productImage = $('.product-image img');
            let colorSelect = $('#product-color');

            let colorOptions = {
                red: {
                    price: '$49.99',
                    image: 'red-product-image.jpg',
                },
                blue: {
                    price: '$54.99',
                    image: 'blue-product-image.jpg',
                },
                green: {
                    price: '$59.99',
                    image: 'green-product-image.jpg',
                },
            };

            colorSelect.change(function() {
                const selectedColor = colorSelect.val();
                productPrice.text(colorOptions[selectedColor].price);
                productImage.attr('src', colorOptions[selectedColor].image);
            });
        });
    </script>
@endsection
