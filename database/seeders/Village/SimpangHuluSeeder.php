<?php

namespace Database\Seeders\Village;

use App\Models\District;
use App\Models\Village;
use App\Models\VotingPlace;
use Illuminate\Database\Seeder;

class SimpangHuluSeeder extends Seeder
{
    public function run(): void
    {
        $kecamatanSimpangHulu = District::where('name', 'Simpang Hulu')->first();

        /**-------------- BALAI PINANG ------------- **/
        $balaiPinang = Village::create([
            'name' => 'Desa Balai Pinang',
            'district_id' => $kecamatanSimpangHulu->id,
            'voting_zone_id' => $kecamatanSimpangHulu->voting_zone_id,
            'city_id' => $kecamatanSimpangHulu->city_id,
        ]);

        for ($i = 1; $i <= 17; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $balaiPinang->id,
                'district_id' => $balaiPinang->district_id,
                'voting_zone_id' => $balaiPinang->voting_zone_id,
                'city_id' => $balaiPinang->city_id,
            ]);
        }
        /**-------------- BALAI PINANG ------------- **/


        /**-------------- BALAI PINANG HULU ------------- **/
        $balaiPinangHulu = Village::create([
            'name' => 'Desa Balai Pinang Hulu',
            'district_id' => $kecamatanSimpangHulu->id,
            'voting_zone_id' => $kecamatanSimpangHulu->voting_zone_id,
            'city_id' => $kecamatanSimpangHulu->city_id,
        ]);

        for ($i = 1; $i <= 8; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $balaiPinangHulu->id,
                'district_id' => $balaiPinangHulu->district_id,
                'voting_zone_id' => $balaiPinangHulu->voting_zone_id,
                'city_id' => $balaiPinangHulu->city_id,
            ]);
        }
        /**-------------- BALAI PINANG HULU ------------- **/



        /**-------------- BOTUH BOSI ------------- **/
        $botuhBosi = Village::create([
            'name' => 'Desa Botuh Bosi',
            'district_id' => $kecamatanSimpangHulu->id,
            'voting_zone_id' => $kecamatanSimpangHulu->voting_zone_id,
            'city_id' => $kecamatanSimpangHulu->city_id,
        ]);

        for ($i = 1; $i <= 7; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $botuhBosi->id,
                'district_id' => $botuhBosi->district_id,
                'voting_zone_id' => $botuhBosi->voting_zone_id,
                'city_id' => $botuhBosi->city_id,
            ]);
        }
        /**-------------- BOTUH BOSI ------------- **/



        /**-------------- KENANGA ------------- **/
        $kenanga = Village::create([
            'name' => 'Desa Kenanga',
            'district_id' => $kecamatanSimpangHulu->id,
            'voting_zone_id' => $kecamatanSimpangHulu->voting_zone_id,
            'city_id' => $kecamatanSimpangHulu->city_id,
        ]);

        for ($i = 1; $i <= 6; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $kenanga->id,
                'district_id' => $kenanga->district_id,
                'voting_zone_id' => $kenanga->voting_zone_id,
                'city_id' => $kenanga->city_id,
            ]);
        }
        /**-------------- KENANGA ------------- **/



        /**-------------- KUALAN HILIR ------------- **/
        $kualanHilir = Village::create([
            'name' => 'Desa Kualan Hilir',
            'district_id' => $kecamatanSimpangHulu->id,
            'voting_zone_id' => $kecamatanSimpangHulu->voting_zone_id,
            'city_id' => $kecamatanSimpangHulu->city_id,
        ]);

        for ($i = 1; $i <= 15; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $kualanHilir->id,
                'district_id' => $kualanHilir->district_id,
                'voting_zone_id' => $kualanHilir->voting_zone_id,
                'city_id' => $kualanHilir->city_id,
            ]);
        }
        /**-------------- KUALAN HILIR ------------- **/



        /**-------------- KUALA HULU ------------- **/
        $kualanHulu = Village::create([
            'name' => 'Desa Kualan Hulu',
            'district_id' => $kecamatanSimpangHulu->id,
            'voting_zone_id' => $kecamatanSimpangHulu->voting_zone_id,
            'city_id' => $kecamatanSimpangHulu->city_id,
        ]);

        for ($i = 1; $i <= 10; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $kualanHulu->id,
                'district_id' => $kualanHulu->district_id,
                'voting_zone_id' => $kualanHulu->voting_zone_id,
                'city_id' => $kualanHulu->city_id,
            ]);
        }
        /**-------------- KUALA HULU ------------- **/



        /**-------------- KUALAN TENGAH ------------- **/
        $kualanTengah = Village::create([
            'name' => 'Desa Kualan Tengah',
            'district_id' => $kecamatanSimpangHulu->id,
            'voting_zone_id' => $kecamatanSimpangHulu->voting_zone_id,
            'city_id' => $kecamatanSimpangHulu->city_id,
        ]);

        for ($i = 1; $i <= 13; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $kualanTengah->id,
                'district_id' => $kualanTengah->district_id,
                'voting_zone_id' => $kualanTengah->voting_zone_id,
                'city_id' => $kualanTengah->city_id,
            ]);
        }
        /**-------------- KUALAN TENGAH ------------- **/



        /**-------------- LABAI HILIR ------------- **/
        $labaiHilir = Village::create([
            'name' => 'Desa Labai Hilir',
            'district_id' => $kecamatanSimpangHulu->id,
            'voting_zone_id' => $kecamatanSimpangHulu->voting_zone_id,
            'city_id' => $kecamatanSimpangHulu->city_id,
        ]);

        for ($i = 1; $i <= 6; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $labaiHilir->id,
                'district_id' => $labaiHilir->district_id,
                'voting_zone_id' => $labaiHilir->voting_zone_id,
                'city_id' => $labaiHilir->city_id,
            ]);
        }
        /**-------------- LABAI HILIR ------------- **/


        /**-------------- LEGONG ------------- **/
        $legong = Village::create([
            'name' => 'Desa Legong',
            'district_id' => $kecamatanSimpangHulu->id,
            'voting_zone_id' => $kecamatanSimpangHulu->voting_zone_id,
            'city_id' => $kecamatanSimpangHulu->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $legong->id,
                'district_id' => $legong->district_id,
                'voting_zone_id' => $legong->voting_zone_id,
                'city_id' => $legong->city_id,
            ]);
        }
        /**-------------- LEGONG ------------- **/


        /**-------------- MERAWA ------------- **/
        $merawa = Village::create([
            'name' => 'Desa Merawa',
            'district_id' => $kecamatanSimpangHulu->id,
            'voting_zone_id' => $kecamatanSimpangHulu->voting_zone_id,
            'city_id' => $kecamatanSimpangHulu->city_id,
        ]);

        for ($i = 1; $i <= 11; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $merawa->id,
                'district_id' => $merawa->district_id,
                'voting_zone_id' => $merawa->voting_zone_id,
                'city_id' => $merawa->city_id,
            ]);
        }
        /**-------------- MERAWA ------------- **/



        /**-------------- PAOH CONCONG ------------- **/
        $paohConcong = Village::create([
            'name' => 'Desa Paoh Concong',
            'district_id' => $kecamatanSimpangHulu->id,
            'voting_zone_id' => $kecamatanSimpangHulu->voting_zone_id,
            'city_id' => $kecamatanSimpangHulu->city_id,
        ]);

        for ($i = 1; $i <= 7; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $paohConcong->id,
                'district_id' => $paohConcong->district_id,
                'voting_zone_id' => $paohConcong->voting_zone_id,
                'city_id' => $paohConcong->city_id,
            ]);
        }
        /**-------------- PAOH CONCONG ------------- **/




        /**-------------- SEKUCING KUALAN ------------- **/
        $sekucingKualan = Village::create([
            'name' => 'Desa Sekucing Kualan',
            'district_id' => $kecamatanSimpangHulu->id,
            'voting_zone_id' => $kecamatanSimpangHulu->voting_zone_id,
            'city_id' => $kecamatanSimpangHulu->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sekucingKualan->id,
                'district_id' => $sekucingKualan->district_id,
                'voting_zone_id' => $sekucingKualan->voting_zone_id,
                'city_id' => $sekucingKualan->city_id,
            ]);
        }
        /**-------------- SEKUCING KUALAN ------------- **/


        /**-------------- SEKUCING LABAI ------------- **/
        $sekucingLabai = Village::create([
            'name' => 'Desa Sekucing Labai',
            'district_id' => $kecamatanSimpangHulu->id,
            'voting_zone_id' => $kecamatanSimpangHulu->voting_zone_id,
            'city_id' => $kecamatanSimpangHulu->city_id,
        ]);

        for ($i = 1; $i <= 12; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sekucingLabai->id,
                'district_id' => $sekucingLabai->district_id,
                'voting_zone_id' => $sekucingLabai->voting_zone_id,
                'city_id' => $sekucingLabai->city_id,
            ]);
        }
        /**-------------- SEKUCING LABAI ------------- **/




        /**-------------- SEMANDANG HULU ------------- **/
        $semandangHulu = Village::create([
            'name' => 'Desa Semandang Hulu',
            'district_id' => $kecamatanSimpangHulu->id,
            'voting_zone_id' => $kecamatanSimpangHulu->voting_zone_id,
            'city_id' => $kecamatanSimpangHulu->city_id,
        ]);

        for ($i = 1; $i <= 6; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $semandangHulu->id,
                'district_id' => $semandangHulu->district_id,
                'voting_zone_id' => $semandangHulu->voting_zone_id,
                'city_id' => $semandangHulu->city_id,
            ]);
        }
        /**-------------- SEMANDANG HULU ------------- **/



         /**-------------- SEMANDANG KIRI ------------- **/
         $semandangKiri = Village::create([
            'name' => 'Desa Semandang Kiri',
            'district_id' => $kecamatanSimpangHulu->id,
            'voting_zone_id' => $kecamatanSimpangHulu->voting_zone_id,
            'city_id' => $kecamatanSimpangHulu->city_id,
        ]);

        for ($i = 1; $i <= 10; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $semandangKiri->id,
                'district_id' => $semandangKiri->district_id,
                'voting_zone_id' => $semandangKiri->voting_zone_id,
                'city_id' => $semandangKiri->city_id,
            ]);
        }
        /**-------------- SEMANDANG KIRI ------------- **/

        /**-------------- SIMPANG HULU (DAPIL 2) ------------- **/
    }
}
