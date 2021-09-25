<?php

namespace Database\Factories;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Booking::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ticket_id' => rand(0,100),
            'customer_id' => rand(0,100),
            'flight_date' => '10/10/2021',
            'duration'=>   '1 hour' ,
            'time_depart'=>  '13:00:00',
            'time_arrive'=> '14:00:00',
            'flight_id'=> rand(0,100),
            'pay_id'=> rand(0,100),

        ];
    }
}

