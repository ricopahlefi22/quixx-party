<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\District;
use App\Models\VotingZone;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // District::factory(500)->create();

        $ketapang = City::where('name', 'Kabupaten Ketapang')->first();
        /**-------------- (DAPIL 1) KABUPATEN KETAPANG ------------- **/
        $dapil1Ketapang = VotingZone::where('name', 'Dapil 1')->where('city_id', $ketapang->id)->first();

        District::create([
            'name' => 'Delta Pawan',
            'voting_zone_id' => $dapil1Ketapang->id,
            'city_id' => $ketapang->id,
        ]);

        District::create([
            'name' => 'Matan Hilir Utara',
            'voting_zone_id' => $dapil1Ketapang->id,
            'city_id' => $ketapang->id,
        ]);

        District::create([
            'name' => 'Muara Pawan',
            'voting_zone_id' => $dapil1Ketapang->id,
            'city_id' => $ketapang->id,
        ]);
        /**-------------- (DAPIL 1) KABUPATEN KETAPANG ------------- **/


        /**-------------- (DAPIL 2) KABUPATEN KETAPANG ------------- **/
        $dapil2Ketapang = VotingZone::where('name', 'Dapil 2')->where('city_id', $ketapang->id)->first();

        District::create([
            'name' => 'Simpang Dua',
            'voting_zone_id' => $dapil2Ketapang->id,
            'city_id' => $ketapang->id,
        ]);

        District::create([
            'name' => 'Simpang Hulu',
            'voting_zone_id' => $dapil2Ketapang->id,
            'city_id' => $ketapang->id,
        ]);

        District::create([
            'name' => 'Sungai Laur',
            'voting_zone_id' => $dapil2Ketapang->id,
            'city_id' => $ketapang->id,
        ]);
        /**-------------- (DAPIL 2) KABUPATEN KETAPANG ------------- **/


        /**-------------- (DAPIL 3) KABUPATEN KETAPANG ------------- **/
        $dapil3Ketapang = VotingZone::where('name', 'Dapil 3')->where('city_id', $ketapang->id)->first();

        District::create([
            'name' => 'Hulu Sungai',
            'voting_zone_id' => $dapil3Ketapang->id,
            'city_id' => $ketapang->id,
        ]);

        District::create([
            'name' => 'Nanga Tayap',
            'voting_zone_id' => $dapil3Ketapang->id,
            'city_id' => $ketapang->id,
        ]);

        District::create([
            'name' => 'Sandai',
            'voting_zone_id' => $dapil3Ketapang->id,
            'city_id' => $ketapang->id,
        ]);
        /**-------------- (DAPIL 3) KABUPATEN KETAPANG ------------- **/


        /**-------------- (DAPIL 4) KABUPATEN KETAPANG ------------- **/
        $dapil4Ketapang = VotingZone::where('name', 'Dapil 4')->where('city_id', $ketapang->id)->first();

        District::create([
            'name' => 'Jelai Hulu',
            'voting_zone_id' => $dapil4Ketapang->id,
            'city_id' => $ketapang->id,
        ]);

        District::create([
            'name' => 'Pemahan',
            'voting_zone_id' => $dapil4Ketapang->id,
            'city_id' => $ketapang->id,
        ]);

        District::create([
            'name' => 'Sungai Melayu Rayak',
            'voting_zone_id' => $dapil4Ketapang->id,
            'city_id' => $ketapang->id,
        ]);

        District::create([
            'name' => 'Tumbang Titi',
            'voting_zone_id' => $dapil4Ketapang->id,
            'city_id' => $ketapang->id,
        ]);
        /**-------------- (DAPIL 4) KABUPATEN KETAPANG ------------- **/


        /**-------------- (DAPIL 5) KABUPATEN KETAPANG ------------- **/
        $dapil5Ketapang = VotingZone::where('name', 'Dapil 5')->where('city_id', $ketapang->id)->first();

        District::create([
            'name' => 'Air Upas',
            'voting_zone_id' => $dapil5Ketapang->id,
            'city_id' => $ketapang->id,
        ]);

        District::create([
            'name' => 'Manis Mata',
            'voting_zone_id' => $dapil5Ketapang->id,
            'city_id' => $ketapang->id,
        ]);

        District::create([
            'name' => 'Marau',
            'voting_zone_id' => $dapil5Ketapang->id,
            'city_id' => $ketapang->id,
        ]);
        /**-------------- (DAPIL 5) KABUPATEN KETAPANG ------------- **/


        /**-------------- (DAPIL 6) KABUPATEN KETAPANG ------------- **/
        $dapil6Ketapang = VotingZone::where('name', 'Dapil 6')->where('city_id', $ketapang->id)->first();

        District::create([
            'name' => 'Kendawangan',
            'voting_zone_id' => $dapil6Ketapang->id,
            'city_id' => $ketapang->id,
        ]);

        District::create([
            'name' => 'Singkup',
            'voting_zone_id' => $dapil6Ketapang->id,
            'city_id' => $ketapang->id,
        ]);
        /**-------------- (DAPIL 6) KABUPATEN KETAPANG ------------- **/


        /**-------------- (DAPIL 7) KABUPATEN KETAPANG ------------- **/
        $dapil7Ketapang = VotingZone::where('name', 'Dapil 7')->where('city_id', $ketapang->id)->first();

        District::create([
            'name' => 'Benua Kayong',
            'voting_zone_id' => $dapil7Ketapang->id,
            'city_id' => $ketapang->id,
        ]);

        District::create([
            'name' => 'Matan Hilir Selatan',
            'voting_zone_id' => $dapil7Ketapang->id,
            'city_id' => $ketapang->id,
        ]);
        /**-------------- (DAPIL 7) KABUPATEN KETAPANG ------------- **/




        $kayongUtara = City::where('name', 'Kabupaten Kayong Utara')->first();
        /**-------------- (DAPIL 1) KABUPATEN KAYONG UTARA ------------- **/
        $dapil1KayongUtara = VotingZone::where('name', 'Dapil 1')->where('city_id', $kayongUtara->id)->first();

        District::create([
            'name' => 'Sukadana',
            'voting_zone_id' => $dapil1KayongUtara->id,
            'city_id' => $kayongUtara->id,
        ]);
        /**-------------- (DAPIL 1) KABUPATEN KAYONG UTARA ------------- **/


        /**-------------- (DAPIL 2) KABUPATEN KAYONG UTARA ------------- **/
        $dapil2KayongUtara = VotingZone::where('name', 'Dapil 2')->where('city_id', $kayongUtara->id)->first();

        District::create([
            'name' => 'Karimata',
            'voting_zone_id' => $dapil2KayongUtara->id,
            'city_id' => $kayongUtara->id,
        ]);

        District::create([
            'name' => 'Pulau Maya',
            'voting_zone_id' => $dapil2KayongUtara->id,
            'city_id' => $kayongUtara->id,
        ]);
        /**-------------- (DAPIL 2) KABUPATEN KAYONG UTARA ------------- **/



        /**-------------- (DAPIL 3) KABUPATEN KAYONG UTARA ------------- **/
        $dapil3KayongUtara = VotingZone::where('name', 'Dapil 3')->where('city_id', $kayongUtara->id)->first();

        District::create([
            'name' => 'Seponti',
            'voting_zone_id' => $dapil3KayongUtara->id,
            'city_id' => $kayongUtara->id,
        ]);

        District::create([
            'name' => 'Teluk Batang',
            'voting_zone_id' => $dapil3KayongUtara->id,
            'city_id' => $kayongUtara->id,
        ]);
        /**-------------- (DAPIL 3) KABUPATEN KAYONG UTARA ------------- **/


        /**-------------- (DAPIL 4) KABUPATEN KAYONG UTARA ------------- **/
        $dapil4KayongUtara = VotingZone::where('name', 'Dapil 4')->where('city_id', $kayongUtara->id)->first();

        District::create([
            'name' => 'Simpang Hilir',
            'voting_zone_id' => $dapil4KayongUtara->id,
            'city_id' => $kayongUtara->id,
        ]);
        /**-------------- (DAPIL 4) KABUPATEN KAYONG UTARA ------------- **/
    }
}
