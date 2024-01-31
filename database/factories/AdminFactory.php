<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create('id_ID');

        return [
            'name' => $faker->name,
            'username' => $faker->userName,
            'phone_number' => $faker->phoneNumber,
            'phone_number_verified_at' => Carbon::now(),
            'password' => bcrypt('12341234'),
            'level' => $faker->boolean(),
        ];
    }
}
