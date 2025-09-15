@extends('layouts.app')

@section('title', 'Home - Vacation Rental')

@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('images/image_2.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate">
                <h2 class="subheading">Welcome to Vacation Rental</h2>
                <h1 class="mb-4">Rent an apartment for your vacation</h1>
                <p>
                    <a href="#" class="btn btn-primary">Learn more</a>
                    <a href="#" class="btn btn-white">Contact us</a>
                </p>
            </div>
        </div>
    </div>
</div>

{{-- Hotels Section --}}
<section class="ftco-section ftco-services">
    <div class="container">
        <div class="row">
            @foreach($hotels as $hotel)
            <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
                <div class="d-block services-wrap text-center">
                    <div class="img" style="background-image: url('{{ $hotel->image_url}}');"></div>
                    <div class="media-body py-4 px-3">
                        <h3 class="heading">{{ $hotel->name }}</h3>
                        <p>{{ Str::limit($hotel->description, 100) }}</p>
                        <p>Location: {{ $hotel->location }}</p>
                        <p>

                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Featured Rooms Section --}}
<section class="ftco-section bg-light">
    <div class="container-fluid px-md-0">
        <div class="row no-gutters justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>Apartment Rooms</h2>
            </div>
        </div>
        <div class="row no-gutters">
           @foreach($featuredRooms as $index => $room)
    <div class="col-lg-6">
        <div class="room-wrap d-md-flex">
            <a href="{{ route('rooms.show', $room) }}"
               class="img {{ $index % 2 == 1 ? 'order-md-last' : '' }}"
               style="background-image: url('{{ $room->first_image }}');"></a>

            <div class="half {{ $index % 2 == 1 ? 'right-arrow' : 'left-arrow' }} d-flex align-items-center">
                <div class="text p-4 p-xl-5 text-center">
                    <p class="star mb-0">
                        @for($i = 1; $i <= 5; $i++)
                            <span class="fa fa-star{{ $i <= ($room->rating ?? 5) ? '' : '-o' }}"></span>
                        @endfor
                    </p>
                    <h3 class="mb-3">
                        <a href="{{ route('rooms.show', $room) }}">{{ $room->name }}</a>
                    </h3>
                    <ul class="list-accomodation">
                        <li><span>Max:</span> {{ $room->max_persons }} Persons</li>
                        <li><span>Size:</span> {{ $room->size }} m²</li>
                        <li><span>View:</span> {{ $room->view ?? 'Sea View' }}</li>
                        <li><span>Bed:</span> {{ $room->beds }}</li>
                    </ul>
                    <p class="pt-1">
                        <a href="{{ route('rooms.show', $room) }}" class="btn-custom px-3 py-2">
                            View Room Details <span class="icon-long-arrow-right"></span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endforeach

        </div>
    </div>
</section>

{{-- About & Services --}}
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6 wrap-about">
                <div class="img img-2 mb-4" style="background-image: url('{{ asset('images/image_2.jpg') }}');"></div>
                <h2>The most recommended vacation rental</h2>
                <p>Our properties are carefully selected to provide you with the best comfort, convenience, and unforgettable memories during your vacation.</p>
            </div>
            <div class="col-md-6 wrap-about ftco-animate">
                <div class="heading-section">
                    <div class="pl-md-5">
                        <h2 class="mb-2">What we offer</h2>
                    </div>
                </div>
                <div class="pl-md-5">
                    <p>We provide world-class amenities to ensure your stay is as comfortable and enjoyable as possible.</p>
                    <div class="row">
                        <div class="services-2 col-lg-6 d-flex w-100">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-diet"></span>
                            </div>
                            <div class="media-body pl-3">
                                <h3 class="heading">Tea & Coffee</h3>
                                <p>Enjoy complimentary tea and coffee anytime.</p>
                            </div>
                        </div>
                        <div class="services-2 col-lg-6 d-flex w-100">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-workout"></span>
                            </div>
                            <div class="media-body pl-3">
                                <h3 class="heading">Hot Showers</h3>
                                <p>Relax with unlimited hot water showers.</p>
                            </div>
                        </div>
                        <div class="services-2 col-lg-6 d-flex w-100">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-diet-1"></span>
                            </div>
                            <div class="media-body pl-3">
                                <h3 class="heading">Laundry</h3>
                                <p>On-site laundry service for your convenience.</p>
                            </div>
                        </div>
                        <div class="services-2 col-lg-6 d-flex w-100">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-first"></span>
                            </div>
                            <div class="media-body pl-3">
                                <h3 class="heading">Air Conditioning</h3>
                                <p>Stay cool with modern air conditioning units.</p>
                            </div>
                        </div>
                        <div class="services-2 col-lg-6 d-flex w-100">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-first"></span>
                            </div>
                            <div class="media-body pl-3">
                                <h3 class="heading">Free Wifi</h3>
                                <p>High-speed internet available throughout.</p>
                            </div>
                        </div>
                        <div class="services-2 col-lg-6 d-flex w-100">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-first"></span>
                            </div>
                            <div class="media-body pl-3">
                                <h3 class="heading">Kitchen</h3>
                                <p>Fully equipped kitchens for your cooking needs.</p>
                            </div>
                        </div>
                        <div class="services-2 col-lg-6 d-flex w-100">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-first"></span>
                            </div>
                            <div class="media-body pl-3">
                                <h3 class="heading">Ironing</h3>
                                <p>Ironing service available upon request.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Call to Action --}}
<section class="ftco-intro" style="background-image: url('{{ asset('images/image_2.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 text-center">
                <h2>Ready to get started?</h2>
                <p class="mb-4">It's safe to book online with us! Secure your dream stay in just a few clicks, or contact us with any questions.</p>
                <p class="mb-0">
                    <a href="#" class="btn btn-primary px-4 py-3">Learn More</a>
                    <a href="#" class="btn btn-white px-4 py-3">Contact us</a>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
