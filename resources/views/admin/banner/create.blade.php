@extends('admin.layout.index')

@section('preload-js')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#basic-conf',
            width: 600,
            height: 300,
            plugins: [
                'advlist autolink link image lists charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                'table emoticons template paste help'
            ],
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | link image | print preview media fullpage | ' +
                'forecolor backcolor emoticons | help',
            menu: {
                favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
            },
            menubar: 'favs file edit view insert format tools table help',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });
    </script>
@endsection

@section('body')
    <div class="row" style="padding-top: 15px;">
        <div class="col-lg-10 col-md-10">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add Slider</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('banners.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="bannerName">Slider Name</label>
                            <input type="text" class="form-control" id="bannerName" name="bannerName" placeholder="Slider Name">
                        </div>
                        <div class="form-group">
                            <div class="pull-right">
                                <label for="image">File input</label>
                                <input type="file" name="image" id="image">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <input type="submit" class="btn btn-primary">
                        <a href='#' class="btn btn-warning">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

{{--{{ route('banner.index') }}--}}
