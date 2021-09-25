<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{

    public function create() {
        
    }

    public function store(Request $request) {

        // get customer id 
            $payment = new Payment;


            $payment->customer_id = $request->input('customer_id');
            $payment->booking_id = $request->input('booking_id');
            $payment->account_number = $request->input('account_number');
            $payment->card_number = $request->input('card_number');
            $payment->sort_code = $request->input('sort_code');
            $payment->cvc = $request->input('cvc');
            $payment->cardholder_name = $request->input('cardholder_name') ;

            $payment->save();

    }
}
