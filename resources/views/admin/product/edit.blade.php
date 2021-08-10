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
                    <h3 class="card-title">Add Product</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{  route('products.update', $product['id'])  }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="productName">Product Name</label>
                            <input type="text" class="form-control" id="productName" name="productName" value="{{ $product['product_name'] }}">
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <p style="font-size: 12px;">Please use '-' (hyphen) to seperate words and lower cases. For eg: product-name-1</p>
                            <input type="text" class="form-control" id="slug" name="slug" value="{{ $product['slug'] }}">
                        </div>
                        <div class="form-group">
                            <div class="pull-right">
                                <label for="image">File input</label>
                                <p>{{ $product['image'] }}</p>
                                <input type="file" name="image" id="image">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Product Description
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body pad">
                                    <div class="mb-3">
                            <textarea id="basic-conf" class="textarea" name="description" value="{{ $product['description'] }}"
                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-->
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <input type="submit" class="btn btn-primary">
                        <a href='{{ route('products.index') }}' class="btn btn-warning">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
