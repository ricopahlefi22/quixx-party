<?php

namespace Database\Seeders\Village;

use App\Models\District;
use App\Models\Village;
use App\Models\VotingPlace;
use Illuminate\Database\Seeder;

class PemahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kecamatanPemahan = District::where('name', 'Pemahan')->first();

        /**-------------- KERTA BARU ------------- **/
        $kertaBaru = Village::create([
            'name' => 'Desa Kerta Baru',
            'district_id' => $kecamatanPemahan->id,
            'voting_zone_id' => $kecamatanPemahan->voting_zone_id,
            'city_id' => $kecamatanPemahan->city_id,
        ]);

        for ($i = 1; $i <= 2; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $kertaBaru->id,
                'district_id' => $kertaBaru->district_id,
                'voting_zone_id' => $kertaBaru->voting_zone_id,
                'city_id' => $kertaBaru->city_id,
            ]);
        }
        /**-------------- KERTA BARU ------------- **/


        /**-------------- LALANG PANJANG ------------- **/
        $lalangPanjang = Village::create([
            'name' => 'Desa Lalang Panjang',
            'district_id' => $kecamatanPemahan->id,
            'voting_zone_id' => $kecamatanPemahan->voting_zone_id,
            'city_id' => $kecamatanPemahan->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $lalangPanjang->id,
                'district_id' => $lalangPanjang->district_id,
                'voting_zone_id' => $lalangPanjang->voting_zone_id,
                'city_id' => $lalangPanjang->city_id,
            ]);
        }
        /**-------------- LALANG PANJANG ------------- **/



        /**-------------- MUARA GERUNGGANG ------------- **/
        $muaraGerunggang = Village::create([
            'name' => 'Desa Muara Gerunggang',
            'district_id' => $kecamatanPemahan->id,
            'voting_zone_id' => $kecamatanPemahan->voting_zone_id,
            'city_id' => $kecamatanPemahan->city_id,
        ]);

        for ($i = 1; $i <= 2; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $muaraGerunggang->id,
                'district_id' => $muaraGerunggang->district_id,
                'voting_zone_id' => $muaraGerunggang->voting_zone_id,
                'city_id' => $muaraGerunggang->city_id,
            ]);
        }
        /**-------------- MUARA GERUNGGANG ------------- **/



        /**-------------- MUARA SEMAYOK ------------- **/
        $muaraSemayok = Village::create([
            'name' => 'Desa Muara Semayok',
            'district_id' => $kecamatanPemahan->id,
            'voting_zone_id' => $kecamatanPemahan->voting_zone_id,
            'city_id' => $kecamatanPemahan->city_id,
        ]);

        for ($i = 1; $i <= 1; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $muaraSemayok->id,
                'district_id' => $muaraSemayok->district_id,
                'voting_zone_id' => $muaraSemayok->voting_zone_id,
                'city_id' => $muaraSemayok->city_id,
            ]);
        }
        /**-------------- MUARA SEMAYOK ------------- **/



        /**-------------- PEBIHINGAN ------------- **/
        $pebihingan = Village::create([
            'name' => 'Desa Pebihingan',
            'district_id' => $kecamatanPemahan->id,
            'voting_zone_id' => $kecamatanPemahan->voting_zone_id,
            'city_id' => $kecamatanPemahan->city_id,
        ]);

        for ($i = 1; $i <= 6; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $pebihingan->id,
                'district_id' => $pebihingan->district_id,
                'voting_zone_id' => $pebihingan->voting_zone_id,
                'city_id' => $pebihingan->city_id,
            ]);
        }
        /**-------------- PEBIHINGAN ------------- **/



        /**-------------- SEMAYOK BARU ------------- **/
        $semayokBaru = Village::create([
            'name' => 'Desa Semayok Baru',
            'district_id' => $kecamatanPemahan->id,
            'voting_zone_id' => $kecamatanPemahan->voting_zone_id,
            'city_id' => $kecamatanPemahan->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $semayokBaru->id,
                'district_id' => $semayokBaru->district_id,
                'voting_zone_id' => $semayokBaru->voting_zone_id,
                'city_id' => $semayokBaru->city_id,
            ]);
        }
        /**-------------- SEMAYOK BARU ------------- **/



        /**-------------- USAHA BARU ------------- **/
        $usahaBaru = Village::create([
            'name' => 'Desa Usaha Baru',
            'district_id' => $kecamatanPemahan->id,
            'voting_zone_id' => $kecamatanPemahan->voting_zone_id,
            'city_id' => $kecamatanPemahan->city_id,
        ]);

        for ($i = 1; $i <= 2; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $usahaBaru->id,
                'district_id' => $usahaBaru->district_id,
                'voting_zone_id' => $usahaBaru->voting_zone_id,
                'city_id' => $usahaBaru->city_id,
            ]);
        }
        /**-------------- USAHA BARU ------------- **/

        /**-------------- PEMAHAN (DAPIL 4) ------------- **/
    }
}
