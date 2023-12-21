<?php

namespace Database\Seeders\Village;

use App\Models\District;
use App\Models\Village;
use App\Models\VotingPlace;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeltaPawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $deltaPawan = District::where('name', 'Delta Pawan')->first();

        /**-------------- KALINILAM ------------- **/
        $kalinilam = Village::create([
            'name' => 'Desa Kalinilam',
            'district_id' => $deltaPawan->district_id,
            'voting_zone_id' => $deltaPawan->voting_zone_id,
            'city_id' => $deltaPawan->city_id,
        ]);

        for ($i = 1; $i <= 33; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $kalinilam->village_id,
                'district_id' => $kalinilam->district_id,
                'voting_zone_id' => $kalinilam->voting_zone_id,
                'city_id' => $kalinilam->city_id,
            ]);
        }
        /**-------------- KALINILAM ------------- **/


        /**-------------- PAYA KUMANG ------------- **/
        $payaKumang = Village::create([
            'name' => 'Desa Paya Kumang',
            'district_id' => $deltaPawan->district_id,
            'voting_zone_id' => $deltaPawan->voting_zone_id,
            'city_id' => $deltaPawan->city_id,
        ]);

        for ($i = 1; $i <= 18; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $payaKumang->village_id,
                'district_id' => $payaKumang->district_id,
                'voting_zone_id' => $payaKumang->voting_zone_id,
                'city_id' => $payaKumang->city_id,
            ]);
        }
        /**-------------- PAYA KUMANG ------------- **/



        /**-------------- SUKABANGUN ------------- **/
        $sukabangun = Village::create([
            'name' => 'Desa Sukabangun',
            'district_id' => $deltaPawan->district_id,
            'voting_zone_id' => $deltaPawan->voting_zone_id,
            'city_id' => $deltaPawan->city_id,
        ]);

        for ($i = 1; $i <= 23; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sukabangun->village_id,
                'district_id' => $sukabangun->district_id,
                'voting_zone_id' => $sukabangun->voting_zone_id,
                'city_id' => $sukabangun->city_id,
            ]);
        }
        /**-------------- SUKABANGUN ------------- **/



        /**-------------- SUKABANGUN DALAM ------------- **/
        $sukabangunDalam = Village::create([
            'name' => 'Desa Sukabangun Dalam',
            'district_id' => $deltaPawan->district_id,
            'voting_zone_id' => $deltaPawan->voting_zone_id,
            'city_id' => $deltaPawan->city_id,
        ]);

        for ($i = 1; $i <= 11; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sukabangunDalam->village_id,
                'district_id' => $sukabangunDalam->district_id,
                'voting_zone_id' => $sukabangunDalam->voting_zone_id,
                'city_id' => $sukabangunDalam->city_id,
            ]);
        }
        /**-------------- SUKABANGUN DALAM ------------- **/



        /**-------------- KELURAHAN KANTOR ------------- **/
        $kantor = Village::create([
            'name' => 'Kelurahan Kantor',
            'district_id' => $deltaPawan->district_id,
            'voting_zone_id' => $deltaPawan->voting_zone_id,
            'city_id' => $deltaPawan->city_id,
        ]);

        for ($i = 1; $i <= 17; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $kantor->village_id,
                'district_id' => $kantor->district_id,
                'voting_zone_id' => $kantor->voting_zone_id,
                'city_id' => $kantor->city_id,
            ]);
        }
        /**-------------- KELURAHAN KANTOR ------------- **/



        /**-------------- KELURAHAN MULIA BARU ------------- **/
        $muliaBaru = Village::create([
            'name' => 'Kelurahan Mulia Baru',
            'district_id' => $deltaPawan->district_id,
            'voting_zone_id' => $deltaPawan->voting_zone_id,
            'city_id' => $deltaPawan->city_id,
        ]);

        for ($i = 1; $i <= 34; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $muliaBaru->village_id,
                'district_id' => $muliaBaru->district_id,
                'voting_zone_id' => $muliaBaru->voting_zone_id,
                'city_id' => $muliaBaru->city_id,
            ]);
        }
        /**-------------- KELURAHAN MULIA BARU ------------- **/



        /**-------------- KELURAHAN SAMPIT ------------- **/
        $sampit = Village::create([
            'name' => 'Kelurahan Sampit',
            'district_id' => $deltaPawan->district_id,
            'voting_zone_id' => $deltaPawan->voting_zone_id,
            'city_id' => $deltaPawan->city_id,
        ]);

        for ($i = 1; $i <= 44; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sampit->village_id,
                'district_id' => $sampit->district_id,
                'voting_zone_id' => $sampit->voting_zone_id,
                'city_id' => $sampit->city_id,
            ]);
        }
        /**-------------- KELURAHAN SAMPIT ------------- **/



        /**-------------- KELURAHAN SUKAHARJA ------------- **/
        $sukaharja = Village::create([
            'name' => 'Kelurahan Sukaharja',
            'district_id' => $deltaPawan->district_id,
            'voting_zone_id' => $deltaPawan->voting_zone_id,
            'city_id' => $deltaPawan->city_id,
        ]);

        for ($i = 1; $i <= 45; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sukaharja->village_id,
                'district_id' => $sukaharja->district_id,
                'voting_zone_id' => $sukaharja->voting_zone_id,
                'city_id' => $sukaharja->city_id,
            ]);
        }

        VotingPlace::create([
            'name' => 'TPS 901',
            'village_id' => $sukaharja->village_id,
            'district_id' => $sukaharja->district_id,
            'voting_zone_id' => $sukaharja->voting_zone_id,
            'city_id' => $sukaharja->city_id,
        ]);

        VotingPlace::create([
            'name' => 'TPS 902',
            'village_id' => $sukaharja->village_id,
            'district_id' => $sukaharja->district_id,
            'voting_zone_id' => $sukaharja->voting_zone_id,
            'city_id' => $sukaharja->city_id,
        ]);

        VotingPlace::create([
            'name' => 'TPS 903',
            'village_id' => $sukaharja->village_id,
            'district_id' => $sukaharja->district_id,
            'voting_zone_id' => $sukaharja->voting_zone_id,
            'city_id' => $sukaharja->city_id,
        ]);
        /**-------------- KELURAHAN SUKAHARJA ------------- **/


        /**-------------- KELURAHAN TENGAH ------------- **/
        $sukaharja = Village::create([
            'name' => 'Kelurahan Tengah',
            'district_id' => $deltaPawan->district_id,
            'voting_zone_id' => $deltaPawan->voting_zone_id,
            'city_id' => $deltaPawan->city_id,
        ]);

        for ($i = 1; $i <= 19; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sukaharja->village_id,
                'district_id' => $sukaharja->district_id,
                'voting_zone_id' => $sukaharja->voting_zone_id,
                'city_id' => $sukaharja->city_id,
            ]);
        }
        /**-------------- KELURAHAN TENGAH ------------- **/

        /**-------------- DELTA PAWAN (DAPIL 1) ------------- **/
    }
}
