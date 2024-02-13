<?php

namespace Database\Seeders\Village;

use App\Models\District;
use App\Models\Village;
use App\Models\VotingPlace;
use Illuminate\Database\Seeder;

class AirUpasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kecamatanAirUpas = District::where('name', 'Air Upas')->first();

        /**-------------- AIR DURIAN JAYA ------------- **/
        $airDurianJaya = Village::create([
            'name' => 'Desa Air Durian Jaya',
            'district_id' => $kecamatanAirUpas->id,
            'voting_zone_id' => $kecamatanAirUpas->voting_zone_id,
            'city_id' => $kecamatanAirUpas->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $airDurianJaya->id,
                'district_id' => $airDurianJaya->district_id,
                'voting_zone_id' => $airDurianJaya->voting_zone_id,
                'city_id' => $airDurianJaya->city_id,
            ]);
        }
        /**-------------- AIR DURIAN JAYA ------------- **/


        /**-------------- AIR UPAS ------------- **/
        $airUpas = Village::create([
            'name' => 'Desa Air Upas',
            'district_id' => $kecamatanAirUpas->id,
            'voting_zone_id' => $kecamatanAirUpas->voting_zone_id,
            'city_id' => $kecamatanAirUpas->city_id,
        ]);

        for ($i = 1; $i <= 23; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $airUpas->id,
                'district_id' => $airUpas->district_id,
                'voting_zone_id' => $airUpas->voting_zone_id,
                'city_id' => $airUpas->city_id,
            ]);
        }
        /**-------------- AIR UPAS ------------- **/


        /**-------------- BANDA SARI ------------- **/
        $bandaSari = Village::create([
            'name' => 'Desa Banda Sari',
            'district_id' => $kecamatanAirUpas->id,
            'voting_zone_id' => $kecamatanAirUpas->voting_zone_id,
            'city_id' => $kecamatanAirUpas->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $bandaSari->id,
                'district_id' => $bandaSari->district_id,
                'voting_zone_id' => $bandaSari->voting_zone_id,
                'city_id' => $bandaSari->city_id,
            ]);
        }
        /**-------------- BANDA SARI ------------- **/



        /**-------------- GAHANG ------------- **/
        $gahang = Village::create([
            'name' => 'Desa Gahang',
            'district_id' => $kecamatanAirUpas->id,
            'voting_zone_id' => $kecamatanAirUpas->voting_zone_id,
            'city_id' => $kecamatanAirUpas->city_id,
        ]);

        for ($i = 1; $i <= 6; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS '.$tpsNumber,
                'village_id' => $gahang->id,
                'district_id' => $gahang->district_id,
                'voting_zone_id' => $gahang->voting_zone_id,
                'city_id' => $gahang->city_id,
            ]);
        }
        /**-------------- GAHANG ------------- **/



        /**-------------- HARAPAN BARU ------------- **/
        $harapanBaru = Village::create([
            'name' => 'Desa Harapan Baru',
            'district_id' => $kecamatanAirUpas->id,
            'voting_zone_id' => $kecamatanAirUpas->voting_zone_id,
            'city_id' => $kecamatanAirUpas->city_id,
        ]);

        for ($i = 1; $i <= 10; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $harapanBaru->id,
                'district_id' => $harapanBaru->district_id,
                'voting_zone_id' => $harapanBaru->voting_zone_id,
                'city_id' => $harapanBaru->city_id,
            ]);
        }
        /**-------------- HARAPAN BARU ------------- **/



        /**-------------- DESA MEKAR JAYA ------------- **/
        $mekarJaya = Village::create([
            'name' => 'Desa Mekar Jaya',
            'district_id' => $kecamatanAirUpas->id,
            'voting_zone_id' => $kecamatanAirUpas->voting_zone_id,
            'city_id' => $kecamatanAirUpas->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $mekarJaya->id,
                'district_id' => $mekarJaya->district_id,
                'voting_zone_id' => $mekarJaya->voting_zone_id,
                'city_id' => $mekarJaya->city_id,
            ]);
        }
        /**-------------- DESA MEKAR JAYA ------------- **/



        /**-------------- MEMBULUH BARU ------------- **/
        $membuluhBaru = Village::create([
            'name' => 'Desa Membuluh Baru',
            'district_id' => $kecamatanAirUpas->id,
            'voting_zone_id' => $kecamatanAirUpas->voting_zone_id,
            'city_id' => $kecamatanAirUpas->city_id,
        ]);

        for ($i = 1; $i <= 6; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $membuluhBaru->id,
                'district_id' => $membuluhBaru->district_id,
                'voting_zone_id' => $membuluhBaru->voting_zone_id,
                'city_id' => $membuluhBaru->city_id,
            ]);
        }
        /**-------------- MEMBULUH BARU ------------- **/


        /**-------------- SARI BEKAYAS ------------- **/
        $sariBekayas = Village::create([
            'name' => 'Desa Sari Bekayas',
            'district_id' => $kecamatanAirUpas->id,
            'voting_zone_id' => $kecamatanAirUpas->voting_zone_id,
            'city_id' => $kecamatanAirUpas->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sariBekayas->id,
                'district_id' => $sariBekayas->district_id,
                'voting_zone_id' => $sariBekayas->voting_zone_id,
                'city_id' => $sariBekayas->city_id,
            ]);
        }
        /**-------------- SARI BEKAYAS ------------- **/


        /**-------------- SUKA RIA ------------- **/
        $sukaRia = Village::create([
            'name' => 'Desa Suka Ria',
            'district_id' => $kecamatanAirUpas->id,
            'voting_zone_id' => $kecamatanAirUpas->voting_zone_id,
            'city_id' => $kecamatanAirUpas->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sukaRia->id,
                'district_id' => $sukaRia->district_id,
                'voting_zone_id' => $sukaRia->voting_zone_id,
                'city_id' => $sukaRia->city_id,
            ]);
        }
        /**-------------- SUKA RIA ------------- **/

        /**-------------- AIR UPAS (DAPIL 5) ------------- **/
    }
}
