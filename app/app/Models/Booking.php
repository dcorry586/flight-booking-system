<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket_id',
    ];

   public function customers() {
        return $this->hasMany(Customer::class);
    }

    public function tickets() {
        return $this->hasMany(Ticket::class);
    }
}
