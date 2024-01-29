@extends('layout.main')
@section('title')
    Blog
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
            color: #e78000;
            text-shadow: 8px 6px 4px rgba(0, 0, 0, 0.112);
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
                font-size: 2.7rem;
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

        .sc-gsFSXq {
            display: none !important;
        }
    </style>
@endsection
@section('content')
    <div class="container my-5" id="all-item">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12">
                <div class="text-center text-white">
                    <h1 class="mb-5 page-heading">Blog</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <h1 class="text-center product-headline my-3 text-focus-in">Under construction.<br> Stay tuned!</h1>
        <div class="row">
          
        </div>
    </div>
    <div class="container my-5">

    </div>
@endsection
@section('script')
@endsection
