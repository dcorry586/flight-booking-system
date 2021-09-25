<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    public function indexByFlightName($name) {
        $flights = Flight::where('flight_name', $name)->get();
        return $flights;
    }

    public function indexByFlightDeparture($departure) {
        // dearture airport id
        //hardcode these names in anchor tags so you'll know the id
        $flights = Flight::where('depart_airport', $departure)->get();
        return $flights;
    }

    public function indexByFlightDestination($destination) {
        // dearture airport id
        //hardcode these names in anchor tags so you'll know the id
        $flights = Flight::where('dest_airport', $destination)->get();
        return $flights;
    }

    public function indexByFlightDepartureTime($departureTime) {

        //hardcode these names in anchor tags so you'll know the id
        $flights = Flight::where('depart_time', $departureTime)->get();
        return $flights;
    }
    public function indexByFlightDepartureDate($departureDate) { // use - not forward /

        //hardcode these names in anchor tags so you'll know the id
        $flights = Flight::where('depart_date', $departureDate)->get();
        return $flights;
    }
    public function indexByFlightSeatingRemaining($seatingAvailable) { // use - not forward /

        //hardcode these names in anchor tags so you'll know the id
        $flights = Flight::where('seats_available', $seatingAvailable)->get();
        return $flights;
    }
    public function indexByFlightPrice($price) { // greater than --> vue could chain on an int for the api to use as $price param

        //hardcode these names in anchor tags so you'll know the id
        $flights = Flight::where('price', '>', $price)->get();
        return $flights;
    }

    

    public function adminIndex() {
        $flights = Flight::all();
            return $flights;
    }
}
