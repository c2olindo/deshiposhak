@extends('front.master')

@section('title', 'home')
@section('class', 'home')

@section('body')

    {{--<div class="home-slide3 owl-carousel nav-style3 nav-center-center" data-animateout="fadeOut" data-animatein="fadeIn" data-items="1" data-nav="true" data-dots="false" data-loop="true" data-autoplay="true">
        @foreach($banner as $item)
            <img src="{{ asset('uploads/banners/').'/'.$item['image'] }}" alt="">
        @endforeach
    </div>
--}}
    <!--Slider-->
    <div id="my-slider">
        <div class="slide">
            @foreach($banner as $item)
            <img src="{{ asset('/uploads/banners/').'/'.$item['image'] }}" >
            @endforeach
        </div>
        <!--Controlling arrows-->
        <span class="controls" onclick="prevSlide(-1)" id="left-arrow"><i class="fa fa-arrow-left" aria-hidden="true"></i></span>
        <span class="controls" id="right-arrow" onclick="nextSlide(1)"><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
    </div>





    <div class="container">
        @include('front.partials.notice')

        <div class="margin-top-10">
            <div class="row">
                <div class="col-sm-4 margin-top-30">
                    <a class="banner-opacity" href="index3.html#"><img src="{{ asset('images/b/8.jpg') }}" alt=""></a>
                </div>
                <div class="col-sm-4 margin-top-30">
                    <a class="banner-opacity" href="index3.html#"><img src="{{ asset('images/b/9.jpg') }}" alt=""></a>
                </div>
                <div class="col-sm-4 margin-top-30">
                    <a class="banner-opacity" href="index3.html#"><img src="{{ asset('images/b/10.jpg') }}" alt=""></a>
                </div>
            </div>
        </div>

        <div class="margin-top-50">
            <div class="tab-product">
                <ul class="box-tabs nav-tab tab-owl-fade-effect">
                    <li><a data-animated='slideInLeft' data-toggle="tab" href="index3.html#tab-2">New Arrivals</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-container">
                        <div id="tab-1" class="tab-panel active">
                            <ul class="tab-list owl-carousel nav-style7 nav-center-center" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="30" data-responsive='{"0":{"items":1},"600":{"items":2},"1000":{"items":4}}'>
                                <li class="product-item">
                                    <div class="product-inner">
                                        <div class="product-thumb has-back-image">
                                            <a href="index3.html#"><img src="{{ asset('images/products/1.jpg') }}" alt=""></a>
                                            <a class="back-image" href="index3.html#"><img src="{{ asset('images/products/2.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-name"><a href="index3.html#">London Star Sweatshirt</a></h3>
                                            <span class="price">
											<ins>$85.00</ins>
											<del>$95.00</del>
										</span>
                                            <a href="index3.html#" class="button">BOOK APPOINTMENT</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="product-inner">
                                        <div class="product-thumb has-back-image">
                                            <a href="index3.html#"><img src="{{ asset('images/products/2.jpg') }}" alt=""></a>
                                            <a class="back-image" href="index3.html#"><img src="{{ asset('images/products/3.jpg') }}" alt=""></a>

                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-name"><a href="index3.html#">London Star Sweatshirt</a></h3>
                                            <span class="price">
											<ins>$85.00</ins>
											<del>$95.00</del>
										</span>
                                            <a href="index3.html#" class="button">BOOK APPOINTMENT</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="product-inner">
                                        <div class="product-thumb has-back-image">
                                            <a href="index3.html#"><img src="{{ asset('images/products/3.jpg') }}" alt=""></a>
                                            <a class="back-image" href="index3.html#"><img src="{{ asset('images/products/4.jpg') }}" alt=""></a>

                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-name"><a href="index3.html#">London Star Sweatshirt</a></h3>
                                            <span class="price">
											<ins>$85.00</ins>
											<del>$95.00</del>
										</span>
                                            <a href="index3.html#" class="button">BOOK APPOINTMENT</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="product-inner">
                                        <div class="product-thumb has-back-image">
                                            <a href="index3.html#"><img src="{{ asset('images/products/4.jpg') }}" alt=""></a>
                                            <a class="back-image" href="index3.html#"><img src="{{ asset('images/products/5.jpg') }}" alt=""></a>

                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-name"><a href="index3.html#">London Star Sweatshirt</a></h3>
                                            <span class="price">
											<ins>$85.00</ins>
											<del>$95.00</del>
										</span>
                                            <a href="index3.html#" class="button">BOOK APPOINTMENT</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="tab-2" class="tab-panel">
                            <ul class="tab-list owl-carousel nav-style7 nav-center-center" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="30" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                <li class="product-item">
                                    <div class="product-inner">
                                        <div class="product-thumb has-back-image">
                                            <a href="index3.html#"><img src="{{ asset('images/products/5.jpg') }}" alt=""></a>
                                            <a class="back-image" href="index3.html#"><img src="{{ asset('images/products/6.jpg') }}" alt=""></a>

                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-name"><a href="index3.html#">London Star Sweatshirt</a></h3>
                                            <span class="price">
											<ins>$85.00</ins>
											<del>$95.00</del>
										</span>
                                            <a href="index3.html#" class="button">BOOK APPOINTMENT</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="product-inner">
                                        <div class="product-thumb has-back-image">
                                            <a href="index3.html#"><img src="{{ asset('images/products/6.jpg') }}" alt=""></a>
                                            <a class="back-image" href="index3.html#"><img src="{{ asset('images/products/7.jpg') }}" alt=""></a>

                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-name"><a href="index3.html#">London Star Sweatshirt</a></h3>
                                            <span class="price">
											<ins>$85.00</ins>
											<del>$95.00</del>
										</span>
                                            <a href="index3.html#" class="button">BOOK APPOINTMENT</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="product-inner">
                                        <div class="product-thumb has-back-image">
                                            <a href="index3.html#"><img src="{{ asset('images/products/7.jpg') }}" alt=""></a>
                                            <a class="back-image" href="index3.html#"><img src="{{ asset('images/products/8.jpg') }}" alt=""></a>

                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-name"><a href="index3.html#">London Star Sweatshirt</a></h3>
                                            <span class="price">
											<ins>$85.00</ins>
											<del>$95.00</del>
										</span>
                                            <a href="index3.html#" class="button">BOOK APPOINTMENT</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="product-inner">
                                        <div class="product-thumb has-back-image">
                                            <a href="index3.html#"><img src="{{ asset('images/products/8.jpg') }}" alt=""></a>
                                            <a class="back-image" href="index3.html#"><img src="{{ asset('images/products/9.jpg') }}" alt=""></a>

                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-name"><a href="index3.html#">London Star Sweatshirt</a></h3>
                                            <span class="price">
											<ins>$85.00</ins>
											<del>$95.00</del>
										</span>
                                            <a href="index3.html#" class="button">BOOK APPOINTMENT</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="margin-top-60 our-category">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <div class="section-title text-center margin-top-40 margin-bottom-30">
                        <h3>OUR CATEGORIES</h3>
                        <span class="sub-title">Find all items you want by select our featured categories</span>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-7">
                    <ul class="category-menu category-carousel pull-left owl-carousel nav-style7 nav-center-center" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="30" data-responsive='{"0":{"items":1},"600":{"items":4},"1000":{"items":4}}'>
                        <li>
                            <a href="index3.html#">
                                <img src="{{ asset('images/categorys/1.png') }}" alt="">
                                Clothing
                            </a>
                        </li>
                        <li>
                            <a href="index3.html#">
                                <img src="{{ asset('images/categorys/2.png') }}" alt="">
                                Sneakers
                            </a>
                        </li>
                        <li>
                            <a href="index3.html#">
                                <img src="{{ asset('images/categorys/3.png') }}" alt="">
                                Accessories
                            </a>
                        </li>
                        <li>
                            <a href="index3.html#">
                                <img src="{{ asset('images/categorys/4.png') }}" alt="">
                                Handbags
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <script>
        var slides = document.querySelectorAll(".slide");
        var index = 0;

        function prevSlide(n){
            index+=n;
            console.log("prevSlide is called");
            changeSlide();
        }

        function nextSlide(n){
            index+=n;
            changeSlide();
        }
        changeSlide();

        function changeSlide(){
            if(index>slides.length-1)
                index=0;

            if(index<0)
                index=slides.length-1;

            for(let i=0;i<slides.length;i++){
                slides[i].style.display = "none";

            }

            slides[index].style.display = "block";
        }
    </script>

@endsection
