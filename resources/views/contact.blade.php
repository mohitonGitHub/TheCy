@extends('layout.main')
@section('title')
    Contact us
@endsection
@section('style')
    <style>
        #all-item {
            padding: 12rem 8rem 8rem 8rem;
            background-color: #e77f0043;
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

        input {
            height: 55px;
        }

        select {
            height: 55px;
        }

        .form-control {
            border: none;
            border-bottom: 1px solid #d9d9d9;
            /* padding-left: 0; */
            /* padding-right: 0; */
            border-radius: 0;
        }

        form {
            padding: 0rem 3rem;
        }

        .form-control:active,
        .form-control:focus {
            outline: none;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-color: #000;
        }

        .btn {
            height: 55px;
            background: #000;
            color: #ffffff !important;
            border: #000;
        }

        .btn:hover {
            background-color: #202020 !important;
            border: #000;
            color: #ffffff !important;
        }


        @media (max-width: 991.98px) {}

        .submitting {
            float: left;
            width: 100%;
            padding: 10px 0;
            display: none;
            font-weight: bold;
            font-size: 12px;
            color: #000;
        }

        @media (max-width: 1024px) {
            #all-item {
                padding: 10rem 5rem 5rem 5rem;
                background-color: #00a6e743;
            }

            .page-heading {
                font-size: 4rem;
                color: #00a2e7;
            }

            form {
                padding: 0rem 0rem;
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
    </style>
@endsection
@section('content')
    <div class="container my-5" id="all-item">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12">
                <div class="text-center text-white">
                    <h1 class="mb-5 page-heading">Conatct Us</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h1 class="text-center product-headline text-focus-in">Contact Us</h1>
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="row align-items-center">
                    <div class="col-lg-12 mb-5 mb-lg-0">
                        <form class="mb-5" action="{{ url('contact_store') }}" method="POST" id="contactForm"
                            name="contactForm">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Name/Business Name" value="{{ old('name') }}">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="eamil" class="form-control" name="email" id="email"
                                        placeholder="Email/Business Mail" value="{{ old('email') }}">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="number" class="form-control" name="number" id="number"
                                        placeholder="Phone Number" value="{{ old('number') }}">
                                    @error('number')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="d-flex">
                                        <label for="" class="form-label">Can We Call??</label>
                                        <div class="form-check" style="margin-right: 30px; margin-left: 20px;">
                                            <input class="form-check-input" type="radio" name="canwecall" value="yes"
                                                @if (old('canwecall') == 'yes') checked @endif>
                                            <label class="form-check-label ml-0" for="">Yes</label>
                                        </div>
                                        <div class="form-check" style="margin-right: 35px;">
                                            <input class="form-check-input" type="radio" name="canwecall" value="no"
                                                @if (old('canwecall') == 'no') checked @endif>
                                            <label class="form-check-label ml-0" for="">No</label>
                                        </div>
                                    </div>
                                    @error('canwecall')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 form-group">
                                <textarea class="form-control" name="inquiry" id="message" cols="30" rows="5" placeholder="Inquiry for??">{{ old('inquiry') }}</textarea>
                                @error('inquiry')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="row mt-3 text-center">
                                <div class="col-md-12">
                                    <button type="submit" class="btn rounded-0 py-2 px-4">Send Message </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('script')
@endsection
