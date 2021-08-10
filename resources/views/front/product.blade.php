@extends('front.master')

@section('title', 'Shop')

@section('body')
    <div class="container">
        <div class="shop-banner" style="padding-bottom: 30px">
            <img src="{{ asset('images/slides/slider-cat2.jpg') }}" alt="">
        </div>

        <div class="row">
            <div class="main-content col-sm-12">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="product-detail-image style2">
                            <div class="main-image-wapper">
                                <img class="main-image" src="{{ asset('/uploads/products/'.$slug['image']) }}" alt="">
                            </div>
                            {{-- TODO add image carousel if requested --}}
                            {{--<div class="thumbnails owl-carousel nav-center-center nav-style3" data-responsive='{"0":{"items":3},"481":{"items":4},"600":{"items":3},"1000":{"items":4}}' data-autoplay="true" data-loop="true" data-items="4" data-dots="false" data-nav="true" data-margin="20">
                                <a data-url="images/products/4_cate2.png" class="active" href="product-3.html#"><img src="images/products/4_cate2.png" alt=""></a>
                                <a data-url="images/products/4_cate5.png" href="product-3.html#"><img src="images/products/4_cate5.png" alt=""></a>
                                <a data-url="images/products/4_cate4.png" href="product-3.html#"><img src="images/products/4_cate4.png" alt=""></a>
                                <a data-url="images/products/4_cate1.png" href="product-3.html#"><img src="images/products/4_cate1.png" alt=""></a>
                            </div>--}}
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="product-details-right style2" style="padding-bottom: 30px">
                            <h3 class="product-name">{{ $slug['product_name'] }}</h3>
                            <span class="price">
                    <ins>£85.00</ins>
                    <del>£125.00</del>
                </span>
                            <div class="meta">
                                <span>Only 15 left  3</span>
                                <span>Availalbe: <span class="text-primary">In Stock</span></span>
                            </div>
                            <div class="short-descript">
                                {!! htmlspecialchars_decode($slug['description']) !!}
                            </div>

                            <form class="cart-form" enctype="multipart/form-data" method="post">
                                <a class="button button-add-cart"href="product-3.html#">Add to cart</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tab -->

@endsection
