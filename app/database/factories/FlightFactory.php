<?php

namespace Database\Factories;

use App\Models\Flight;
use Illuminate\Database\Eloquent\Factories\Factory;

class FlightFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Flight::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'capacity' => rand(100,119),
            'dest_airport' => rand(1,30),
            'depart_airport' => rand(1,30),
            'depart_date' => '20-10-2021',
            'dest_date' => '20-10-2021',
            'depart_time' => '13:00:00',
            'dest_time' => '13:00:00',
            'duration' => '1  hour',
            'ticket_id' => rand(1,30),
            'flight_name' => 'boston-to-maryland',
            'seats_available' => rand(90,100),
            'price' => 333.97,
        ];
    }
}
