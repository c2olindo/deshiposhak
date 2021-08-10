@extends('front.master')
@section('title', 'Book An Appointment')
@section('body')
    <div class="container">
        <div class="shop-banner" style="padding-bottom:30px">
            <img src="{{ asset('images/slides/slider-cat2.jpg') }}" alt="">
        </div>
        <div class="row">
            <div class="col-sm-6">

                <div class="kt-contact-form margin-top-60">
                    <div id="message-box-conact"></div>
                    <h3 class="title">REACH US FOR AN APPOINTMENT</h3>
                    <p>
                        <input id="name" type="text" placeholder="Your Name">
                    </p>
                    <p>
                        <input id="email" type="text" placeholder="Your Email">
                    </p>
                    <p>
                        <input id="phone" type="text" placeholder="Your Phone Number">
                    </p>
                    <p>
                        <textarea id="content" placeholder="Your message, if you have any!"></textarea>
                    </p>
                    <button id='btn-send-contact' class="button">SEND REQUEST</button>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="margin-top-60">
                    <img src="{{ asset('images/b/46.jpg') }}" alt="">
                    <h6 class="margin-top-20">GIVE US A CALL TO BOOK AN APPOINTMENT</h6>
                    <p class="roboto">We strongly encourage you to book an appointment before you come. No service without appointment and mask.</p>
                    <p style="font-size: 18px; color: #222; font-weight: bold;"><i class="fa fa-phone"></i> (+800) 6868 2268</p>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-top: 50px; margin-bottom: 50px"></div>
    <div style="margin-top: 50px; margin-bottom: 50px"></div>
@endsection
