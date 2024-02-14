<?php

namespace Database\Seeders\Village;

use App\Models\District;
use App\Models\Village;
use App\Models\VotingPlace;
use Illuminate\Database\Seeder;

class TelukBatangSeeder extends Seeder
{
    public function run(): void
    {
        $kecamatanTelukBatang = District::where('name', 'Teluk Batang')->first();

        /**-------------- ALUR BANDUNG ------------- **/
        $alurBandung = Village::create([
            'name' => 'Desa Alur Bandung',
            'district_id' => $kecamatanTelukBatang->id,
            'voting_zone_id' => $kecamatanTelukBatang->voting_zone_id,
            'city_id' => $kecamatanTelukBatang->city_id,
        ]);

        for ($i = 1; $i <= 8; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $alurBandung->id,
                'district_id' => $alurBandung->district_id,
                'voting_zone_id' => $alurBandung->voting_zone_id,
                'city_id' => $alurBandung->city_id,
            ]);
        }
        /**-------------- ALUR BANDUNG ------------- **/


        /**-------------- BANYU ABANG ------------- **/
        $banyuAbang = Village::create([
            'name' => 'Desa Banyu Abang',
            'district_id' => $kecamatanTelukBatang->id,
            'voting_zone_id' => $kecamatanTelukBatang->voting_zone_id,
            'city_id' => $kecamatanTelukBatang->city_id,
        ]);

        for ($i = 1; $i <= 9; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $banyuAbang->id,
                'district_id' => $banyuAbang->district_id,
                'voting_zone_id' => $banyuAbang->voting_zone_id,
                'city_id' => $banyuAbang->city_id,
            ]);
        }
        /**-------------- BANYU ABANG ------------- **/



        /**-------------- MASBANGUN ------------- **/
        $masbangun = Village::create([
            'name' => 'Desa Masbangun',
            'district_id' => $kecamatanTelukBatang->id,
            'voting_zone_id' => $kecamatanTelukBatang->voting_zone_id,
            'city_id' => $kecamatanTelukBatang->city_id,
        ]);

        for ($i = 1; $i <= 11; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $masbangun->id,
                'district_id' => $masbangun->district_id,
                'voting_zone_id' => $masbangun->voting_zone_id,
                'city_id' => $masbangun->city_id,
            ]);
        }
        /**-------------- MASBANGUN ------------- **/



        /**-------------- SUNGAI PADUAN ------------- **/
        $sungaiPaduan = Village::create([
            'name' => 'Desa Sungai Paduan',
            'district_id' => $kecamatanTelukBatang->id,
            'voting_zone_id' => $kecamatanTelukBatang->voting_zone_id,
            'city_id' => $kecamatanTelukBatang->city_id,
        ]);

        for ($i = 1; $i <= 12; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sungaiPaduan->id,
                'district_id' => $sungaiPaduan->district_id,
                'voting_zone_id' => $sungaiPaduan->voting_zone_id,
                'city_id' => $sungaiPaduan->city_id,
            ]);
        }
        /**-------------- SUNGAI PADUAN ------------- **/



        /**-------------- TELUK BATANG ------------- **/
        $telukBatang = Village::create([
            'name' => 'Desa Teluk Batang',
            'district_id' => $kecamatanTelukBatang->id,
            'voting_zone_id' => $kecamatanTelukBatang->voting_zone_id,
            'city_id' => $kecamatanTelukBatang->city_id,
        ]);

        for ($i = 1; $i <= 11; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $telukBatang->id,
                'district_id' => $telukBatang->district_id,
                'voting_zone_id' => $telukBatang->voting_zone_id,
                'city_id' => $telukBatang->city_id,
            ]);
        }
        /**-------------- TELUK BATANG ------------- **/



        /**-------------- TELUK BATANG SELATAN ------------- **/
        $telukBatangSelatan = Village::create([
            'name' => 'Desa Teluk Batang Selatan',
            'district_id' => $kecamatanTelukBatang->id,
            'voting_zone_id' => $kecamatanTelukBatang->voting_zone_id,
            'city_id' => $kecamatanTelukBatang->city_id,
        ]);

        for ($i = 1; $i <= 9; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $telukBatangSelatan->id,
                'district_id' => $telukBatangSelatan->district_id,
                'voting_zone_id' => $telukBatangSelatan->voting_zone_id,
                'city_id' => $telukBatangSelatan->city_id,
            ]);
        }
        /**-------------- TELUK BATANG SELATAN ------------- **/


        /**-------------- TELUK BATANG UTARA ------------- **/
        $telukBatangUtara = Village::create([
            'name' => 'Desa Teluk Batang Utara',
            'district_id' => $kecamatanTelukBatang->id,
            'voting_zone_id' => $kecamatanTelukBatang->voting_zone_id,
            'city_id' => $kecamatanTelukBatang->city_id,
        ]);

        for ($i = 1; $i <= 9; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $telukBatangUtara->id,
                'district_id' => $telukBatangUtara->district_id,
                'voting_zone_id' => $telukBatangUtara->voting_zone_id,
                'city_id' => $telukBatangUtara->city_id,
            ]);
        }
        /**-------------- TELUK BATANG UTARA ------------- **/

        /**-------------- TELUK BATANG (DAPIL 3) ------------- **/
    }
}
