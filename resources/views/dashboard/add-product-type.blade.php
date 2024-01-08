@extends('dashboard.layout.main')
@section('title')
    Dashboard
@endsection
@section('style')
    <style>
        #submitbutton {
            margin: auto;
        }
        form{
            width: 50%;
        }
        .container{
            display:flex;
            justify-content: center;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Product Type</h1>
            <a href="{{ url('dashboard/product-type') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fa-solid fa-arrow-left"></i>
                Back
            </a>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Add Products Type</h6>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <form action="{{ url('add-product-type') }}" method="POST" enctype="multipart/form-data">
                                @csrf                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Add Type</label>
                                                <input type="text" class="form-control" name="product_type">
                                            </div>
                                            @error('product_type')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6" id="submitbutton">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="{{ url('dashboard/product-type') }}" class="btn btn-outline-primary">Back</a>
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
