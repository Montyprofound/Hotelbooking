<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Hotel extends Model
{
    protected $fillable = [
        'name',
        'description',
        'location',
        'image',
        'rating'
    ];

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    /**
     * Accessor for image URL
     */
    public function getImageUrlAttribute()
    {
        if (!$this->image) {
            return asset('images/services-1.jpg'); // fallback image
        }

        return Str::startsWith($this->image, ['http://', 'https://'])
            ? $this->image
            : asset('images/' . $this->image);
    }
}
