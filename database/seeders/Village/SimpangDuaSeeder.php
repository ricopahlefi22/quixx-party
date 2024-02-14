<?php

namespace Database\Seeders\Village;

use App\Models\District;
use App\Models\Village;
use App\Models\VotingPlace;
use Illuminate\Database\Seeder;

class SimpangDuaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kecamatanSimpangDua = District::where('name', 'Simpang Dua')->first();

        /**-------------- BATU DAYA ------------- **/
        $batuDaya = Village::create([
            'name' => 'Desa Batu Daya',
            'district_id' => $kecamatanSimpangDua->id,
            'voting_zone_id' => $kecamatanSimpangDua->voting_zone_id,
            'city_id' => $kecamatanSimpangDua->city_id,
        ]);

        for ($i = 1; $i <= 2; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $batuDaya->id,
                'district_id' => $batuDaya->district_id,
                'voting_zone_id' => $batuDaya->voting_zone_id,
                'city_id' => $batuDaya->city_id,
            ]);
        }
        /**-------------- BATU DAYA ------------- **/


        /**-------------- GEMA ------------- **/
        $gema = Village::create([
            'name' => 'Desa Gema',
            'district_id' => $kecamatanSimpangDua->id,
            'voting_zone_id' => $kecamatanSimpangDua->voting_zone_id,
            'city_id' => $kecamatanSimpangDua->city_id,
        ]);

        for ($i = 1; $i <= 6; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $gema->id,
                'district_id' => $gema->district_id,
                'voting_zone_id' => $gema->voting_zone_id,
                'city_id' => $gema->city_id,
            ]);
        }
        /**-------------- GEMA ------------- **/



        /**-------------- KAMORA ------------- **/
        $kamora = Village::create([
            'name' => 'Desa Kamora',
            'district_id' => $kecamatanSimpangDua->id,
            'voting_zone_id' => $kecamatanSimpangDua->voting_zone_id,
            'city_id' => $kecamatanSimpangDua->city_id,
        ]);

        for ($i = 1; $i <= 2; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $kamora->id,
                'district_id' => $kamora->district_id,
                'voting_zone_id' => $kamora->voting_zone_id,
                'city_id' => $kamora->city_id,
            ]);
        }
        /**-------------- KAMORA ------------- **/



        /**-------------- KAMPAR SEBOMBAN ------------- **/
        $kamparSebomban = Village::create([
            'name' => 'Desa Kampar Sebomban',
            'district_id' => $kecamatanSimpangDua->id,
            'voting_zone_id' => $kecamatanSimpangDua->voting_zone_id,
            'city_id' => $kecamatanSimpangDua->city_id,
        ]);

        for ($i = 1; $i <= 8; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $kamparSebomban->id,
                'district_id' => $kamparSebomban->district_id,
                'voting_zone_id' => $kamparSebomban->voting_zone_id,
                'city_id' => $kamparSebomban->city_id,
            ]);
        }
        /**-------------- KAMPAR SEBOMBAN ------------- **/



        /**-------------- MEKAR RAYA ------------- **/
        $mekarRaya = Village::create([
            'name' => 'Desa Mekar Raya',
            'district_id' => $kecamatanSimpangDua->id,
            'voting_zone_id' => $kecamatanSimpangDua->voting_zone_id,
            'city_id' => $kecamatanSimpangDua->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $mekarRaya->id,
                'district_id' => $mekarRaya->district_id,
                'voting_zone_id' => $mekarRaya->voting_zone_id,
                'city_id' => $mekarRaya->city_id,
            ]);
        }
        /**-------------- MEKAR RAYA ------------- **/



        /**-------------- SEMANDANG KANAN ------------- **/
        $semandangKanan = Village::create([
            'name' => 'Kelurahan Mulia Kerta',
            'district_id' => $kecamatanSimpangDua->id,
            'voting_zone_id' => $kecamatanSimpangDua->voting_zone_id,
            'city_id' => $kecamatanSimpangDua->city_id,
        ]);

        for ($i = 1; $i <= 11; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $semandangKanan->id,
                'district_id' => $semandangKanan->district_id,
                'voting_zone_id' => $semandangKanan->voting_zone_id,
                'city_id' => $semandangKanan->city_id,
            ]);
        }
        /**-------------- SEMANDANG KANAN ------------- **/

        /**-------------- SIMPANG DUA (DAPIL 2) ------------- **/
    }
}
