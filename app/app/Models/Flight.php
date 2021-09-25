<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Airport;
use App\Models\Flight;
use App\Models\Ticket;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = [
        'capacity', 'dest_airport', 'depart_airport', 'depart_date', 'dest_date', 'depart_time', 'dest_time', 'duration', 'ticket_id', 'price'
    ];


    public function airports() {
        return $this->hasMany(Airport::class);

    }

    public function tickets() {
        return $this->hasMany(Ticket::class);

    }


}
