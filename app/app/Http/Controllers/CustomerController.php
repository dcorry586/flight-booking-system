<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;


class CustomerController extends Controller
{
    // c r u d

    public function index() {
        return Customer::all();
    }

    public function show($id) {
              return Customer::find($id);
    }


    public function store(Request $request) {
            $customer = new Customer;


               $customer->fname       = $request->input('fname');
               $customer->address   = $request->input('address');
               $customer->email   = $request->input('email');
               $customer->password    = Hash::make($request->password);

               $customer->mobile  = $request->input('mobile');
               $customer->booking_id  = $request->input('booking_id');
               $customer->lname   = $request->input('lname');


            $customer->save();
    }


    public function update() {
        
    }


    public function destroy($id) {
            $customer = Customer::find($id);
                $customer->delete();
    }


}
