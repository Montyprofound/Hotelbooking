<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::with('hotel')->paginate(12);
        return view('rooms.index', compact('rooms'));
    }

    public function show(Request $request, Room $room )
    {
        $room->load('hotel');
        return view('rooms.show', compact('room'));
    }
}
