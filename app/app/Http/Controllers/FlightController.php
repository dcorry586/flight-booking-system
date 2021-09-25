<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use Log;

class FlightController extends Controller
{

    public function create() {
            // return view
    }
    
    public function edit() {
            
    }
    
        

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

    public function indexByFlightDuration($duration) { // greater than --> vue could chain on an int for the api to use as $price param

        //hardcode these names in anchor tags so you'll know the id
        $flights = Flight::where('duration', $duration)->get();
        return $flights;
    }
    

    public function adminIndex() {
        $flights = Flight::all();
            return $flights;
    }

    public function store(Request $request) {
            $flight = new Flight;

                $flight->capacity = $request->input('capacity');
                $flight->dest_airport = $request->input('dest_airport');
                $flight->depart_date = $request->input('depart_date');
                $flight->dest_date =$request->input('dest_date');
                $flight->depart_time=$request->input('depart_time');
                $flight->dest_time=$request->input('dest_time');
                $flight->duration=$request->input('duration');
                $flight->ticket_id=$request->input('ticket_id');
                $flight->flight_name=$request->input('flight_name');
                $flight->ticket_id=$request->input('ticket_id');

                   $flight->save();
    }

    public function update(Request $request, $id) {
                
        $flight = Flight::find($id);
        Log::info($flight);

        $flight->capacity = $request->input('capacity');
        $flight->dest_airport = $request->input('dest_airport');
        $flight->depart_date = $request->input('depart_date');
        $flight->dest_date =$request->input('dest_date');
        $flight->depart_time=$request->input('depart_time');
        $flight->dest_time=$request->input('dest_time');
        $flight->duration=$request->input('duration');
        $flight->ticket_id=$request->input('ticket_id');
        $flight->flight_name=$request->input('flight_name');
        $flight->ticket_id=$request->input('ticket_id');

           $flight->save();

        
                    Log::info($flight);
                         $flight->save();
    }



    public function destroy($id) {
        $flight = Flight::find($id);
            $flight->delete();
    }
}


