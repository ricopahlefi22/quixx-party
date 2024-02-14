<?php

namespace Database\Seeders\Village;

use App\Models\District;
use App\Models\Village;
use App\Models\VotingPlace;
use Illuminate\Database\Seeder;

class PulauMayaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kecamatanPulauMaya = District::where('name', 'Pulau Maya')->first();

        /**-------------- DUSUN BESAR ------------- **/
        $dusunBesar = Village::create([
            'name' => 'Desa Dusun Besar',
            'district_id' => $kecamatanPulauMaya->id,
            'voting_zone_id' => $kecamatanPulauMaya->voting_zone_id,
            'city_id' => $kecamatanPulauMaya->city_id,
        ]);

        for ($i = 1; $i <= 12; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $dusunBesar->id,
                'district_id' => $dusunBesar->district_id,
                'voting_zone_id' => $dusunBesar->voting_zone_id,
                'city_id' => $dusunBesar->city_id,
            ]);
        }
        /**-------------- DUSUN BESAR ------------- **/


        /**-------------- DUSUN KECIL ------------- **/
        $dusunKecil = Village::create([
            'name' => 'Desa Dusun Kecil',
            'district_id' => $kecamatanPulauMaya->id,
            'voting_zone_id' => $kecamatanPulauMaya->voting_zone_id,
            'city_id' => $kecamatanPulauMaya->city_id,
        ]);

        for ($i = 1; $i <= 8; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $dusunKecil->id,
                'district_id' => $dusunKecil->district_id,
                'voting_zone_id' => $dusunKecil->voting_zone_id,
                'city_id' => $dusunKecil->city_id,
            ]);
        }
        /**-------------- DUSUN KECIL ------------- **/



        /**-------------- KEMBOJA ------------- **/
        $kemboja = Village::create([
            'name' => 'Desa Kemboja',
            'district_id' => $kecamatanPulauMaya->id,
            'voting_zone_id' => $kecamatanPulauMaya->voting_zone_id,
            'city_id' => $kecamatanPulauMaya->city_id,
        ]);

        for ($i = 1; $i <= 11; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $kemboja->id,
                'district_id' => $kemboja->district_id,
                'voting_zone_id' => $kemboja->voting_zone_id,
                'city_id' => $kemboja->city_id,
            ]);
        }
        /**-------------- KEMBOJA ------------- **/



        /**-------------- SATAI LESTARI ------------- **/
        $sataiLestari = Village::create([
            'name' => 'Desa Satai Lestari',
            'district_id' => $kecamatanPulauMaya->id,
            'voting_zone_id' => $kecamatanPulauMaya->voting_zone_id,
            'city_id' => $kecamatanPulauMaya->city_id,
        ]);

        for ($i = 1; $i <= 11; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sataiLestari->id,
                'district_id' => $sataiLestari->district_id,
                'voting_zone_id' => $sataiLestari->voting_zone_id,
                'city_id' => $sataiLestari->city_id,
            ]);
        }
        /**-------------- SATAI LESTARI ------------- **/



        /**-------------- TANJUNG SATAI ------------- **/
        $tanjungSatai = Village::create([
            'name' => 'Desa Tanjung Satai',
            'district_id' => $kecamatanPulauMaya->id,
            'voting_zone_id' => $kecamatanPulauMaya->voting_zone_id,
            'city_id' => $kecamatanPulauMaya->city_id,
        ]);

        for ($i = 1; $i <= 8; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $tanjungSatai->id,
                'district_id' => $tanjungSatai->district_id,
                'voting_zone_id' => $tanjungSatai->voting_zone_id,
                'city_id' => $tanjungSatai->city_id,
            ]);
        }
        /**-------------- TANJUNG SATAI ------------- **/

        /**-------------- PULAU MAYA (DAPIL 2) ------------- **/
    }
}
