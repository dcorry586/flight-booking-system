<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fname' => $this->faker->name(),
            'lname' => $this->faker->name(),
            'address' => Str::random(22),
            'email' => $this->faker->name() . '@gmail.com',
            'password' => Hash::make('newpassword123'),
            'mobile' => '07935752222',
            'booking_id' => 1,
        ];
    }
}

                    