<?php

namespace Database\Seeders\Village;

use App\Models\District;
use App\Models\Village;
use App\Models\VotingPlace;
use Illuminate\Database\Seeder;

class HuluSungaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kecamatanHuluSungai = District::where('name', 'Hulu Sungai')->first();

        /**-------------- BATU LAPIS ------------- **/
        $batuLapis = Village::create([
            'name' => 'Desa Batu Lapis',
            'district_id' => $kecamatanHuluSungai->id,
            'voting_zone_id' => $kecamatanHuluSungai->voting_zone_id,
            'city_id' => $kecamatanHuluSungai->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $batuLapis->id,
                'district_id' => $batuLapis->district_id,
                'voting_zone_id' => $batuLapis->voting_zone_id,
                'city_id' => $batuLapis->city_id,
            ]);
        }
        /**-------------- BATU LAPIS ------------- **/


        /**-------------- BEGINCI DARAT ------------- **/
        $beginciDarat = Village::create([
            'name' => 'Desa Beginci Darat',
            'district_id' => $kecamatanHuluSungai->id,
            'voting_zone_id' => $kecamatanHuluSungai->voting_zone_id,
            'city_id' => $kecamatanHuluSungai->city_id,
        ]);

        for ($i = 1; $i <= 2; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $beginciDarat->id,
                'district_id' => $beginciDarat->district_id,
                'voting_zone_id' => $beginciDarat->voting_zone_id,
                'city_id' => $beginciDarat->city_id,
            ]);
        }
        /**-------------- BEGINCI DARAT ------------- **/



        /**-------------- BENUA KRIO ------------- **/
        $benuaKrio = Village::create([
            'name' => 'Desa Benua Krio',
            'district_id' => $kecamatanHuluSungai->id,
            'voting_zone_id' => $kecamatanHuluSungai->voting_zone_id,
            'city_id' => $kecamatanHuluSungai->city_id,
        ]);

        for ($i = 1; $i <= 6; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $benuaKrio->id,
                'district_id' => $benuaKrio->district_id,
                'voting_zone_id' => $benuaKrio->voting_zone_id,
                'city_id' => $benuaKrio->city_id,
            ]);
        }
        /**-------------- BENUA KRIO ------------- **/



        /**-------------- CINTA MANIS ------------- **/
        $cintaManis = Village::create([
            'name' => 'Desa Cinta Manis',
            'district_id' => $kecamatanHuluSungai->id,
            'voting_zone_id' => $kecamatanHuluSungai->voting_zone_id,
            'city_id' => $kecamatanHuluSungai->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $cintaManis->id,
                'district_id' => $cintaManis->district_id,
                'voting_zone_id' => $cintaManis->voting_zone_id,
                'city_id' => $cintaManis->city_id,
            ]);
        }
        /**-------------- CINTA MANIS ------------- **/



        /**-------------- KENYABUR ------------- **/
        $kenyabur = Village::create([
            'name' => 'Desa Kenyabur',
            'district_id' => $kecamatanHuluSungai->id,
            'voting_zone_id' => $kecamatanHuluSungai->voting_zone_id,
            'city_id' => $kecamatanHuluSungai->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $kenyabur->id,
                'district_id' => $kenyabur->district_id,
                'voting_zone_id' => $kenyabur->voting_zone_id,
                'city_id' => $kenyabur->city_id,
            ]);
        }
        /**-------------- KENYABUR ------------- **/



        /**-------------- DESA KRIO HULU ------------- **/
        $krioHulu = Village::create([
            'name' => 'Desa Krio Hulu',
            'district_id' => $kecamatanHuluSungai->id,
            'voting_zone_id' => $kecamatanHuluSungai->voting_zone_id,
            'city_id' => $kecamatanHuluSungai->city_id,
        ]);

        for ($i = 1; $i <= 6; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $krioHulu->id,
                'district_id' => $krioHulu->district_id,
                'voting_zone_id' => $krioHulu->voting_zone_id,
                'city_id' => $krioHulu->city_id,
            ]);
        }
        /**-------------- DESA KRIO HULU ------------- **/



        /**-------------- LUBUK KAKAP ------------- **/
        $lubukKakap = Village::create([
            'name' => 'Desa Lubuk Kakap',
            'district_id' => $kecamatanHuluSungai->id,
            'voting_zone_id' => $kecamatanHuluSungai->voting_zone_id,
            'city_id' => $kecamatanHuluSungai->city_id,
        ]);

        for ($i = 1; $i <= 2; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $lubukKakap->id,
                'district_id' => $lubukKakap->district_id,
                'voting_zone_id' => $lubukKakap->voting_zone_id,
                'city_id' => $lubukKakap->city_id,
            ]);
        }
        /**-------------- LUBUK KAKAP ------------- **/



        /**-------------- MENYUMBUNG ------------- **/
        $menyumbung = Village::create([
            'name' => 'Desa Menyumbung',
            'district_id' => $kecamatanHuluSungai->id,
            'voting_zone_id' => $kecamatanHuluSungai->voting_zone_id,
            'city_id' => $kecamatanHuluSungai->city_id,
        ]);

        for ($i = 1; $i <= 7; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $menyumbung->id,
                'district_id' => $menyumbung->district_id,
                'voting_zone_id' => $menyumbung->voting_zone_id,
                'city_id' => $menyumbung->city_id,
            ]);
        }
        /**-------------- MENYUMBUNG ------------- **/


        /**-------------- DESA RIAM DADAP ------------- **/
        $riamDadap = Village::create([
            'name' => 'Desa Riam Dadap',
            'district_id' => $kecamatanHuluSungai->id,
            'voting_zone_id' => $kecamatanHuluSungai->voting_zone_id,
            'city_id' => $kecamatanHuluSungai->city_id,
        ]);

        for ($i = 1; $i <= 2; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $riamDadap->id,
                'district_id' => $riamDadap->district_id,
                'voting_zone_id' => $riamDadap->voting_zone_id,
                'city_id' => $riamDadap->city_id,
            ]);
        }
        /**-------------- DESA RIAM DADAP ------------- **/


        /**-------------- DESA SEKUKUN ------------- **/
        $sekukun = Village::create([
            'name' => 'Desa Sekukun',
            'district_id' => $kecamatanHuluSungai->id,
            'voting_zone_id' => $kecamatanHuluSungai->voting_zone_id,
            'city_id' => $kecamatanHuluSungai->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sekukun->id,
                'district_id' => $sekukun->district_id,
                'voting_zone_id' => $sekukun->voting_zone_id,
                'city_id' => $sekukun->city_id,
            ]);
        }
        /**-------------- DESA SEKUKUN ------------- **/


        /**-------------- DESA SENDURUHAN ------------- **/
        $senduruhan = Village::create([
            'name' => 'Desa Senduruhan',
            'district_id' => $kecamatanHuluSungai->id,
            'voting_zone_id' => $kecamatanHuluSungai->voting_zone_id,
            'city_id' => $kecamatanHuluSungai->city_id,
        ]);

        for ($i = 1; $i <= 5; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $senduruhan->id,
                'district_id' => $senduruhan->district_id,
                'voting_zone_id' => $senduruhan->voting_zone_id,
                'city_id' => $senduruhan->city_id,
            ]);
        }
        /**-------------- DESA SENDURUHAN ------------- **/


        /**-------------- DESA SUNGE BENGARAS ------------- **/
        $sungeBengaras = Village::create([
            'name' => 'Desa Sunge Bengaras',
            'district_id' => $kecamatanHuluSungai->id,
            'voting_zone_id' => $kecamatanHuluSungai->voting_zone_id,
            'city_id' => $kecamatanHuluSungai->city_id,
        ]);

        for ($i = 1; $i <= 6; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sungeBengaras->id,
                'district_id' => $sungeBengaras->district_id,
                'voting_zone_id' => $sungeBengaras->voting_zone_id,
                'city_id' => $sungeBengaras->city_id,
            ]);
        }
        /**-------------- DESA SUNGE BENGARAS ------------- **/

        /**-------------- HULU SUNGAI (DAPIL 3) ------------- **/
    }
}
