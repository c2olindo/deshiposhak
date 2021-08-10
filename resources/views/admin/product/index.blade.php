@extends('admin.layout.index')

@section('body')
    <div class="row" style="padding-top: 15px">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Products</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap" style="table-layout: fixed">
                        <thead>
                        <tr>
                            <th class="col-md-2">Product Name</th>
                            <th class="col-md-2">Product Slug</th>
                            <th class="col-md-4">Description</th>
                            <th class="col-md-2">Image</th>
                            <th class="col-md-2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($product as $item)
                            <tr>
                                <td class="col-md-3">{{ $item['product_name'] }} </td>
                                <td class="col-md-3">{{ $item['slug'] }} </td>
                                <td class="col-md-5" style="word-break:break-all;">{!! htmlspecialchars_decode($item['description']) !!}</td>
                                <td class="col-md-2"><img style="height: 80px; width: 80px;" src="{{ asset('/uploads/products/'.$item['image']) }}" alt=""></td>
                                <td class="col-md-2">
                                    <a class="btn btn-primary" style="width:100%; margin-bottom: 5px;" href="{{ route('products.edit', $item['id']) }}">Edit Product</a>
                                    <br>




                                    <a class="btn btn-danger" style="width:100%; margin-bottom: 5px;" href="admin/product/delete/{{$item['id']}}">Delete Product</a>
                                    <br>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

    </div>
@endsection
