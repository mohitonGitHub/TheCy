@extends('dashboard.layout.main')
@section('title')
    Dashboard
@endsection
@section('style')
    <style>
        #submitbutton {
            margin: auto;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Product</h1>
            <a href="{{ url('/dashboard/product') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fa-solid fa-arrow-left"></i>
                Back
            </a>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Add Products</h6>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid" style="width: 95%;">
                            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data"> 
                                @csrf
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Name</label>
                                            <input type="text" class="form-control" name="product_name" id=""
                                                value="{{ old('product_name') }}">
                                            @error('product_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Product Sub Name</label>
                                            <input type="text" class="form-control" name="product_sub_name"
                                                id="" value="{{ old('product_sub_name') }}">
                                            @error('product_sub_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Type</label>
                                            <select class="form-control" name="product_type">
                                                <option disabled selected>Choose Product Type</option>
                                                @foreach ($Ptype as $item)
                                                    <option value="{{ $item->id }}">{{ $item->product_type }}</option>
                                                @endforeach
                                            </select>

                                            @error('product_type')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="" class="form-label">Gender</label>
                                        <div class="mb-3 d-flex">
                                            <div class="form-check mr-3">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    value="M">
                                                <label class="form-check-label ml-0" for="">Male</label>
                                            </div>
                                            <div class="form-check mr-3">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    value="F">
                                                <label class="form-check-label ml-0" for="">Female</label>
                                            </div>
                                            <div class="form-check mr-3">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    value="U">
                                                <label class="form-check-label ml-0" for="">Unisex</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Choose file</label>
                                            <input type="file" id="product_img" class="form-control" name="product_image[]"
                                                id="" multiple>                                     
                                            @error('product_image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Product Details</label>
                                                <textarea class="form-control" name="product_details" id="" rows="3">{{ old('product_details') }}</textarea>
                                                @error('product_details')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2" id="submitbutton">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="{{ url('/dashboard/product') }}"
                                            class="btn btn-outline-primary">Back</a>
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
    <script src="https://cdn.tiny.cloud/1/biez8pqf9eol0n52zy326kj376zecyc60o2ny41x2psx9y4b/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [{
                    value: 'First.Name',
                    title: 'First Name'
                },
                {
                    value: 'Email',
                    title: 'Email'
                },
            ],
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject(
                "See docs to implement AI Assistant")),
        });
    </script>
@endsection
