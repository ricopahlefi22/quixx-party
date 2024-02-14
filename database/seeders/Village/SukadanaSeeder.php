<?php

namespace Database\Seeders\Village;

use App\Models\District;
use App\Models\Village;
use App\Models\VotingPlace;
use Illuminate\Database\Seeder;

class SukadanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kecamatanSukadana = District::where('name', 'Sukadana')->first();

        /**-------------- BENAWAI AGUNG ------------- **/
        $benawaiAgung = Village::create([
            'name' => 'Desa Benawai Agung',
            'district_id' => $kecamatanSukadana->id,
            'voting_zone_id' => $kecamatanSukadana->voting_zone_id,
            'city_id' => $kecamatanSukadana->city_id,
        ]);

        for ($i = 1; $i <= 8; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $benawaiAgung->id,
                'district_id' => $benawaiAgung->district_id,
                'voting_zone_id' => $benawaiAgung->voting_zone_id,
                'city_id' => $benawaiAgung->city_id,
            ]);
        }
        /**-------------- BENAWAI AGUNG ------------- **/


        /**-------------- GUNUNG SEMBILAN ------------- **/
        $gunungSembilan = Village::create([
            'name' => 'Desa Gunung Sembilan',
            'district_id' => $kecamatanSukadana->id,
            'voting_zone_id' => $kecamatanSukadana->voting_zone_id,
            'city_id' => $kecamatanSukadana->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $gunungSembilan->id,
                'district_id' => $gunungSembilan->district_id,
                'voting_zone_id' => $gunungSembilan->voting_zone_id,
                'city_id' => $gunungSembilan->city_id,
            ]);
        }
        /**-------------- GUNUNG SEMBILAN ------------- **/



        /**-------------- HARAPAN MULIA ------------- **/
        $harapanMulia = Village::create([
            'name' => 'Desa Harapan Mulia',
            'district_id' => $kecamatanSukadana->id,
            'voting_zone_id' => $kecamatanSukadana->voting_zone_id,
            'city_id' => $kecamatanSukadana->city_id,
        ]);

        for ($i = 1; $i <= 9; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $harapanMulia->id,
                'district_id' => $harapanMulia->district_id,
                'voting_zone_id' => $harapanMulia->voting_zone_id,
                'city_id' => $harapanMulia->city_id,
            ]);
        }
        /**-------------- HARAPAN MULIA ------------- **/



        /**-------------- PAMPANG HARAPAN ------------- **/
        $pampangHarapan = Village::create([
            'name' => 'Desa Pampang Harapan',
            'district_id' => $kecamatanSukadana->id,
            'voting_zone_id' => $kecamatanSukadana->voting_zone_id,
            'city_id' => $kecamatanSukadana->city_id,
        ]);

        for ($i = 1; $i <= 5; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $pampangHarapan->id,
                'district_id' => $pampangHarapan->district_id,
                'voting_zone_id' => $pampangHarapan->voting_zone_id,
                'city_id' => $pampangHarapan->city_id,
            ]);
        }
        /**-------------- PAMPANG HARAPAN ------------- **/



        /**-------------- PANGKALAN BUTON ------------- **/
        $pangkalanButon = Village::create([
            'name' => 'Desa Pangkalan Buton',
            'district_id' => $kecamatanSukadana->id,
            'voting_zone_id' => $kecamatanSukadana->voting_zone_id,
            'city_id' => $kecamatanSukadana->city_id,
        ]);

        for ($i = 1; $i <= 15; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $pangkalanButon->id,
                'district_id' => $pangkalanButon->district_id,
                'voting_zone_id' => $pangkalanButon->voting_zone_id,
                'city_id' => $pangkalanButon->city_id,
            ]);
        }
        /**-------------- PANGKALAN BUTON ------------- **/



        /**-------------- RIAM BERASAP JAYA ------------- **/
        $riamBerasapJaya = Village::create([
            'name' => 'Desa Riam Berasap Jaya',
            'district_id' => $kecamatanSukadana->id,
            'voting_zone_id' => $kecamatanSukadana->voting_zone_id,
            'city_id' => $kecamatanSukadana->city_id,
        ]);

        for ($i = 1; $i <= 7; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $riamBerasapJaya->id,
                'district_id' => $riamBerasapJaya->district_id,
                'voting_zone_id' => $riamBerasapJaya->voting_zone_id,
                'city_id' => $riamBerasapJaya->city_id,
            ]);
        }
        /**-------------- RIAM BERASAP JAYA ------------- **/



        /**-------------- SEJAHTERA ------------- **/
        $sejahtera = Village::create([
            'name' => 'Desa Sejahtera',
            'district_id' => $kecamatanSukadana->id,
            'voting_zone_id' => $kecamatanSukadana->voting_zone_id,
            'city_id' => $kecamatanSukadana->city_id,
        ]);

        for ($i = 1; $i <= 7; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sejahtera->id,
                'district_id' => $sejahtera->district_id,
                'voting_zone_id' => $sejahtera->voting_zone_id,
                'city_id' => $sejahtera->city_id,
            ]);
        }
        /**-------------- SEJAHTERA ------------- **/



        /**-------------- SIMPANG TIGA ------------- **/
        $simpangTiga = Village::create([
            'name' => 'Desa Simpang Tiga',
            'district_id' => $kecamatanSukadana->id,
            'voting_zone_id' => $kecamatanSukadana->voting_zone_id,
            'city_id' => $kecamatanSukadana->city_id,
        ]);

        for ($i = 1; $i <= 7; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $simpangTiga->id,
                'district_id' => $simpangTiga->district_id,
                'voting_zone_id' => $simpangTiga->voting_zone_id,
                'city_id' => $simpangTiga->city_id,
            ]);
        }
        /**-------------- SIMPANG TIGA ------------- **/


        /**-------------- SUTERA ------------- **/
        $sutera = Village::create([
            'name' => 'Desa Sutera',
            'district_id' => $kecamatanSukadana->id,
            'voting_zone_id' => $kecamatanSukadana->voting_zone_id,
            'city_id' => $kecamatanSukadana->city_id,
        ]);

        for ($i = 1; $i <= 22; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sutera->id,
                'district_id' => $sutera->district_id,
                'voting_zone_id' => $sutera->voting_zone_id,
                'city_id' => $sutera->city_id,
            ]);
        }
        /**-------------- SUTERA ------------- **/

        /**-------------- SUKADANA (DAPIL 1) ------------- **/
    }
}
