@extends('layout.main')
@section('title')
    About
@endsection
@section('style')
    <style>
        #all-item {
            padding: 12rem 8rem 8rem 8rem;
            background-color: #e77f0043;
        }

        p {
            font-size: 18px;
        }

        .page-heading {
            font-weight: 600;
            color: #e78000;
            font-size: 5rem;
        }

        .product-headline {
            font-weight: 600;
            font-size: 3.8rem;
        }

        .main-title {
            font-size: 44px;
            line-height: 49px;
            margin: 0px 0px 30px;
            text-align: center;
            font-style: normal;
            font-weight: 700;
            color: var(--rn-color-title);
        }

        @media (max-width: 2560px) {}

        @media (max-width: 1024px) {
            #all-item {
                padding: 10rem 5rem 5rem 5rem;
                background-color: #00a6e743;
            }

            .page-heading {
                font-size: 4rem;
                color: #00a2e7;
            }
        }

        @media (max-width: 786px) {
            #all-item {
                padding: 8rem 3rem 3rem 3rem;
                background-color: #00a6e743;
            }

            .page-heading {
                font-size: 3.4rem;
                color: #00a2e7;
            }

            .product-headline {
                font-weight: 600;
                font-size: 3.2rem;
            }
        }

        @media (max-width: 425px) {
            #all-item {
                padding: 6rem 1rem 1rem 1rem;
                background-color: #00dbe743;
            }

            .page-heading {
                font-size: 3.0rem;
                color: #00d4e7;
            }

            .product-headline {
                font-weight: 600;
                font-size: 3rem;
            }
        }

        .text-focus-in {
            animation: text-focus-in 0.7s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
        }

        @keyframes text-focus-in {
            0% {
                filter: blur(5px);
                opacity: 0;
            }

            100% {
                filter: blur(0px);
                opacity: 1;
            }
        }
        .pagination {
            display: none !important;
        }
        .sc-gsFSXq  {
            display: none !important;
        }
    </style>
@endsection
@section('content')
    <div class="container my-5" id="all-item">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12">
                <div class="text-center text-white">
                    <h1 class="mb-5 page-heading">About Us!!</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <h1 class="text-center product-headline my-3 text-focus-in">Something About Us..</h1>
        <div class="row">
            <div class="col-lg-4">
                <img src="https://images.unsplash.com/photo-1617080090911-91409e3496ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2064&q=80"
                    style="width: 100%">
            </div>
            <div class="col-lg-8">
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque maxime iure at laudantium
                    accusamus mollitia aliquid labore autem ipsum accusantium. Dicta perspiciatis odit dolorum dolorem
                    accusamus
                    sequi repellat ab neque ullam! Ut doloribus, ipsam nesciunt debitis rem impedit, molestias eligendi ea
                    blanditiis ab hic minima? Nemo nihil ullam inventore animi tempora debitis libero numquam pariatur,
                    quisquam
                    eligendi. Odit asperiores omnis commodi vel temporibus laboriosam amet, quisquam eaque vero, fugit
                    molestias
                    atque porro quas suscipit eos. Obcaecati aut eos, eveniet earum reiciendis natus doloremque placeat.
                    Minus,
                    suscipit aliquid. Amet tempore hic nobis perspiciatis, non fugiat obcaecati nam consequuntur doloremque
                    aliquam vero.lorem200 Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt vel officia
                    saepe
                    doloribus explicabo velit asperiores, molestias dignissimos sed reiciendis magni quia necessitatibus cum
                    ut
                    ducimus sit eius repellendus quisquam commodi possimus praesentium? Placeat illum quibusdam corporis
                    sapiente dolorum, repudiandae asperiores voluptatum! Quae obcaecati, tenetur neque esse perferendis
                    debitis
                    totam corrupti, non quod exercitationem, nihil asperiores sed dicta unde reprehenderit assumenda
                    necessitatibus
                </p>
            </div>
        </div>
    </div>
    <div class="container my-5">
    
    </div>
@endsection
@section('script')
    
@endsection
