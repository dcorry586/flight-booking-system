<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\FlightController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('booking', BookingController::class);
Route::resource('booking', BookingController::class);

Route::get('/my-booking/{id}', [BookingController::class, 'show']);


Route::post('/booking', [BookingController::class, 'store']);   

Route::resource('payment', PaymentController::class);

Route::post('/payment', [PaymentController::class, 'store']);
Route::get('/payments', [PaymentController::class, 'create']);


Route::get('/flights-by-name/{name}', [FlightController::class, 'indexByFlightName']);
Route::get('/flights-by-departure/{departure}', [FlightController::class, 'indexByFlightDeparture']);
Route::get('/flights-by-destination/{destination}', [FlightController::class, 'indexByFlightDestination']);
Route::get('/flights-by-departure-time/{departureTime}', [FlightController::class, 'indexByFlightDepartureTime']);
Route::get('/flights-by-departure-date/{departureDate}', [FlightController::class, 'indexByFlightDepartureDate']);
Route::get('/flights-by-seats-remaining/{seatingAvailable}', [FlightController::class, 'indexByFlightSeatingRemaining']);
Route::get('/flights-by-price/{price}', [FlightController::class, 'indexByFlightPrice']);
