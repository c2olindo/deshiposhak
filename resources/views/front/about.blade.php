@extends('front.master')

@section('title', 'About Us')
@section('body')

    <div class="container">
        <div class="shop-banner" style="padding-bottom:30px">
            <img src="{{ asset('images/slides/slider-cat2.jpg') }}" alt="">
        </div>

        <div class="section-about ">
            <div class="container">
                <div class="section-title text-center style7 margin-top-60">
                    <span class="sub-title">Welcome to Deshi Poshak - Beautiful Creative Online Clothing Store!</span>
                    <h3>Deshi Poshak</h3>
                </div>

                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <blockquote class="style2 margin-bottom-10">Praesent accumsan, nunc eget semper cursus, tellus nisl sagittis massa, vel egestas erat odio sed sapien. In malesuada ipsum ut elit vestim pretium. In a luctus tellus. Fusce id euismod justo. Vivamus ullamcorper, lacus at congue feugiat, metus justo fermentum mauris Etiam rhoncus enim non nulla posuere bibendum et non lacus. Aliquam rhoncus vel metus vel elementum.</blockquote>
                    </div>
                </div>
                <div class="text-center GreatVibes">
                    Johnathan Doe
                </div>
            </div>
        </div>

        <div style="margin-top: 50px; margin-bottom: 50px"></div>
        <div style="margin-top: 50px; margin-bottom: 50px"></div>
    </div>

@endsection
