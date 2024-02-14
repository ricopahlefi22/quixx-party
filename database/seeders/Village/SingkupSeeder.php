<?php

namespace Database\Seeders\Village;

use App\Models\District;
use App\Models\Village;
use App\Models\VotingPlace;
use Illuminate\Database\Seeder;

class SingkupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kecamatanSingkup = District::where('name', 'Singkup')->first();

        /**-------------- BUKIT KELAMBING ------------- **/
        $bukitKelambing = Village::create([
            'name' => 'Desa Bukit Kelambing',
            'district_id' => $kecamatanSingkup->id,
            'voting_zone_id' => $kecamatanSingkup->voting_zone_id,
            'city_id' => $kecamatanSingkup->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $bukitKelambing->id,
                'district_id' => $bukitKelambing->district_id,
                'voting_zone_id' => $bukitKelambing->voting_zone_id,
                'city_id' => $bukitKelambing->city_id,
            ]);
        }
        /**-------------- BUKIT KELAMBING ------------- **/


        /**-------------- MUNTAI ------------- **/
        $muntai = Village::create([
            'name' => 'Desa Muntai',
            'district_id' => $kecamatanSingkup->id,
            'voting_zone_id' => $kecamatanSingkup->voting_zone_id,
            'city_id' => $kecamatanSingkup->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $muntai->id,
                'district_id' => $muntai->district_id,
                'voting_zone_id' => $muntai->voting_zone_id,
                'city_id' => $muntai->city_id,
            ]);
        }
        /**-------------- MUNTAI ------------- **/



        /**-------------- PANTAI KETIKAL ------------- **/
        $pantaiKetikal = Village::create([
            'name' => 'Pantai Ketikal',
            'district_id' => $kecamatanSingkup->id,
            'voting_zone_id' => $kecamatanSingkup->voting_zone_id,
            'city_id' => $kecamatanSingkup->city_id,
        ]);

        for ($i = 1; $i <= 2; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $pantaiKetikal->id,
                'district_id' => $pantaiKetikal->district_id,
                'voting_zone_id' => $pantaiKetikal->voting_zone_id,
                'city_id' => $pantaiKetikal->city_id,
            ]);
        }
        /**-------------- PANTAI KETIKAL ------------- **/



        /**-------------- SUKA MULIA ------------- **/
        $sukaMulia = Village::create([
            'name' => 'Desa Suka Mulia',
            'district_id' => $kecamatanSingkup->id,
            'voting_zone_id' => $kecamatanSingkup->voting_zone_id,
            'city_id' => $kecamatanSingkup->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sukaMulia->id,
                'district_id' => $sukaMulia->district_id,
                'voting_zone_id' => $sukaMulia->voting_zone_id,
                'city_id' => $sukaMulia->city_id,
            ]);
        }
        /**-------------- SUKA MULIA ------------- **/



        /**-------------- SUKA SARI ------------- **/
        $sukaSari = Village::create([
            'name' => 'Desa Suka Sari',
            'district_id' => $kecamatanSingkup->id,
            'voting_zone_id' => $kecamatanSingkup->voting_zone_id,
            'city_id' => $kecamatanSingkup->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sukaSari->id,
                'district_id' => $sukaSari->district_id,
                'voting_zone_id' => $sukaSari->voting_zone_id,
                'city_id' => $sukaSari->city_id,
            ]);
        }
        /**-------------- SUKA SARI ------------- **/



        /**-------------- SUKAHARJA ------------- **/
        $sukaharja = Village::create([
            'name' => 'Desa Sukaharja',
            'district_id' => $kecamatanSingkup->id,
            'voting_zone_id' => $kecamatanSingkup->voting_zone_id,
            'city_id' => $kecamatanSingkup->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sukaharja->id,
                'district_id' => $sukaharja->district_id,
                'voting_zone_id' => $sukaharja->voting_zone_id,
                'city_id' => $sukaharja->city_id,
            ]);
        }
        /**-------------- SUKAHARJA ------------- **/



        /**-------------- SUKARAJA ------------- **/
        $sukaraja = Village::create([
            'name' => 'Desa Sukaraja',
            'district_id' => $kecamatanSingkup->id,
            'voting_zone_id' => $kecamatanSingkup->voting_zone_id,
            'city_id' => $kecamatanSingkup->city_id,
        ]);

        for ($i = 1; $i <= 5; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sukaraja->id,
                'district_id' => $sukaraja->district_id,
                'voting_zone_id' => $sukaraja->voting_zone_id,
                'city_id' => $sukaraja->city_id,
            ]);
        }
        /**-------------- SUKARAJA ------------- **/



        /**-------------- TANAH HITAM ------------- **/
        $tanahHitam = Village::create([
            'name' => 'Desa Tanah Hitam',
            'district_id' => $kecamatanSingkup->id,
            'voting_zone_id' => $kecamatanSingkup->voting_zone_id,
            'city_id' => $kecamatanSingkup->city_id,
        ]);

        for ($i = 1; $i <= 12; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $tanahHitam->id,
                'district_id' => $tanahHitam->district_id,
                'voting_zone_id' => $tanahHitam->voting_zone_id,
                'city_id' => $tanahHitam->city_id,
            ]);
        }
        /**-------------- TANAH HITAM ------------- **/

        /**-------------- SINGKUP (DAPIL 6) ------------- **/
    }
}
