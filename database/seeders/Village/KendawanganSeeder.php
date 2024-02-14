<?php

namespace Database\Seeders\Village;

use App\Models\District;
use App\Models\Village;
use App\Models\VotingPlace;
use Illuminate\Database\Seeder;

class KendawanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kecamatanKendawangan = District::where('name', 'Kendawangan')->first();

        /**-------------- AIR HITAM BESAR ------------- **/
        $airHitamBesar = Village::create([
            'name' => 'Desa Air Hitam Besar',
            'district_id' => $kecamatanKendawangan->id,
            'voting_zone_id' => $kecamatanKendawangan->voting_zone_id,
            'city_id' => $kecamatanKendawangan->city_id,
        ]);

        for ($i = 1; $i <= 11; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $airHitamBesar->id,
                'district_id' => $airHitamBesar->district_id,
                'voting_zone_id' => $airHitamBesar->voting_zone_id,
                'city_id' => $airHitamBesar->city_id,
            ]);
        }
        /**-------------- AIR HITAM BESAR ------------- **/


        /**-------------- AIR HITAM HULU ------------- **/
        $airHitamHulu = Village::create([
            'name' => 'Desa Air Hitam Hulu',
            'district_id' => $kecamatanKendawangan->id,
            'voting_zone_id' => $kecamatanKendawangan->voting_zone_id,
            'city_id' => $kecamatanKendawangan->city_id,
        ]);

        for ($i = 1; $i <= 7; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $airHitamHulu->id,
                'district_id' => $airHitamHulu->district_id,
                'voting_zone_id' => $airHitamHulu->voting_zone_id,
                'city_id' => $airHitamHulu->city_id,
            ]);
        }
        /**-------------- AIR HITAM HULU ------------- **/



        /**-------------- AIR TARAP ------------- **/
        $airTarap = Village::create([
            'name' => 'Desa Air Tarap',
            'district_id' => $kecamatanKendawangan->id,
            'voting_zone_id' => $kecamatanKendawangan->voting_zone_id,
            'city_id' => $kecamatanKendawangan->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $airTarap->id,
                'district_id' => $airTarap->district_id,
                'voting_zone_id' => $airTarap->voting_zone_id,
                'city_id' => $airTarap->city_id,
            ]);
        }
        /**-------------- AIR TARAP ------------- **/



        /**-------------- BANGKAL SERAI ------------- **/
        $bangkalSerai = Village::create([
            'name' => 'Desa Bangkal Serai',
            'district_id' => $kecamatanKendawangan->id,
            'voting_zone_id' => $kecamatanKendawangan->voting_zone_id,
            'city_id' => $kecamatanKendawangan->city_id,
        ]);

        for ($i = 1; $i <= 5; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $bangkalSerai->id,
                'district_id' => $bangkalSerai->district_id,
                'voting_zone_id' => $bangkalSerai->voting_zone_id,
                'city_id' => $bangkalSerai->city_id,
            ]);
        }
        /**-------------- BANGKAL SERAI ------------- **/



        /**-------------- BANJAR SARI ------------- **/
        $banjarSari = Village::create([
            'name' => 'Desa Banjar Sari',
            'district_id' => $kecamatanKendawangan->id,
            'voting_zone_id' => $kecamatanKendawangan->voting_zone_id,
            'city_id' => $kecamatanKendawangan->city_id,
        ]);

        for ($i = 1; $i <= 14; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $banjarSari->id,
                'district_id' => $banjarSari->district_id,
                'voting_zone_id' => $banjarSari->voting_zone_id,
                'city_id' => $banjarSari->city_id,
            ]);
        }
        /**-------------- BANJAR SARI ------------- **/



        /**-------------- DANAU BUNTAR ------------- **/
        $danauBuntar = Village::create([
            'name' => 'Desa Danau Buntar',
            'district_id' => $kecamatanKendawangan->id,
            'voting_zone_id' => $kecamatanKendawangan->voting_zone_id,
            'city_id' => $kecamatanKendawangan->city_id,
        ]);

        for ($i = 1; $i <= 11; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $danauBuntar->id,
                'district_id' => $danauBuntar->district_id,
                'voting_zone_id' => $danauBuntar->voting_zone_id,
                'city_id' => $danauBuntar->city_id,
            ]);
        }
        /**-------------- DANAU BUNTAR ------------- **/



        /**-------------- KEDONDONG ------------- **/
        $kedondong = Village::create([
            'name' => 'Desa Kedondong',
            'district_id' => $kecamatanKendawangan->id,
            'voting_zone_id' => $kecamatanKendawangan->voting_zone_id,
            'city_id' => $kecamatanKendawangan->city_id,
        ]);

        for ($i = 1; $i <= 6; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $kedondong->id,
                'district_id' => $kedondong->district_id,
                'voting_zone_id' => $kedondong->voting_zone_id,
                'city_id' => $kedondong->city_id,
            ]);
        }
        /**-------------- KEDONDONG ------------- **/



        /**-------------- KENDAWANGAN KANAN ------------- **/
        $kendawanganKanan = Village::create([
            'name' => 'Desa Kendawangan Kanan',
            'district_id' => $kecamatanKendawangan->id,
            'voting_zone_id' => $kecamatanKendawangan->voting_zone_id,
            'city_id' => $kecamatanKendawangan->city_id,
        ]);

        for ($i = 1; $i <= 6; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $kendawanganKanan->id,
                'district_id' => $kendawanganKanan->district_id,
                'voting_zone_id' => $kendawanganKanan->voting_zone_id,
                'city_id' => $kendawanganKanan->city_id,
            ]);
        }
        /**-------------- KENDAWANGAN KANAN ------------- **/




        /**-------------- KENDAWANGAN KIRI ------------- **/
        $kendawanganKiri = Village::create([
            'name' => 'Desa Kendawangan Kiri',
            'district_id' => $kecamatanKendawangan->id,
            'voting_zone_id' => $kecamatanKendawangan->voting_zone_id,
            'city_id' => $kecamatanKendawangan->city_id,
        ]);

        for ($i = 1; $i <= 31; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $kendawanganKiri->id,
                'district_id' => $kendawanganKiri->district_id,
                'voting_zone_id' => $kendawanganKiri->voting_zone_id,
                'city_id' => $kendawanganKiri->city_id,
            ]);
        }
        /**-------------- KENDAWANGAN KIRI ------------- **/


        /**-------------- KERAMAT JAYA ------------- **/
        $keramatJaya = Village::create([
            'name' => 'Desa Keramat Jaya',
            'district_id' => $kecamatanKendawangan->id,
            'voting_zone_id' => $kecamatanKendawangan->voting_zone_id,
            'city_id' => $kecamatanKendawangan->city_id,
        ]);

        for ($i = 1; $i <= 5; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $keramatJaya->id,
                'district_id' => $keramatJaya->district_id,
                'voting_zone_id' => $keramatJaya->voting_zone_id,
                'city_id' => $keramatJaya->city_id,
            ]);
        }
        /**-------------- KERAMAT JAYA ------------- **/


        /**-------------- MEKAR UTAMA ------------- **/
        $mekarUtama = Village::create([
            'name' => 'Desa Mekar Utama',
            'district_id' => $kecamatanKendawangan->id,
            'voting_zone_id' => $kecamatanKendawangan->voting_zone_id,
            'city_id' => $kecamatanKendawangan->city_id,
        ]);

        for ($i = 1; $i <= 23; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $mekarUtama->id,
                'district_id' => $mekarUtama->district_id,
                'voting_zone_id' => $mekarUtama->voting_zone_id,
                'city_id' => $mekarUtama->city_id,
            ]);
        }
        /**-------------- MEKAR UTAMA ------------- **/



        /**-------------- NATAI KUINI ------------- **/
        $nataiKuini = Village::create([
            'name' => 'Desa Natai Kuini',
            'district_id' => $kecamatanKendawangan->id,
            'voting_zone_id' => $kecamatanKendawangan->voting_zone_id,
            'city_id' => $kecamatanKendawangan->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $nataiKuini->id,
                'district_id' => $nataiKuini->district_id,
                'voting_zone_id' => $nataiKuini->voting_zone_id,
                'city_id' => $nataiKuini->city_id,
            ]);
        }
        /**-------------- NATAI KUINI ------------- **/




        /**-------------- PANGKALAN BATU ------------- **/
        $pangkalanBatu = Village::create([
            'name' => 'Desa Pangkalan Batu',
            'district_id' => $kecamatanKendawangan->id,
            'voting_zone_id' => $kecamatanKendawangan->voting_zone_id,
            'city_id' => $kecamatanKendawangan->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $pangkalanBatu->id,
                'district_id' => $pangkalanBatu->district_id,
                'voting_zone_id' => $pangkalanBatu->voting_zone_id,
                'city_id' => $pangkalanBatu->city_id,
            ]);
        }
        /**-------------- PANGKALAN BATU ------------- **/




        /**-------------- PEMBEDILAN ------------- **/
        $pembedilan = Village::create([
            'name' => 'Desa Pembedilan',
            'district_id' => $kecamatanKendawangan->id,
            'voting_zone_id' => $kecamatanKendawangan->voting_zone_id,
            'city_id' => $kecamatanKendawangan->city_id,
        ]);

        for ($i = 1; $i <= 8; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $pembedilan->id,
                'district_id' => $pembedilan->district_id,
                'voting_zone_id' => $pembedilan->voting_zone_id,
                'city_id' => $pembedilan->city_id,
            ]);
        }
        /**-------------- PEMBEDILAN ------------- **/


        /**-------------- SELIMANTAN JAYA ------------- **/
        $selimantanJaya = Village::create([
            'name' => 'Desa Selimantan Jaya',
            'district_id' => $kecamatanKendawangan->id,
            'voting_zone_id' => $kecamatanKendawangan->voting_zone_id,
            'city_id' => $kecamatanKendawangan->city_id,
        ]);

        for ($i = 1; $i <= 8; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $selimantanJaya->id,
                'district_id' => $selimantanJaya->district_id,
                'voting_zone_id' => $selimantanJaya->voting_zone_id,
                'city_id' => $selimantanJaya->city_id,
            ]);
        }
        /**-------------- SELIMANTAN JAYA ------------- **/




        /**-------------- SERIAM ------------- **/
        $seriam = Village::create([
            'name' => 'Desa Seriam',
            'district_id' => $kecamatanKendawangan->id,
            'voting_zone_id' => $kecamatanKendawangan->voting_zone_id,
            'city_id' => $kecamatanKendawangan->city_id,
        ]);

        for ($i = 1; $i <= 8; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $seriam->id,
                'district_id' => $seriam->district_id,
                'voting_zone_id' => $seriam->voting_zone_id,
                'city_id' => $seriam->city_id,
            ]);
        }
        /**-------------- SERIAM ------------- **/




        /**-------------- SUKA DAMAI ------------- **/
        $sukaDamai = Village::create([
            'name' => 'Desa Suka Damai',
            'district_id' => $kecamatanKendawangan->id,
            'voting_zone_id' => $kecamatanKendawangan->voting_zone_id,
            'city_id' => $kecamatanKendawangan->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sukaDamai->id,
                'district_id' => $sukaDamai->district_id,
                'voting_zone_id' => $sukaDamai->voting_zone_id,
                'city_id' => $sukaDamai->city_id,
            ]);
        }
        /**-------------- SUKA DAMAI ------------- **/




        /**-------------- SUKA HARAPAN ------------- **/
        $sukaHarapan = Village::create([
            'name' => 'Desa Suka Harapan',
            'district_id' => $kecamatanKendawangan->id,
            'voting_zone_id' => $kecamatanKendawangan->voting_zone_id,
            'city_id' => $kecamatanKendawangan->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sukaHarapan->id,
                'district_id' => $sukaHarapan->district_id,
                'voting_zone_id' => $sukaHarapan->voting_zone_id,
                'city_id' => $sukaHarapan->city_id,
            ]);
        }
        /**-------------- SUKA HARAPAN ------------- **/






        /**-------------- SUKA SUNGAI JELAYAN ------------- **/
        $sungaiJelayan = Village::create([
            'name' => 'Desa Sungai Jelayan',
            'district_id' => $kecamatanKendawangan->id,
            'voting_zone_id' => $kecamatanKendawangan->voting_zone_id,
            'city_id' => $kecamatanKendawangan->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sungaiJelayan->id,
                'district_id' => $sungaiJelayan->district_id,
                'voting_zone_id' => $sungaiJelayan->voting_zone_id,
                'city_id' => $sungaiJelayan->city_id,
            ]);
        }
        /**-------------- SUKA SUNGAI JELAYAN ------------- **/


        /**-------------- KENDAWANGAN (DAPIL 6) ------------- **/
    }
}
