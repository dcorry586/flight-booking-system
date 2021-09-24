<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin;
use App\Models\Flight;


class Airline extends Model
{
    use HasFactory;

    // one airline has many admins

    public function admins() {
        return $this->hasMany(Admin::class);
    }

    public function flights() {
        return $this->hasMany(Flight::class);
    }
}

