<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // City::factory(10)->create();

        City::create([
            'city_id' => 'b5d5da9b-9e1a-11ee-922f-0f7624512ade',
            'name' => 'Kabupaten Ketapang',
        ]);

        City::create([
            'city_id' => '7f0e123c-7ac9-44fb-9da8-cda481d4b1f3',
            'name' => 'Kabupaten Kayong Utara',
        ]);
    }
}
