@extends('layouts.app')

@section('title', 'Rooms - Vacation Rental')

@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('images/image_2.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-9 text-center ftco-animate">
                <h2 class="subheading">Welcome to Vacation Rental</h2>
                <h1 class="mb-4">Available Rooms</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            @foreach($rooms as $room)
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="room">
                    <a href="{{ route('rooms.show', $room) }}" class="d-block mb-3">
                        <img src="{{ count($room->image_urls) > 0 ? $room->image_urls[0] : asset('images/room-1.jpg') }}"
                             alt="{{ $room->name }}"
                             class="img-fluid rounded">
                    </a>
                    <div class="text p-3 text-center">
                        <h3 class="mb-3"><a href="{{ route('rooms.show', $room) }}">{{ $room->name }}</a></h3>
                        <p><span class="price mr-2">${{ number_format($room->price, 2) }}</span> <span class="per">per night</span></p>
                        <hr>
                        <p class="pt-1">
                            <span class="d-block">Hotel: {{ $room->hotel->name }}</span>
                            <span class="d-block">Max: {{ $room->max_persons }} Persons</span>
                            <span class="d-block">Size: {{ $room->size }} m²</span>
                        </p>
                        <a href="{{ route('rooms.show', $room) }}" class="btn-custom">View Room Details <span class="icon-long-arrow-right"></span></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row mt-5">
            <div class="col text-center">
                {{ $rooms->links() }}
            </div>
        </div>
    </div>
</section>
@endsection
