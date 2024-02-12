<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\VotingZone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VotingZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // VotingZone::factory(50)->create();


        /**-------------- KABUPATEN KETAPANG ------------- **/
        $ketapang = City::where('name', 'Kabupaten Ketapang')->first();

        VotingZone::create([
            'name' => 'Dapil 1',
            'city_id' => $ketapang->id,
        ]);

        VotingZone::create([
            'name' => 'Dapil 2',
            'city_id' => $ketapang->id,
        ]);

        VotingZone::create([
            'name' => 'Dapil 3',
            'city_id' => $ketapang->id,
        ]);

        VotingZone::create([
            'name' => 'Dapil 4',
            'city_id' => $ketapang->id,
        ]);

        VotingZone::create([
            'name' => 'Dapil 5',
            'city_id' => $ketapang->id,
        ]);

        VotingZone::create([
            'name' => 'Dapil 6',
            'city_id' => $ketapang->id,
        ]);

        VotingZone::create([
            'name' => 'Dapil 7',
            'city_id' => $ketapang->id,
        ]);
        /**-------------- KABUPATEN KETAPANG ------------- **/


        /**-------------- KABUPATEN KAYONG UTARA ------------- **/
        $kayongUtara = City::where('name', 'Kabupaten Kayong Utara')->first();

        VotingZone::create([
            'name' => 'Dapil 1',
            'city_id' => $kayongUtara->id,
        ]);

        VotingZone::create([
            'name' => 'Dapil 2',
            'city_id' => $kayongUtara->id,
        ]);

        VotingZone::create([
            'name' => 'Dapil 3',
            'city_id' => $kayongUtara->id,
        ]);

        VotingZone::create([
            'name' => 'Dapil 4',
            'city_id' => $kayongUtara->id,
        ]);
        /**-------------- KABUPATEN KAYONG UTARA ------------- **/
    }
}
