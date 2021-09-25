<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function show($id) {
            return Ticket::find($id);
    }


    public function store(Request $request) {
            $ticket = new Ticket;

         $ticket->number = $request->input('number');
         $ticket->one_way = $request->input('one_way');
         $ticket->seat_number = $request->input('seat_number');
         $ticket->return_trip = $request->input('return_trip');
         $ticket->booking_id = $request->input('booking_id');
         $ticket->flight_id = $request->input('flight_id');
         $ticket->customer_id = $request->input('customer_id');
            


            $ticket->save();
    }
}
