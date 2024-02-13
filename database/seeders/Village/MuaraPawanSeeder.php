<?php

namespace Database\Seeders\Village;

use App\Models\District;
use App\Models\Village;
use App\Models\VotingPlace;
use Illuminate\Database\Seeder;

class MuaraPawanSeeder extends Seeder
{
    public function run(): void
    {
        $kecamatanMuaraPawan = District::where('name', 'Muara Pawan')->first();

        /**-------------- MAYAK ------------- **/
        $mayak = Village::create([
            'name' => 'Desa Mayak',
            'district_id' => $kecamatanMuaraPawan->id,
            'voting_zone_id' => $kecamatanMuaraPawan->voting_zone_id,
            'city_id' => $kecamatanMuaraPawan->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $mayak->id,
                'district_id' => $mayak->district_id,
                'voting_zone_id' => $mayak->voting_zone_id,
                'city_id' => $mayak->city_id,
            ]);
        }
        /**-------------- MAYAK ------------- **/


        /**-------------- SUKAMAJU ------------- **/
        $sukamaju = Village::create([
            'name' => 'Desa Sukamaju',
            'district_id' => $kecamatanMuaraPawan->id,
            'voting_zone_id' => $kecamatanMuaraPawan->voting_zone_id,
            'city_id' => $kecamatanMuaraPawan->city_id,
        ]);

        for ($i = 1; $i <= 7; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sukamaju->id,
                'district_id' => $sukamaju->district_id,
                'voting_zone_id' => $sukamaju->voting_zone_id,
                'city_id' => $sukamaju->city_id,
            ]);
        }
        /**-------------- SUKAMAJU ------------- **/



        /**-------------- SUNGAI AWAN KANAN ------------- **/
        $sungaiAwanKanan = Village::create([
            'name' => 'Desa Sungai Awan Kanan',
            'district_id' => $kecamatanMuaraPawan->id,
            'voting_zone_id' => $kecamatanMuaraPawan->voting_zone_id,
            'city_id' => $kecamatanMuaraPawan->city_id,
        ]);

        for ($i = 1; $i <= 13; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sungaiAwanKanan->id,
                'district_id' => $sungaiAwanKanan->district_id,
                'voting_zone_id' => $sungaiAwanKanan->voting_zone_id,
                'city_id' => $sungaiAwanKanan->city_id,
            ]);
        }
        /**-------------- SUNGAI AWAN KANAN ------------- **/



        /**-------------- SUNGAI AWAN KIRI------------- **/
        $sungaiAwanKiri = Village::create([
            'name' => 'Desa Sungai Awan Kiri',
            'district_id' => $kecamatanMuaraPawan->id,
            'voting_zone_id' => $kecamatanMuaraPawan->voting_zone_id,
            'city_id' => $kecamatanMuaraPawan->city_id,
        ]);

        for ($i = 1; $i <= 16; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sungaiAwanKiri->id,
                'district_id' => $sungaiAwanKiri->district_id,
                'voting_zone_id' => $sungaiAwanKiri->voting_zone_id,
                'city_id' => $sungaiAwanKiri->city_id,
            ]);
        }
        /**-------------- SUNGAI AWAN KIRI------------- **/


        /**-------------- TANJUNG PASAR ------------- **/
        $tanjungPasar = Village::create([
            'name' => 'Desa Tanjung Pasar',
            'district_id' => $kecamatanMuaraPawan->id,
            'voting_zone_id' => $kecamatanMuaraPawan->voting_zone_id,
            'city_id' => $kecamatanMuaraPawan->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $tanjungPasar->id,
                'district_id' => $tanjungPasar->district_id,
                'voting_zone_id' => $tanjungPasar->voting_zone_id,
                'city_id' => $tanjungPasar->city_id,
            ]);
        }
        /**-------------- TANJUNG PASAR ------------- **/



        /**-------------- TANJUNG PURA ------------- **/
        $tanjungPura = Village::create([
            'name' => 'Kelurahan Mulia Baru',
            'district_id' => $kecamatanMuaraPawan->id,
            'voting_zone_id' => $kecamatanMuaraPawan->voting_zone_id,
            'city_id' => $kecamatanMuaraPawan->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $tanjungPura->id,
                'district_id' => $tanjungPura->district_id,
                'voting_zone_id' => $tanjungPura->voting_zone_id,
                'city_id' => $tanjungPura->city_id,
            ]);
        }
        /**-------------- TANJUNG PURA ------------- **/



        /**-------------- TEMPURUKAN ------------- **/
        $tempurukan = Village::create([
            'name' => 'Desa Tempurukan',
            'district_id' => $kecamatanMuaraPawan->id,
            'voting_zone_id' => $kecamatanMuaraPawan->voting_zone_id,
            'city_id' => $kecamatanMuaraPawan->city_id,
        ]);

        for ($i = 1; $i <= 8; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $tempurukan->id,
                'district_id' => $tempurukan->district_id,
                'voting_zone_id' => $tempurukan->voting_zone_id,
                'city_id' => $tempurukan->city_id,
            ]);
        }
        /**-------------- TEMPURUKAN ------------- **/



        /**-------------- ULAK MEDANG ------------- **/
        $ulakMedang = Village::create([
            'name' => 'Desa Ulak Medang',
            'district_id' => $kecamatanMuaraPawan->id,
            'voting_zone_id' => $kecamatanMuaraPawan->voting_zone_id,
            'city_id' => $kecamatanMuaraPawan->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $ulakMedang->id,
                'district_id' => $ulakMedang->district_id,
                'voting_zone_id' => $ulakMedang->voting_zone_id,
                'city_id' => $ulakMedang->city_id,
            ]);
        }
        /**-------------- ULAK MEDANG ------------- **/

        /**-------------- MUARA PAWAN (DAPIL 1) ------------- **/
    }
}
