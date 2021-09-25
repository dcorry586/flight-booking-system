<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\AirportController;
use App\Http\Controllers\AirlineController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;

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
Route::resource('airport', AirportController::class);
Route::resource('airline', AirlineController::class);


Route::get('/flights-by-name/{name}', [FlightController::class, 'indexByFlightName']);
Route::get('/flights-by-departure/{departure}', [FlightController::class, 'indexByFlightDeparture']);
Route::get('/flights-by-destination/{destination}', [FlightController::class, 'indexByFlightDestination']);
Route::get('/flights-by-departure-time/{departureTime}', [FlightController::class, 'indexByFlightDepartureTime']);
Route::get('/flights-by-departure-date/{departureDate}', [FlightController::class, 'indexByFlightDepartureDate']);
Route::get('/flights-by-seats-remaining/{seatingAvailable}', [FlightController::class, 'indexByFlightSeatingRemaining']);
Route::get('/flights-by-price/{price}', [FlightController::class, 'indexByFlightPrice']);
Route::get('/flights-by-duration/{duration}', [FlightController::class, 'indexByFlightDuration']);
Route::post('/flight', [FlightController::class, 'store']);
Route::post('/flight-update/{id}', [FlightController::class, 'update']);
Route::post('/flight-delete/{id}', [FlightController::class, 'destroy']);
Route::get('/airports', [AirportController::class, 'index']);
Route::post('/airport', [AirportController::class, 'store']);
Route::post('/airport-update/{id}', [AirportController::class, 'update']);
Route::post('/airport-delete/{id}', [AirportController::class, 'destroy']);

Route::get('/airlines', [AirlineController::class, 'index']);
Route::post('/airline', [AirlineController::class, 'store']);
Route::post('/airline-update/{id}', [AirlineController::class, 'update']);

Route::post('/ticket-create', [TicketController::class, 'store']);
Route::get('/ticket/{id}', [TicketController::class, 'show']);


Route::get('/customers', [CustomerController::class, 'index']);
Route::post('/customer', [CustomerController::class, 'store']);
Route::post('/customer-delete/{id}', [CustomerController::class, 'destroy']);

Route::post('/admin', [AdminController::class, 'store']);
Route::post('/admin-update/{id}', [AdminController::class, 'update']);

Route::post('/payment', [PaymentController::class, 'store']);


