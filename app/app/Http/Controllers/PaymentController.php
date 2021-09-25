<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function store(Request $request) {

        // get customer id 

        Payment::create([

        ]);

    }
}

'customer_id');
'booking_id');
'account_number');
'card_number');
'sort_code');
'cvc');
'cardholder_name');