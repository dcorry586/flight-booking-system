<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airline;

class AirlineController extends Controller
{
    public function index() {
            $airlines =  Airline::all();
            return $airlines;   
    }

    public function create() {
// na
    }

    public function store(Request $request) {
            $airline = new Airline;

// name address email phone admin_id 0 flight id 

            $airline->name= $request->input('name');
            $airline->address  = $request->input('address');
            $airline->email = $request->input('email');
            $airline->phone = $request->input('phone');
            $airline->admin_id = $request->input('admin_id');
            $airline->flight_id = $request->input('flight_id');
         
            $airline->save();
    }  
    public function edit() {
// na
    }



    public function update(Request $request, $id) {
            $airline = Airline::find($id);

            $airline->name= $request->input('name');
            $airline->address  = $request->input('address');
            $airline->email = $request->input('email');
            $airline->phone = $request->input('phone');
            $airline->admin_id = $request->input('admin_id');
            $airline->flight_id = $request->input('flight_id');

        $airline->save();
    }
   
    public function destroy($id) {
            $airline = Airline::find($id);
                $airline->delete();
    }


}

