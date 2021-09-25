<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Log;

class BookingController extends Controller
{
    public function show($id) {
            return Booking::find($id);
    }

    public function create($id) {

    }

    public function store(Request $request) {
        /*
        
        * have the following form fields:

            'ticket_id'
            'customer_id'
            'date'
            'duration'
            'time_depart'
            'time_arrive'
            'flight_id'
            'pay_id'

            so when request->all() it'll capture the customer_id.

        */
                $booking = new Booking;
                // $reqToLog = $request->all();
                Log::info($request->all());
            $booking->ticket_id = $request->input('ticket_id');
            $booking->customer_id= $request->input('customer_id');
            $booking->flight_date=$request->input('flight_date');
            $booking->duration = $request->input('duration');
            $booking->time_depart = $request->input('time_depart');
            $booking->time_arrive = $request->input('time_arrive');
            $booking->flight_id = $request->input('flight_id');
            $booking->pay_id = $request->input('pay_id');

                $booking->save();


        // return Booking::create([

        //     'ticket_id' => $request->input('ticket_id'),
        //     'customer_id'=> $request->input('customer_id'),
        //     'flight_date' => $request->input('flight_date'),
        //     'duration' => $request->input('duration'),
        //     'time_depart' => $request->input('time_depart'),
        //     'time_arrive' => $request->input('time_arrive'),
        //     'flight_id' => $request->input('flight_id'),
        //     'pay_id' => $request->input('pay_id'),
        //     ]);
    }
}

