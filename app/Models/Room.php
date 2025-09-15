<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'hotel_id',
        'name',
        'description',
        'type',
        'price',
        'max_persons',
        'size',
        'view',
        'beds',
        'images',
        'available',
    ];

   protected $casts = ['images' => 'array'];


    // Relationship with Hotel
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }




    // Relationship with Bookings
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    // Accessor: flat array of image URLs
    public function getImageUrlsAttribute(): array
    {
        if (empty($this->images) || !is_array($this->images)) {
            return [asset('images/room-1.jpg')]; // fallback
        }

        return collect($this->images)
            ->pluck('url') // get 'url' key from each item
            ->map(fn($img) => str_starts_with($img, 'http') ? $img : asset('images/' . $img))
            ->toArray();
    }



}
