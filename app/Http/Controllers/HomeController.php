<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Room;

class HomeController extends Controller
{
    public function index()
    {
        $hotels = Hotel::with('rooms')->take(3)->get();
        $featuredRooms = Room::with('hotel')->take(4)->get();
        
        return view('home', compact('hotels', 'featuredRooms'));
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function contact()
    {
        return view('contact');
    }
}
