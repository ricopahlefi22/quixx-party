<?php

namespace Database\Seeders\Village;

use App\Models\District;
use App\Models\Village;
use App\Models\VotingPlace;
use Illuminate\Database\Seeder;

class SepontiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kecamatanSeponti = District::where('name', 'Seponti')->first();

        /**-------------- DURIAN SEBATANG ------------- **/
        $durianSebatang = Village::create([
            'name' => 'Desa Durian Sebatang',
            'district_id' => $kecamatanSeponti->id,
            'voting_zone_id' => $kecamatanSeponti->voting_zone_id,
            'city_id' => $kecamatanSeponti->city_id,
        ]);

        for ($i = 1; $i <= 5; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $durianSebatang->id,
                'district_id' => $durianSebatang->district_id,
                'voting_zone_id' => $durianSebatang->voting_zone_id,
                'city_id' => $durianSebatang->city_id,
            ]);
        }
        /**-------------- DURIAN SEBATANG ------------- **/


        /**-------------- PODORUKUN ------------- **/
        $podorukun = Village::create([
            'name' => 'Desa Podorukun',
            'district_id' => $kecamatanSeponti->id,
            'voting_zone_id' => $kecamatanSeponti->voting_zone_id,
            'city_id' => $kecamatanSeponti->city_id,
        ]);

        for ($i = 1; $i <= 6; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $podorukun->id,
                'district_id' => $podorukun->district_id,
                'voting_zone_id' => $podorukun->voting_zone_id,
                'city_id' => $podorukun->city_id,
            ]);
        }
        /**-------------- PODORUKUN ------------- **/



        /**-------------- SUNGAI SEPETI ------------- **/
        $sungaiSepeti = Village::create([
            'name' => 'Desa Sungai Sepeti',
            'district_id' => $kecamatanSeponti->id,
            'voting_zone_id' => $kecamatanSeponti->voting_zone_id,
            'city_id' => $kecamatanSeponti->city_id,
        ]);

        for ($i = 1; $i <= 7; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sungaiSepeti->id,
                'district_id' => $sungaiSepeti->district_id,
                'voting_zone_id' => $sungaiSepeti->voting_zone_id,
                'city_id' => $sungaiSepeti->city_id,
            ]);
        }
        /**-------------- SUNGAI SEPETI ------------- **/



        /**-------------- SEPONTI JAYA ------------- **/
        $sepontiJaya = Village::create([
            'name' => 'Desa Seponti Jaya',
            'district_id' => $kecamatanSeponti->id,
            'voting_zone_id' => $kecamatanSeponti->voting_zone_id,
            'city_id' => $kecamatanSeponti->city_id,
        ]);

        for ($i = 1; $i <= 9; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sepontiJaya->id,
                'district_id' => $sepontiJaya->district_id,
                'voting_zone_id' => $sepontiJaya->voting_zone_id,
                'city_id' => $sepontiJaya->city_id,
            ]);
        }
        /**-------------- SEPONTI JAYA ------------- **/



        /**-------------- TELAGA ARUM ------------- **/
        $telagaArum = Village::create([
            'name' => 'Desa Telaga Arum',
            'district_id' => $kecamatanSeponti->id,
            'voting_zone_id' => $kecamatanSeponti->voting_zone_id,
            'city_id' => $kecamatanSeponti->city_id,
        ]);

        for ($i = 1; $i <= 7; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $telagaArum->id,
                'district_id' => $telagaArum->district_id,
                'voting_zone_id' => $telagaArum->voting_zone_id,
                'city_id' => $telagaArum->city_id,
            ]);
        }
        /**-------------- TELAGA ARUM ------------- **/



        /**-------------- WONOREJO ------------- **/
        $wonorejo = Village::create([
            'name' => 'Desa Wonorejo',
            'district_id' => $kecamatanSeponti->id,
            'voting_zone_id' => $kecamatanSeponti->voting_zone_id,
            'city_id' => $kecamatanSeponti->city_id,
        ]);

        for ($i = 1; $i <= 5; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $wonorejo->id,
                'district_id' => $wonorejo->district_id,
                'voting_zone_id' => $wonorejo->voting_zone_id,
                'city_id' => $wonorejo->city_id,
            ]);
        }
        /**-------------- WONOREJO ------------- **/

        /**-------------- SEPONTI (DAPIL 3) ------------- **/
    }
}
