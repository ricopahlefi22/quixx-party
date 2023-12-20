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
            'name' => 'Kabupaten Ketapang',
        ]);

        City::create([
            'name' => 'Kabupaten Kayong Utara',
        ]);
    }
}
