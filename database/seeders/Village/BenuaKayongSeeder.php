<?php

namespace Database\Seeders\Village;

use App\Models\District;
use App\Models\Village;
use App\Models\VotingPlace;
use Illuminate\Database\Seeder;

class BenuaKayongSeeder extends Seeder
{
    public function run(): void
    {
        $kecamatanBenuaKayong = District::where('name', 'Benua Kayong')->first();

        /**-------------- BANJAR ------------- **/
        $banjar = Village::create([
            'name' => 'Desa Banjar',
            'district_id' => $kecamatanBenuaKayong->id,
            'voting_zone_id' => $kecamatanBenuaKayong->voting_zone_id,
            'city_id' => $kecamatanBenuaKayong->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $banjar->id,
                'district_id' => $banjar->district_id,
                'voting_zone_id' => $banjar->voting_zone_id,
                'city_id' => $banjar->city_id,
            ]);
        }
        /**-------------- BANJAR ------------- **/


        /**-------------- BARU ------------- **/
        $desaBaru = Village::create([
            'name' => 'Desa Baru',
            'district_id' => $kecamatanBenuaKayong->id,
            'voting_zone_id' => $kecamatanBenuaKayong->voting_zone_id,
            'city_id' => $kecamatanBenuaKayong->city_id,
        ]);

