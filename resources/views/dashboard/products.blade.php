@extends('dashboard.layout.main')
@section('title')
    Dashboard
@endsection
@section('style')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
@endsection
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Product</h1>
            <a href="{{ url('/dashboard/add-product') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fa-solid fa-plus"></i>
                Add-Product
            </a>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">All Products</h6>
                    </div>
                    <div class="container">
                        @if (session('success'))
                            <div class="w-20 alert alert-success text-center mt-2">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('fail'))
                            <div class="w-20 alert alert-danger text-center mt-2">
                                {{ session('fail') }}
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <table id="example" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Sub Name</th>
                                    <th>Type</th>
                                    <th>Gender</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $item)
                                    @php
                                        $details = $item->product_details;
                                        // echo $details;
                                    @endphp
                                    <tr>
                                        <td>{{ $item->product_name }}</td>
                                        <td>{{ $item->product_sub_name }}</td>
                                        <td>{{ $item->product_type }}</td>
                                        <td>
                                            @if ($item->gender == 'M')
                                                Male
                                            @endif
                                            @if ($item->gender == 'F')
                                                Female
                                            @endif
                                            @if ($item->gender == 'U')
                                                Unisex
                                            @endif
                                        </td>
                                        <td>

                                            <img src="../product_image/{{ $item->product_image }}" alt=""
                                                style="width: 50px;">
                                        </td>
                                        <td>
                                            <form method="POST" action="{{ route('product.destroy', $item->id) }}">
                                                <a href="{{ route('product.edit', $item->id) }}"
                                                    class="btn btn-warning">Update</a>
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger" id="delete">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#delete').on('submit', function() {
                alert('are you sure you want to delete?');
            });
        });

        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    // 'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
@endsection
