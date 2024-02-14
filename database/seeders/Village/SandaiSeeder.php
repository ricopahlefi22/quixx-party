<?php

namespace Database\Seeders\Village;

use App\Models\District;
use App\Models\Village;
use App\Models\VotingPlace;
use Illuminate\Database\Seeder;

class SandaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kecamatanSandai = District::where('name', 'Sandai')->first();

        /**-------------- ALAM PAKUAN ------------- **/
        $alamPakuan = Village::create([
            'name' => 'Desa Alam Pakuan',
            'district_id' => $kecamatanSandai->id,
            'voting_zone_id' => $kecamatanSandai->voting_zone_id,
            'city_id' => $kecamatanSandai->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $alamPakuan->id,
                'district_id' => $alamPakuan->district_id,
                'voting_zone_id' => $alamPakuan->voting_zone_id,
                'city_id' => $alamPakuan->city_id,
            ]);
        }
        /**-------------- ALAM PAKUAN ------------- **/


        /**-------------- DEMIT ------------- **/
        $demit = Village::create([
            'name' => 'Desa Demit',
            'district_id' => $kecamatanSandai->id,
            'voting_zone_id' => $kecamatanSandai->voting_zone_id,
            'city_id' => $kecamatanSandai->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $demit->id,
                'district_id' => $demit->district_id,
                'voting_zone_id' => $demit->voting_zone_id,
                'city_id' => $demit->city_id,
            ]);
        }
        /**-------------- DEMIT ------------- **/



        /**-------------- ISTANA ------------- **/
        $istana = Village::create([
            'name' => 'Desa Istana',
            'district_id' => $kecamatanSandai->id,
            'voting_zone_id' => $kecamatanSandai->voting_zone_id,
            'city_id' => $kecamatanSandai->city_id,
        ]);

        for ($i = 1; $i <= 8; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $istana->id,
                'district_id' => $istana->district_id,
                'voting_zone_id' => $istana->voting_zone_id,
                'city_id' => $istana->city_id,
            ]);
        }
        /**-------------- ISTANA ------------- **/



        /**-------------- JAGO BERSATU ------------- **/
        $jagoBersatu = Village::create([
            'name' => 'Desa Jago Bersatu',
            'district_id' => $kecamatanSandai->id,
            'voting_zone_id' => $kecamatanSandai->voting_zone_id,
            'city_id' => $kecamatanSandai->city_id,
        ]);

        for ($i = 1; $i <= 2; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $jagoBersatu->id,
                'district_id' => $jagoBersatu->district_id,
                'voting_zone_id' => $jagoBersatu->voting_zone_id,
                'city_id' => $jagoBersatu->city_id,
            ]);
        }
        /**-------------- JAGO BERSATU ------------- **/



        /**-------------- MERIMBANG JAYA ------------- **/
        $merimbangJaya = Village::create([
            'name' => 'Desa Merimbang Jaya',
            'district_id' => $kecamatanSandai->id,
            'voting_zone_id' => $kecamatanSandai->voting_zone_id,
            'city_id' => $kecamatanSandai->city_id,
        ]);

        for ($i = 1; $i <= 5; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $merimbangJaya->id,
                'district_id' => $merimbangJaya->district_id,
                'voting_zone_id' => $merimbangJaya->voting_zone_id,
                'city_id' => $merimbangJaya->city_id,
            ]);
        }
        /**-------------- MERIMBANG JAYA ------------- **/



        /**-------------- MUARA JEKAK ------------- **/
        $muaraJekak = Village::create([
            'name' => 'Desa Muara Jekak',
            'district_id' => $kecamatanSandai->id,
            'voting_zone_id' => $kecamatanSandai->voting_zone_id,
            'city_id' => $kecamatanSandai->city_id,
        ]);

        for ($i = 1; $i <= 10; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $muaraJekak->id,
                'district_id' => $muaraJekak->district_id,
                'voting_zone_id' => $muaraJekak->voting_zone_id,
                'city_id' => $muaraJekak->city_id,
            ]);
        }
        /**-------------- MUARA JEKAK ------------- **/



        /**-------------- PENDAMAR INDAH ------------- **/
        $pendamarIndah = Village::create([
            'name' => 'Desa Pendamar Indah',
            'district_id' => $kecamatanSandai->id,
            'voting_zone_id' => $kecamatanSandai->voting_zone_id,
            'city_id' => $kecamatanSandai->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $pendamarIndah->id,
                'district_id' => $pendamarIndah->district_id,
                'voting_zone_id' => $pendamarIndah->voting_zone_id,
                'city_id' => $pendamarIndah->city_id,
            ]);
        }
        /**-------------- PENDAMAR INDAH ------------- **/



        /**-------------- DESA PENJAWAAN ------------- **/
        $penjawaan = Village::create([
            'name' => 'Desa Penjawaan',
            'district_id' => $kecamatanSandai->id,
            'voting_zone_id' => $kecamatanSandai->voting_zone_id,
            'city_id' => $kecamatanSandai->city_id,
        ]);

        for ($i = 1; $i <= 7; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $penjawaan->id,
                'district_id' => $penjawaan->district_id,
                'voting_zone_id' => $penjawaan->voting_zone_id,
                'city_id' => $penjawaan->city_id,
            ]);
        }
        /**-------------- DESA PENJAWAAN ------------- **/


        /**-------------- PETAI PATAH ------------- **/
        $petaiPatah = Village::create([
            'name' => 'Desa Petai Patah',
            'district_id' => $kecamatanSandai->id,
            'voting_zone_id' => $kecamatanSandai->voting_zone_id,
            'city_id' => $kecamatanSandai->city_id,
        ]);

        for ($i = 1; $i <= 10; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $petaiPatah->id,
                'district_id' => $petaiPatah->district_id,
                'voting_zone_id' => $petaiPatah->voting_zone_id,
                'city_id' => $petaiPatah->city_id,
            ]);
        }
        /**-------------- PETAI PATAH ------------- **/


        /**-------------- RANDAU ------------- **/
        $randau = Village::create([
            'name' => 'Desa Randau',
            'district_id' => $kecamatanSandai->id,
            'voting_zone_id' => $kecamatanSandai->voting_zone_id,
            'city_id' => $kecamatanSandai->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $randau->id,
                'district_id' => $randau->district_id,
                'voting_zone_id' => $randau->voting_zone_id,
                'city_id' => $randau->city_id,
            ]);
        }
        /**-------------- RANDAU ------------- **/



        /**-------------- RANDAU JUNGKAL ------------- **/
        $randauJungkal = Village::create([
            'name' => 'Desa Randau Jungkal',
            'district_id' => $kecamatanSandai->id,
            'voting_zone_id' => $kecamatanSandai->voting_zone_id,
            'city_id' => $kecamatanSandai->city_id,
        ]);

        for ($i = 1; $i <= 6; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $randauJungkal->id,
                'district_id' => $randauJungkal->district_id,
                'voting_zone_id' => $randauJungkal->voting_zone_id,
                'city_id' => $randauJungkal->city_id,
            ]);
        }
        /**-------------- RANDAU JUNGKAL ------------- **/





        /**-------------- DESA SANDAI ------------- **/
        $sandai = Village::create([
            'name' => 'Desa Sandai',
            'district_id' => $kecamatanSandai->id,
            'voting_zone_id' => $kecamatanSandai->voting_zone_id,
            'city_id' => $kecamatanSandai->city_id,
        ]);

        for ($i = 1; $i <= 28; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sandai->id,
                'district_id' => $sandai->district_id,
                'voting_zone_id' => $sandai->voting_zone_id,
                'city_id' => $sandai->city_id,
            ]);
        }
        /**-------------- DESA SANDAI ------------- **/



        /**-------------- DESA SANDAI KIRI ------------- **/
        $sandaiKiri = Village::create([
            'name' => 'Desa Sandai Kiri',
            'district_id' => $kecamatanSandai->id,
            'voting_zone_id' => $kecamatanSandai->voting_zone_id,
            'city_id' => $kecamatanSandai->city_id,
        ]);

        for ($i = 1; $i <= 10; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sandaiKiri->id,
                'district_id' => $sandaiKiri->district_id,
                'voting_zone_id' => $sandaiKiri->voting_zone_id,
                'city_id' => $sandaiKiri->city_id,
            ]);
        }
        /**-------------- DESA SANDAI KIRI ------------- **/

        /**-------------- SANDAI (DAPIL 3) ------------- **/
    }
}
