@extends('layouts.app')

@section('title', $room->name . ' - Vacation Rental')

@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    {{-- Room Hero Carousel --}}
    <div id="roomCarousel" class="carousel slide hero-wrap js-fullheight" data-bs-ride="carousel"
        data-stellar-background-ratio="0.5">
        <div class="carousel-inner">
            @foreach ($room->image_urls as $index => $img)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}" style="height: 100vh;">
                    <div class="overlay"></div>
                    <div class="d-flex justify-content-center align-items-center h-100"
                        style="background-image: url('{{ $img }}'); background-size: cover; background-position: center;">
                        <div class="container">
                            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start"
                                data-scrollax-parent="true">
                                <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
                                    <div class="text">
                                        <h1 class="mb-3">{{ $room->name }}</h1>
                                        <h2>{{ $room->hotel->name }} - {{ $room->hotel->location }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Optional: Small Carousel Indicators --}}
        @if (count($room->image_urls) > 1)
            <ol class="carousel-indicators">
                @foreach ($room->image_urls as $index => $img)
                    <li data-bs-target="#roomCarousel" data-bs-slide-to="{{ $index }}"
                        class="{{ $index === 0 ? 'active' : '' }}"></li>
                @endforeach
            </ol>
        @endif
    </div>


    <section class="ftco-section">
        <div class="container">
            <div class="row">
                {{-- Room Details --}}
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-12 ftco-animate">
                            <h2 class="mb-4">{{ $room->name }}</h2>
                            <p>{{ $room->description ?? 'Experience luxury and comfort in our beautifully appointed room. Perfect for your vacation stay with all modern amenities.' }}
                            </p>

                            <div class="d-md-flex mt-5 mb-5">
                                <ul class="list">
                                    <li><span>Max:</span> {{ $room->max_persons }} Persons</li>
                                    <li><span>Size:</span> {{ $room->size }} m²</li>
                                    <li><span>View:</span> {{ $room->view ?? 'City View' }}</li>
                                    <li><span>Bed:</span> {{ $room->beds }}</li>
                                </ul>
                                <ul class="list ml-md-5">
                                    <li><span>Type:</span> {{ $room->type }}</li>
                                    <li><span>Hotel:</span> {{ $room->hotel->name }}</li>
                                    <li><span>Location:</span> {{ $room->hotel->location }}</li>
                                    <li><span>Available:</span> {{ $room->available ? 'Yes' : 'No' }}</li>
                                </ul>
                            </div>

                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                        </div>
                    </div>

                    {{-- Room Gallery --}}
                    @if (count($room->image_urls) > 1)
                        <div class="row mt-4">
                            @foreach ($room->image_urls as $img)
                                <div class="col-md-4 mb-4">
                                    <div class="room-img"
                                        style="background-image: url('{{ $img }}'); height: 200px; background-size: cover; background-position: center;">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>

                {{-- Booking Sidebar --}}
                <div class="col-lg-4 sidebar">
                    <div class="sidebar-wrap bg-light ftco-animate">
                        <h3 class="heading mb-4">Book This Room</h3>
                        <div class="price-wrap">
                            <p class="price">
                                <span class="number">${{ number_format($room->price, 2) }}</span>
                                <span class="per">per night</span>
                            </p>
                        </div>

                        @auth
                            <form action="{{ route('rooms.book', $room) }}" method="POST" class="booking-form">
                                @csrf
                                <div class="fields">
                                    <div class="form-group">
                                        <label for="check_in">Check-in Date</label>">
                                        <input type="date" class="form-control" name="check_in" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="check_out">Check-out Date</label>
                                        <input type="date" class="form-control" name="check_out" required>
                                    </div>
                                    <div class="form-group">
                                        <select name="guests" class="form-control" required>
                                            <option value="">Guests</option>
                                            @for ($i = 1; $i <= $room->max_persons; $i++)
                                                <option value="{{ $i }}">{{ $i }}
                                                    {{ $i == 1 ? 'Guest' : 'Guests' }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Book Now" class="btn btn-primary py-3">
                                    </div>
                                </div>
                            </form>
                        @else
                            <div class="text-center">
                                <p>Please <a href="{{ route('login') }}">login</a> to book this room.</p>
                                <a href="{{ route('login') }}" class="btn btn-primary py-3">Login to Book</a>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
