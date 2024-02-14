<?php

namespace Database\Seeders\Village;

use App\Models\District;
use App\Models\Village;
use App\Models\VotingPlace;
use Illuminate\Database\Seeder;

class KarimataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kecamatanKarimata = District::where('name', 'Karimata')->first();

        /**-------------- BETOK ------------- **/
        $betok = Village::create([
            'name' => 'Desa Betok',
            'district_id' => $kecamatanKarimata->id,
            'voting_zone_id' => $kecamatanKarimata->voting_zone_id,
            'city_id' => $kecamatanKarimata->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $betok->id,
                'district_id' => $betok->district_id,
                'voting_zone_id' => $betok->voting_zone_id,
                'city_id' => $betok->city_id,
            ]);
        }
        /**-------------- BETOK ------------- **/


        /**-------------- PADANG ------------- **/
        $padang = Village::create([
            'name' => 'Desa Padang',
            'district_id' => $kecamatanKarimata->id,
            'voting_zone_id' => $kecamatanKarimata->voting_zone_id,
            'city_id' => $kecamatanKarimata->city_id,
        ]);

        for ($i = 1; $i <= 6; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $padang->id,
                'district_id' => $padang->district_id,
                'voting_zone_id' => $padang->voting_zone_id,
                'city_id' => $padang->city_id,
            ]);
        }
        /**-------------- PADANG ------------- **/



        /**-------------- PELAPIS ------------- **/
        $pelapis = Village::create([
            'name' => 'Desa Pelapis',
            'district_id' => $kecamatanKarimata->id,
            'voting_zone_id' => $kecamatanKarimata->voting_zone_id,
            'city_id' => $kecamatanKarimata->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $pelapis->id,
                'district_id' => $pelapis->district_id,
                'voting_zone_id' => $pelapis->voting_zone_id,
                'city_id' => $pelapis->city_id,
            ]);
        }
        /**-------------- PELAPIS ------------- **/

        /**-------------- KARIMATA (DAPIL 2) ------------- **/
    }
}
