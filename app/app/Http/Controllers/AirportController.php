<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airport;

class AirportController extends Controller
{
    // C R U D 


    public function index() {
        return Airport::all();
    }

    public function create() {
                // NA
    }

    public function store(Request $request) {
        $airport = new Airport;

// name address phone 

            $airport->name = $request->input('name');
            $airport->address = $request->input('address');
            $airport->phone = $request->input('phone');

        $airport->save();
    }  
    public function edit() {
            // NA
    }



    public function update(Request $request, $id) {
            $airport = Airport::find($id);


            $airport->name = $request->input('name');
            $airport->address = $request->input('address');
            $airport->phone = $request->input('phone');


            $airport->save();
    }
   
    public function destroy($id) {
            $airport = Airport::find($id);
                $airport->delete();
    }


}
