@extends('layouts.app')

@section('title', 'Services - Vacation Rental')

@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('images/image_2.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-9 text-center ftco-animate">
                <h2 class="subheading">Welcome to Vacation Rental</h2>
                <h1 class="mb-4">Our Services</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-diet"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Tea Coffee</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                    </div>
                </div>      
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-workout"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Hot Showers</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                    </div>
                </div>    
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-diet-1"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Laundry</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                    </div>
                </div>      
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-first"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Air Conditioning</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                    </div>
                </div>      
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-first"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Free Wifi</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                    </div>
                </div>      
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-first"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Kitchen</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                    </div>
                </div>      
            </div>
        </div>
    </div>
</section>
@endsection