        for ($i = 1; $i <= 13; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $desaBaru->id,
                'district_id' => $desaBaru->district_id,
                'voting_zone_id' => $desaBaru->voting_zone_id,
                'city_id' => $desaBaru->city_id,
            ]);
        }
        /**-------------- BARU ------------- **/



        /**-------------- KAUMAN ------------- **/
        $kauman = Village::create([
            'name' => 'Kelurahan Kauman',
            'district_id' => $kecamatanBenuaKayong->id,
            'voting_zone_id' => $kecamatanBenuaKayong->voting_zone_id,
            'city_id' => $kecamatanBenuaKayong->city_id,
        ]);

        for ($i = 1; $i <= 17; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $kauman->id,
                'district_id' => $kauman->district_id,
                'voting_zone_id' => $kauman->voting_zone_id,
                'city_id' => $kauman->city_id,
            ]);
        }
        /**-------------- KAUMAN ------------- **/



        /**-------------- KINJIL PESISIR ------------- **/
        $kinjilPesisir = Village::create([
            'name' => 'Desa Kinjil Pesisir',
            'district_id' => $kecamatanBenuaKayong->id,
            'voting_zone_id' => $kecamatanBenuaKayong->voting_zone_id,
            'city_id' => $kecamatanBenuaKayong->city_id,
        ]);

        for ($i = 1; $i <= 8; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $kinjilPesisir->id,
                'district_id' => $kinjilPesisir->district_id,
                'voting_zone_id' => $kinjilPesisir->voting_zone_id,
                'city_id' => $kinjilPesisir->city_id,
            ]);
        }
        /**-------------- KINJIL PESISIR ------------- **/



        /**-------------- MEKAR SARI ------------- **/
        $mekarSari = Village::create([
            'name' => 'Desa Mekar Sari',
            'district_id' => $kecamatanBenuaKayong->id,
            'voting_zone_id' => $kecamatanBenuaKayong->voting_zone_id,
            'city_id' => $kecamatanBenuaKayong->city_id,
        ]);

        for ($i = 1; $i <= 10; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $mekarSari->id,
                'district_id' => $mekarSari->district_id,
                'voting_zone_id' => $mekarSari->voting_zone_id,
                'city_id' => $mekarSari->city_id,
            ]);
        }
        /**-------------- MEKAR SARI ------------- **/



        /**-------------- KELURAHAN MULIA KERTA ------------- **/
        $muliaKerta = Village::create([
            'name' => 'Kelurahan Mulia Kerta',
            'district_id' => $kecamatanBenuaKayong->id,
            'voting_zone_id' => $kecamatanBenuaKayong->voting_zone_id,
            'city_id' => $kecamatanBenuaKayong->city_id,
        ]);

        for ($i = 1; $i <= 24; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $muliaKerta->id,
                'district_id' => $muliaKerta->district_id,
                'voting_zone_id' => $muliaKerta->voting_zone_id,
                'city_id' => $muliaKerta->city_id,
            ]);
        }
        /**-------------- KELURAHAN MULIA KERTA ------------- **/



        /**-------------- NEGERI BARU ------------- **/
        $negeriBaru = Village::create([
            'name' => 'Desa Negeri Baru',
            'district_id' => $kecamatanBenuaKayong->id,
            'voting_zone_id' => $kecamatanBenuaKayong->voting_zone_id,
            'city_id' => $kecamatanBenuaKayong->city_id,
        ]);

        for ($i = 1; $i <= 9; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $negeriBaru->id,
                'district_id' => $negeriBaru->district_id,
                'voting_zone_id' => $negeriBaru->voting_zone_id,
                'city_id' => $negeriBaru->city_id,
            ]);
        }
        /**-------------- NEGERI BARU ------------- **/



        /**-------------- DESA PADANG ------------- **/
        $padang = Village::create([
            'name' => 'Desa Padang',
            'district_id' => $kecamatanBenuaKayong->id,
            'voting_zone_id' => $kecamatanBenuaKayong->voting_zone_id,
            'city_id' => $kecamatanBenuaKayong->city_id,
        ]);

        for ($i = 1; $i <= 12; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $padang->id,
                'district_id' => $padang->district_id,
                'voting_zone_id' => $padang->voting_zone_id,
                'city_id' => $padang->city_id,
            ]);
        }
        /**-------------- DESA PADANG ------------- **/


        /**-------------- SUKA BARU ------------- **/
        $sukaBaru = Village::create([
            'name' => 'Desa Suka Baru',
            'district_id' => $kecamatanBenuaKayong->id,
            'voting_zone_id' => $kecamatanBenuaKayong->voting_zone_id,
            'city_id' => $kecamatanBenuaKayong->city_id,
        ]);

        for ($i = 1; $i <= 9; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sukaBaru->id,
                'district_id' => $sukaBaru->district_id,
                'voting_zone_id' => $sukaBaru->voting_zone_id,
                'city_id' => $sukaBaru->city_id,
            ]);
        }
        /**-------------- SUKA BARU ------------- **/


        /**-------------- SUNGAI KINJIL ------------- **/
        $sungaiKinjil = Village::create([
            'name' => 'Desa Sungai Kinjil',
            'district_id' => $kecamatanBenuaKayong->id,
            'voting_zone_id' => $kecamatanBenuaKayong->voting_zone_id,
            'city_id' => $kecamatanBenuaKayong->city_id,
        ]);

        for ($i = 1; $i <= 7; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sungaiKinjil->id,
                'district_id' => $sungaiKinjil->district_id,
                'voting_zone_id' => $sungaiKinjil->voting_zone_id,
                'city_id' => $sungaiKinjil->city_id,
            ]);
        }
        /**-------------- SUNGAI KINJIL ------------- **/



        /**-------------- TUAN-TUAN ------------- **/
        $tuanTuan = Village::create([
            'name' => 'kelurahan Tuan-Tuan',
            'district_id' => $kecamatanBenuaKayong->id,
            'voting_zone_id' => $kecamatanBenuaKayong->voting_zone_id,
            'city_id' => $kecamatanBenuaKayong->city_id,
        ]);

        for ($i = 1; $i <= 16; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $tuanTuan->id,
                'district_id' => $tuanTuan->district_id,
                'voting_zone_id' => $tuanTuan->voting_zone_id,
                'city_id' => $tuanTuan->city_id,
            ]);
        }
        /**-------------- TUAN-TUAN ------------- **/

        /**-------------- BENUA KAYONG (DAPIL 7) ------------- **/
    }
}
