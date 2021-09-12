@extends('front.master')
@section('title', 'Book An Appointment')
@section('body')
    <!-- Alert User -->
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif

    <div class="container">
        <div class="shop-banner" style="padding-bottom:30px">
            <img src="{{ asset('images/slides/slider-cat2.jpg') }}" alt="">
        </div>
        <div class="row">
            <div class="col-sm-6">
                <form action="" method="post" action="{{ route('contact.save') }}">
                    @csrf
                    <div class="kt-contact-form margin-top-60 form-group">
                        <div id="message-box-conact"></div>
                        <h3 class="title">REACH US FOR AN APPOINTMENT</h3>
                        <p>
                            <input id="name" type="text" placeholder="Your Name" name="name">
                        </p>
                        <p>
                            <input id="email" type="text" placeholder="Your Email" name="email">
                        </p>
                        <p>
                            <input id="phone" type="text" placeholder="Your Phone Number" name="phone">
                        </p>
                        <p>
                            <textarea id="userMessage" placeholder="Please let us know when you'd like to book an appointment or let us know if you have any queries." name="userMessage"></textarea>
                        </p>
                        <input type="submit" name="send" value="SEND REQUEST" class="button">
{{--                        <button id='btn-send-contact' class="button">SEND REQUEST</button>--}}
                    </div>
                </form>
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
