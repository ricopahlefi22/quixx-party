<?php

namespace Database\Seeders\Village;

use App\Models\District;
use App\Models\Village;
use App\Models\VotingPlace;
use Illuminate\Database\Seeder;

class MarauSeeder extends Seeder
{
    public function run(): void
    {
        $kecamatanMarau = District::where('name', 'Marau')->first();

        /**-------------- BANTAN SARI ------------- **/
        $bantanSari = Village::create([
            'name' => 'Desa Bantan Sari',
            'district_id' => $kecamatanMarau->id,
            'voting_zone_id' => $kecamatanMarau->voting_zone_id,
            'city_id' => $kecamatanMarau->city_id,
        ]);

        for ($i = 1; $i <= 5; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $bantanSari->id,
                'district_id' => $bantanSari->district_id,
                'voting_zone_id' => $bantanSari->voting_zone_id,
                'city_id' => $bantanSari->city_id,
            ]);
        }
        /**-------------- BANTAN SARI ------------- **/


        /**-------------- BATU PAYUNG DUA ------------- **/
        $batuPayungDua = Village::create([
            'name' => 'Desa Batu Payung Dua',
            'district_id' => $kecamatanMarau->id,
            'voting_zone_id' => $kecamatanMarau->voting_zone_id,
            'city_id' => $kecamatanMarau->city_id,
        ]);

        for ($i = 1; $i <= 7; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $batuPayungDua->id,
                'district_id' => $batuPayungDua->district_id,
                'voting_zone_id' => $batuPayungDua->voting_zone_id,
                'city_id' => $batuPayungDua->city_id,
            ]);
        }
        /**-------------- BATU PAYUNG DUA ------------- **/



        /**-------------- BELABAN ------------- **/
        $belaban = Village::create([
            'name' => 'Desa Belaban',
            'district_id' => $kecamatanMarau->id,
            'voting_zone_id' => $kecamatanMarau->voting_zone_id,
            'city_id' => $kecamatanMarau->city_id,
        ]);

        for ($i = 1; $i <= 10; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $belaban->id,
                'district_id' => $belaban->district_id,
                'voting_zone_id' => $belaban->voting_zone_id,
                'city_id' => $belaban->city_id,
            ]);
        }
        /**-------------- BELABAN ------------- **/



        /**-------------- KARYA BARU ------------- **/
        $karyaBaru = Village::create([
            'name' => 'Desa Karya Baru',
            'district_id' => $kecamatanMarau->id,
            'voting_zone_id' => $kecamatanMarau->voting_zone_id,
            'city_id' => $kecamatanMarau->city_id,
        ]);

        for ($i = 1; $i <= 6; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $karyaBaru->id,
                'district_id' => $karyaBaru->district_id,
                'voting_zone_id' => $karyaBaru->voting_zone_id,
                'city_id' => $karyaBaru->city_id,
            ]);
        }
        /**-------------- KARYA BARU ------------- **/



        /**-------------- PELANJAU JAYA ------------- **/
        $pelanjauJaya = Village::create([
            'name' => 'Desa Pelanjau Jaya',
            'district_id' => $kecamatanMarau->id,
            'voting_zone_id' => $kecamatanMarau->voting_zone_id,
            'city_id' => $kecamatanMarau->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $pelanjauJaya->id,
                'district_id' => $pelanjauJaya->district_id,
                'voting_zone_id' => $pelanjauJaya->voting_zone_id,
                'city_id' => $pelanjauJaya->city_id,
            ]);
        }
        /**-------------- PELANJAU JAYA ------------- **/



        /**-------------- RANDAI ------------- **/
        $randai = Village::create([
            'name' => 'Desa Randai',
            'district_id' => $kecamatanMarau->id,
            'voting_zone_id' => $kecamatanMarau->voting_zone_id,
            'city_id' => $kecamatanMarau->city_id,
        ]);

        for ($i = 1; $i <= 6; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $randai->id,
                'district_id' => $randai->district_id,
                'voting_zone_id' => $randai->voting_zone_id,
                'city_id' => $randai->city_id,
            ]);
        }
        /**-------------- RANDAI ------------- **/



        /**-------------- RANGKUNG ------------- **/
        $rangkung = Village::create([
            'name' => 'Desa Rangkung',
            'district_id' => $kecamatanMarau->id,
            'voting_zone_id' => $kecamatanMarau->voting_zone_id,
            'city_id' => $kecamatanMarau->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $rangkung->id,
                'district_id' => $rangkung->district_id,
                'voting_zone_id' => $rangkung->voting_zone_id,
                'city_id' => $rangkung->city_id,
            ]);
        }
        /**-------------- RANGKUNG ------------- **/



        /**-------------- RIAM BATU GADING ------------- **/
        $riamBatuGading = Village::create([
            'name' => 'Desa Riam Batu Gading',
            'district_id' => $kecamatanMarau->id,
            'voting_zone_id' => $kecamatanMarau->voting_zone_id,
            'city_id' => $kecamatanMarau->city_id,
        ]);

        for ($i = 1; $i <= 6; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $riamBatuGading->id,
                'district_id' => $riamBatuGading->district_id,
                'voting_zone_id' => $riamBatuGading->voting_zone_id,
                'city_id' => $riamBatuGading->city_id,
            ]);
        }
        /**-------------- RIAM BATU GADING ------------- **/




        /**-------------- RUNJAI JAYA ------------- **/
        $runjauJaya = Village::create([
            'name' => 'Desa Runjai Jaya',
            'district_id' => $kecamatanMarau->id,
            'voting_zone_id' => $kecamatanMarau->voting_zone_id,
            'city_id' => $kecamatanMarau->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $runjauJaya->id,
                'district_id' => $runjauJaya->district_id,
                'voting_zone_id' => $runjauJaya->voting_zone_id,
                'city_id' => $runjauJaya->city_id,
            ]);
        }
        /**-------------- RUNJAI JAYA ------------- **/


        /**-------------- SUKAKARYA ------------- **/
        $sukakarya = Village::create([
            'name' => 'Desa Sukakarya',
            'district_id' => $kecamatanMarau->id,
            'voting_zone_id' => $kecamatanMarau->voting_zone_id,
            'city_id' => $kecamatanMarau->city_id,
        ]);

        for ($i = 1; $i <= 11; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sukakarya->id,
                'district_id' => $sukakarya->district_id,
                'voting_zone_id' => $sukakarya->voting_zone_id,
                'city_id' => $sukakarya->city_id,
            ]);
        }
        /**-------------- SUKAKARYA ------------- **/

        /**-------------- MARAU (DAPIL 5) ------------- **/
    }
}
