@extends('front.master')

@section('title', 'Shop')

@section('body')
    <div class="main-container shop-with-banner left-slidebar">
        <div class="container">
            <div class="shop-banner" style="padding-bottom:30px">
                <img src="{{ asset('images/slides/slider-cat2.jpg') }}" alt="">
            </div>
            <div class="row">
                <div class="main-content col-sm-8 col-md-9">
                    <ul class="product-list-grid desktop-columns-3 tablet-columns-2 mobile-columns-1 row flex-flow">
                        @foreach($product as $item)
                            <li class="product-item style3 col-sm-6 col-md-4">
                                <div class="product-inner">
                                    <div class="product-thumb has-back-image">
                                        <a href="{{ route('product', $item['slug']) }}"><img src="{{ asset('uploads/products/'.$item['image']) }}" alt=""></a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a href="{{ route('product', $item['slug']) }}">{{ $item['product_name'] }}</a></h3>
                                        </span>
                                        <a href="2category2-leftsidebar.html#" class="button add_to_cart_button">BOOK APPOINTMENT</a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 sidebar">
                    <!-- Product category -->
                    <div class="widget widget_product_categories">
                        <h2 class="widget-title">Categories</h2>
                        <ul class="product-categories">
                            <li><a href="1category2-leftsidebar.html#">Sunglasses</a><span class="count-item">(25)</span></li>
                            <li><a href="1category2-leftsidebar.html#">Watches</a><span class="count-item">(23)</span></li>
                            <li class="current-cat"><a href="1category2-leftsidebar.html#">Jewelry</a><span class="count-item">(9)</span></li>
                            <li><a href="1category2-leftsidebar.html#">Hats, Scraves & Gloves</a><span class="count-item">(12)</span></li>
                            <li><a href="1category2-leftsidebar.html#">Underwear & Socks</a><span class="count-item">(48)</span></li>
                            <li><a href="1category2-leftsidebar.html#">Grooming</a><span class="count-item">(6)</span></li>
                            <li><a href="1category2-leftsidebar.html#">Belts</a><span class="count-item">(18)</span></li>
                        </ul>
                    </div>
                    <!-- ./Product category -->
            </div>
        </div>
    </div>

@endsection
