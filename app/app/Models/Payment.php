<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Booking;

class Payment extends Model
{
    use HasFactory;

    public function bookings() {
        return $this->hasMany(Booking::class);
    }
}
