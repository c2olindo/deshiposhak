@extends('admin.layout.index')

@section('body')
    <div class="row" style="padding-top: 15px">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Sliders</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap" style="table-layout: fixed">
                        <thead>
                        <tr>
                            <th class="col-md-2">Slider Name</th>
                            <th class="col-md-2">Image</th>
                            <th class="col-md-2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($banner as $item)
                            <tr>
                                <td class="col-md-3">{{ $item['banner_name'] }} </td>
                                <td class="col-md-2"><img style="height: 80px; width: 80px;" src="{{ asset('/uploads/banners/'.$item['image']) }}" alt=""></td>
                                <td class="col-md-2">
                                    <a class="btn btn-primary" style="width:100%; margin-bottom: 5px;" href="{{ route('banners.edit', $item['id']) }}">Edit Slider</a>
                                    <br>

                                    <a class="btn btn-danger" style="width:100%; margin-bottom: 5px;" href="admin/banner/delete/{{$item['id']}}">Delete Slider</a>
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
