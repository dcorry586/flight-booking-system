<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;



class AdminFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Admin::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'email' => 'admin@dylan',
             'password' => Hash::make('newpassword123'),
            'address' => Str::random(22),
            'mobile' => '07935711111',
            'airline_id' => 0,
            'fname' => $this->faker->name(),
            'lname' => $this->faker->name(),

        ];
    }
}

