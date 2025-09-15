@extends('layouts.app')

@section('title', 'About - Vacation Rental')

@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('images/image_2.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-9 text-center ftco-animate">
                <h2 class="subheading">Welcome to Vacation Rental</h2>
                <h1 class="mb-4">About Us</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="img img-2 mb-4" style="background-image: url({{ asset('images/image_2.jpg') }});"></div>
            </div>
            <div class="col-md-6 pl-md-5">
                <h2 class="mb-4">Welcome To Vacation Rental</h2>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn't listen.</p>
            </div>
        </div>
    </div>
</section>
@endsection