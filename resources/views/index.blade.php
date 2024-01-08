@extends('layout.main')
@section('title')
    Home
@endsection
@section('style')
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <style>
        .home1 {
            background-image: url("https://images.unsplash.com/photo-1640747624372-5968cbcf9a76?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1935&q=80");
            background-repeat: round;
            background-size: cover;
            padding: 12rem 12rem;
        }

        .page-heading {
            font-weight: 800;
            font-size: 3.4rem;
        }

        #products .col-12 {
            margin: 3rem 0rem 0rem 0rem;
        }

        #products {
            justify-content: center;
            align-items: center;
        }

        .product-headline {
            font-weight: 700;
            font-size: 3.8rem;
        }

        .item-font {
            font-size: 20px;
        }

        #OurServices {
            font-size: 6rem;
        }

        .fa-star {
            color: #ff1b1b;
            font-size: 3.5rem;
        }

        .circle-icon {
            font-size: 1.2rem;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 2px solid #000000;
            transition: 0.2s ease-in-out;
        }

        .circle-icon:hover {
            color: #ff1b1b;
            border: 2px solid #ff1b1b;
        }

        .services {
            border-right: 4px solid black;
            text-align: center;
        }

        .services p {
            font-weight: 500;
        }

        .services h3 {
            font-weight: 600;
        }

        @media (max-width: 786px) {
            .product-headline {
                font-weight: 600;
                font-size: 3.2rem;
            }

            #OurServices {
                font-size: 6rem;
            }
        }

        @media(max-width: 320px) {
            .item-font {
                font-size: 17px;
            }

            #rs {
                font-size: 16px;
            }

            #OurServices {
                font-size: 4.2rem;
            }
        }

        @media(max-width: 1024px) {
            .product {
                margin-top: 2rem;
            }
        }

        @media (max-width: 425px) {
            .product-headline {
                font-weight: 600;
                font-size: 3rem;
            }

            .product {
                margin-top: 1.6rem;
            }

            .page-heading {
                font-size: 1.8rem;
            }

            .home1 {
                padding: 6rem 1rem 2rem 1rem;
            }
        }

        .text-focus-in {
            animation: text-focus-in 1s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
        }

        @keyframes text-focus-in {
            0% {
                filter: blur(12px);
                opacity: 0;
            }

            100% {
                filter: blur(0px);
                opacity: 1;
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

    {{-- some of informations --}}
    <section id="about" class="about section-padding mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12 mt-md-5">
                    <div class="about-img">
                        <img src="https://images.unsplash.com/photo-1617080090911-91409e3496ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2064&q=80"
                            alt="" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                        <h2>
                            We Provide the Best Quality <br />
                            Services Ever
                        </h2>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam,
                            labore reiciendis. Assumenda eos quod animi! Soluta nesciunt
                            inventore dolores excepturi provident, culpa beatae tempora,
                            explicabo corporis quibusdam corrupti. Autem, quaerat. Assumenda
                            quo aliquam vel, nostrum explicabo ipsum dolor, ipsa perferendis
                            porro doloribus obcaecati placeat natus iste odio est non earum?
                        </p>
                        <a href="#" class="btn btn-info">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="" class="about section-padding mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                        <h2>
                            We Provide the Best Quality <br />
                            Services Ever
                        </h2>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam,
                            labore reiciendis. Assumenda eos quod animi! Soluta nesciunt
                            inventore dolores excepturi provident, culpa beatae tempora,
                            explicabo corporis quibusdam corrupti. Autem, quaerat. Assumenda
                            quo aliquam vel, nostrum explicabo ipsum dolor, ipsa perferendis
                            porro doloribus obcaecati placeat natus iste odio est non earum?
                        </p>
                        <a href="#" class="btn btn-info">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 mt-md-5">
                    <div class="about-img">
                        <img src="https://images.unsplash.com/photo-1617080090911-91409e3496ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2064&q=80"
                            alt="" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </section>


    


    {{-- products --}}
    <h1 class="text-center product-headline text-focus-in">Products</h1>
    {{-- <div class="container d-flex" id="products">
        <div class="row">
            <div class="col-6 col-md-4 col-lg-4 col-xl-3 product">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1633966887768-64f9a867bdba?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2003&q=80"
                        class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Green Tshirt</h5>
                        <p class="card-text">$299</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-4 col-xl-3 product">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1633966887768-64f9a867bdba?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2003&q=80"
                        class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Green Tshirt</h5>
                        <p class="card-text">$299</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-4 col-xl-3 product">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1633966887768-64f9a867bdba?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2003&q=80"
                        class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Green Tshirt</h5>
                        <p class="card-text">$299</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-4 col-xl-3 product">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1633966887768-64f9a867bdba?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2003&q=80"
                        class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Green Tshirt</h5>
                        <p class="card-text">$299</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container d-flex my-5">
        <div class="row">
            @foreach ($product as $item)
                <div class="col-6 col-md-4 col-lg-3 mt-4">
                    <a href="">
                        <img src="product_image/{{ $item->product_image }}" class="img-fluid"
                            alt="{{ $item->product_name }}">
                    </a>
                    <div class="row justify-content-center align-items-center g-2 mt-1 pb-1"
                        style="border-bottom: 1px solid rgba(128, 128, 128, 0.723);">
                        <div class="col-6">
                            <h5 class="item-font float-start"><strong>{{ $item->product_name }}</strong></h5>
                        </div>
                        <div class="col-6">
                            <h5 class="item-font float-end"><strong>₹ {{ $item->product_price }}</strong></h5>
                        </div>
                    </div>
                    <div class="row pt-1">
                        <div class="col-md-6">
                            <span class="mb-0" style="font-weight: 400" id="rs">{{ $item->product_type }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-lg-12 col-sm-12 text-center">
                <h1 id="OurServices"> <strong>Our <br> Services</strong></h1>
                <p style="color: #3e3b3b;">We offer high-quality, cost-effective products that suit your brand
                    identity.</p>
            </div>
            <div class="col-12 col-lg-12 col-sm-12">
                <div class="row">
                    <div class="col-12 col-lg-4 mt-4 services">
                        <i class="fa-regular fa-star"></i><br><br>
                        <h3>Product Quality</h3>
                        <br>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In corporis sequi atque.</p>
                        {{-- <div class="circle-icon">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div> --}}
                    </div>
                    <div class="col-12 col-lg-4 mt-4 services">
                        <i class="fa-regular fa-star"></i><br><br>
                        <h3>Product Quality</h3>
                        <br>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In corporis sequi atque.</p>
                        {{-- <div class="circle-icon">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div> --}}
                    </div>
                    <div class="col-12 col-lg-4 mt-4" style="text-align: center">
                        <i class="fa-regular fa-star"></i><br><br>
                        <h3 style="font-weight: 600;">Product Quality</h3>
                        <br>
                        <p style="font-weight: 500;">Lorem ipsum dolor sit amet consectetur adipisicing elit. In corporis
                            sequi atque.</p>
                        {{-- <div class="circle-icon">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- testimonials --}}
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            var screenWidth = $(window).width();
            if (screenWidth == 768) {
                $(".services").css("border-right", "none");
                $(".services").css("border-bottom", "3px solid black");
            }
            if (screenWidth == 425) {
                $(".services").css("border-right", "none");
                $(".services").css("border-bottom", "3px solid black");
            }
            if (screenWidth == 375) {
                $(".services").css("border-right", "none");
                $(".services").css("border-bottom", "3px solid black");
            }
            if (screenWidth == 320) {
                $(".services").css("border-right", "none");
                $(".services").css("border-bottom", "3px solid black");
            }
        });
    </script>
@endsection
