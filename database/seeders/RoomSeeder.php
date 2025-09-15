<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    public function run(): void
    {
        $rooms = [
            ['name' => 'Suite Room', 'type' => 'Suite', 'hotel_id' => 1, 'price' => 120.00, 'max_persons' => 3, 'size' => 45, 'view' => 'Sea View', 'beds' => 1, 'image' => 'room-1.jpg'],
            ['name' => 'Standard Room', 'type' => 'Standard', 'hotel_id' => 1, 'price' => 80.00, 'max_persons' => 2, 'size' => 35, 'view' => 'City View', 'beds' => 1, 'image' => 'room-2.jpg'],
            ['name' => 'Family Room', 'type' => 'Family', 'hotel_id' => 2, 'price' => 150.00, 'max_persons' => 4, 'size' => 55, 'view' => 'Garden View', 'beds' => 2, 'image' => 'room-3.jpg'],
            ['name' => 'Deluxe Room', 'type' => 'Deluxe', 'hotel_id' => 2, 'price' => 200.00, 'max_persons' => 2, 'size' => 40, 'view' => 'Sea View', 'beds' => 1, 'image' => 'room-4.jpg'],
            ['name' => 'Presidential Suite', 'type' => 'Suite', 'hotel_id' => 3, 'price' => 350.00, 'max_persons' => 4, 'size' => 80, 'view' => 'City View', 'beds' => 2, 'image' => 'room-5.jpg'],
            ['name' => 'Executive Room', 'type' => 'Executive', 'hotel_id' => 3, 'price' => 180.00, 'max_persons' => 2, 'size' => 42, 'view' => 'Park View', 'beds' => 1, 'image' => 'room-6.jpg'],
        ];

        foreach ($rooms as $room) {
            Room::create($room);
        }
    }
}
