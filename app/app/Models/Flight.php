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


    public function airports() {
        return $this->hasMany(Airport::class);

    }

    public function tickets() {
        return $this->hasMany(Ticket::class);

    }


}
