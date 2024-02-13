<?php

namespace Database\Seeders\Village;

use App\Models\District;
use App\Models\Village;
use App\Models\VotingPlace;
use Illuminate\Database\Seeder;

class MatanHilirUtaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kecamatanMatanHilirUtara = District::where('name', 'Matan Hilir Utara')->first();

        /**-------------- KUALA SATONG ------------- **/
        $kualaSatong = Village::create([
            'name' => 'Desa Kuala Satong',
            'district_id' => $kecamatanMatanHilirUtara->id,
            'voting_zone_id' => $kecamatanMatanHilirUtara->voting_zone_id,
            'city_id' => $kecamatanMatanHilirUtara->city_id,
        ]);

        for ($i = 1; $i <= 9; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $kualaSatong->id,
                'district_id' => $kualaSatong->district_id,
                'voting_zone_id' => $kualaSatong->voting_zone_id,
                'city_id' => $kualaSatong->city_id,
            ]);
        }
        /**-------------- KUALA SATONG ------------- **/


        /**-------------- KUALA TOLAK ------------- **/
        $kualaTolak = Village::create([
            'name' => 'Desa Kuala Tolak',
            'district_id' => $kecamatanMatanHilirUtara->id,
            'voting_zone_id' => $kecamatanMatanHilirUtara->voting_zone_id,
            'city_id' => $kecamatanMatanHilirUtara->city_id,
        ]);

        for ($i = 1; $i <= 14; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $kualaTolak->id,
                'district_id' => $kualaTolak->district_id,
                'voting_zone_id' => $kualaTolak->voting_zone_id,
                'city_id' => $kualaTolak->city_id,
            ]);
        }
        /**-------------- KUALA TOLAK ------------- **/


        /**-------------- LAMAN SATONG ------------- **/
        $lamanSatong = Village::create([
            'name' => 'Desa Laman Satong',
            'district_id' => $kecamatanMatanHilirUtara->id,
            'voting_zone_id' => $kecamatanMatanHilirUtara->voting_zone_id,
            'city_id' => $kecamatanMatanHilirUtara->city_id,
        ]);

        for ($i = 1; $i <= 11; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $lamanSatong->id,
                'district_id' => $lamanSatong->district_id,
                'voting_zone_id' => $lamanSatong->voting_zone_id,
                'city_id' => $lamanSatong->city_id,
            ]);
        }
        /**-------------- LAMAN SATONG ------------- **/



        /**-------------- SUNGAI PUTRI ------------- **/
        $sungaiPutri = Village::create([
            'name' => 'Desa Gahang',
            'district_id' => $kecamatanMatanHilirUtara->id,
            'voting_zone_id' => $kecamatanMatanHilirUtara->voting_zone_id,
            'city_id' => $kecamatanMatanHilirUtara->city_id,
        ]);

        for ($i = 1; $i <= 8; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sungaiPutri->id,
                'district_id' => $sungaiPutri->district_id,
                'voting_zone_id' => $sungaiPutri->voting_zone_id,
                'city_id' => $sungaiPutri->city_id,
            ]);
        }
        /**-------------- SUNGAI PUTRI ------------- **/


        /**-------------- TANJUNG BAIK BUDI ------------- **/
        $tanjungBaikBudi = Village::create([
            'name' => 'Desa Tanjung Baik Budi',
            'district_id' => $kecamatanMatanHilirUtara->id,
            'voting_zone_id' => $kecamatanMatanHilirUtara->voting_zone_id,
            'city_id' => $kecamatanMatanHilirUtara->city_id,
        ]);

        for ($i = 1; $i <= 12; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $tanjungBaikBudi->id,
                'district_id' => $tanjungBaikBudi->district_id,
                'voting_zone_id' => $tanjungBaikBudi->voting_zone_id,
                'city_id' => $tanjungBaikBudi->city_id,
            ]);
        }
        /**-------------- TANJUNG BAIK BUDI ------------- **/

        /**-------------- MATAN HILIR UTARA (DAPIL 1) ------------- **/
    }
}
