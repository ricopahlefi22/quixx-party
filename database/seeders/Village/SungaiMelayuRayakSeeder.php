<?php

namespace Database\Seeders\Village;

use App\Models\District;
use App\Models\Village;
use App\Models\VotingPlace;
use Illuminate\Database\Seeder;

class SungaiMelayuRayakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kecamatanSungaiMelayuRayak = District::where('name', 'Sungai Melayu Rayak')->first();

        /**-------------- BERINGIN JAYA ------------- **/
        $beringinJaya = Village::create([
            'name' => 'Desa Beringin Jaya',
            'district_id' => $kecamatanSungaiMelayuRayak->id,
            'voting_zone_id' => $kecamatanSungaiMelayuRayak->voting_zone_id,
            'city_id' => $kecamatanSungaiMelayuRayak->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $beringinJaya->id,
                'district_id' => $beringinJaya->district_id,
                'voting_zone_id' => $beringinJaya->voting_zone_id,
                'city_id' => $beringinJaya->city_id,
            ]);
        }
        /**-------------- BERINGIN JAYA ------------- **/


        /**-------------- JAIRAN JAYA ------------- **/
        $jairanJaya = Village::create([
            'name' => 'Desa Jairan Jaya',
            'district_id' => $kecamatanSungaiMelayuRayak->id,
            'voting_zone_id' => $kecamatanSungaiMelayuRayak->voting_zone_id,
            'city_id' => $kecamatanSungaiMelayuRayak->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $jairanJaya->id,
                'district_id' => $jairanJaya->district_id,
                'voting_zone_id' => $jairanJaya->voting_zone_id,
                'city_id' => $jairanJaya->city_id,
            ]);
        }
        /**-------------- JAIRAN JAYA ------------- **/



        /**-------------- KARYA MUKTI ------------- **/
        $karyaMukti = Village::create([
            'name' => 'Desa Karya Mukti',
            'district_id' => $kecamatanSungaiMelayuRayak->id,
            'voting_zone_id' => $kecamatanSungaiMelayuRayak->voting_zone_id,
            'city_id' => $kecamatanSungaiMelayuRayak->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $karyaMukti->id,
                'district_id' => $karyaMukti->district_id,
                'voting_zone_id' => $karyaMukti->voting_zone_id,
                'city_id' => $karyaMukti->city_id,
            ]);
        }
        /**-------------- KARYA MUKTI ------------- **/



        /**-------------- KEPULUK ------------- **/
        $kepuluk = Village::create([
            'name' => 'Desa Kepuluk',
            'district_id' => $kecamatanSungaiMelayuRayak->id,
            'voting_zone_id' => $kecamatanSungaiMelayuRayak->voting_zone_id,
            'city_id' => $kecamatanSungaiMelayuRayak->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $kepuluk->id,
                'district_id' => $kepuluk->district_id,
                'voting_zone_id' => $kepuluk->voting_zone_id,
                'city_id' => $kepuluk->city_id,
            ]);
        }
        /**-------------- KEPULUK ------------- **/



        /**-------------- MAKMUR ABADI ------------- **/
        $makmurAbadi = Village::create([
            'name' => 'Desa Makmur Abadi',
            'district_id' => $kecamatanSungaiMelayuRayak->id,
            'voting_zone_id' => $kecamatanSungaiMelayuRayak->voting_zone_id,
            'city_id' => $kecamatanSungaiMelayuRayak->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $makmurAbadi->id,
                'district_id' => $makmurAbadi->district_id,
                'voting_zone_id' => $makmurAbadi->voting_zone_id,
                'city_id' => $makmurAbadi->city_id,
            ]);
        }
        /**-------------- MAKMUR ABADI ------------- **/



        /**-------------- MEKAR JAYA ------------- **/
        $mekarJaya = Village::create([
            'name' => 'Desa Mekar Jaya',
            'district_id' => $kecamatanSungaiMelayuRayak->id,
            'voting_zone_id' => $kecamatanSungaiMelayuRayak->voting_zone_id,
            'city_id' => $kecamatanSungaiMelayuRayak->city_id,
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
        /**-------------- MEKAR JAYA ------------- **/



        /**-------------- PIANSAK ------------- **/
        $piansak = Village::create([
            'name' => 'Desa Piansak',
            'district_id' => $kecamatanSungaiMelayuRayak->id,
            'voting_zone_id' => $kecamatanSungaiMelayuRayak->voting_zone_id,
            'city_id' => $kecamatanSungaiMelayuRayak->city_id,
        ]);

        for ($i = 1; $i <= 5; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $piansak->id,
                'district_id' => $piansak->district_id,
                'voting_zone_id' => $piansak->voting_zone_id,
                'city_id' => $piansak->city_id,
            ]);
        }
        /**-------------- PIANSAK ------------- **/



        /**-------------- SUKA MULYA ------------- **/
        $sukaMulya = Village::create([
            'name' => 'Desa Suka Mulya',
            'district_id' => $kecamatanSungaiMelayuRayak->id,
            'voting_zone_id' => $kecamatanSungaiMelayuRayak->voting_zone_id,
            'city_id' => $kecamatanSungaiMelayuRayak->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sukaMulya->id,
                'district_id' => $sukaMulya->district_id,
                'voting_zone_id' => $sukaMulya->voting_zone_id,
                'city_id' => $sukaMulya->city_id,
            ]);
        }
        /**-------------- SUKA MULYA ------------- **/


        /**-------------- SUNGAI MELAYU ------------- **/
        $sungaiMelayu = Village::create([
            'name' => 'Desa Sungai Melayu',
            'district_id' => $kecamatanSungaiMelayuRayak->id,
            'voting_zone_id' => $kecamatanSungaiMelayuRayak->voting_zone_id,
            'city_id' => $kecamatanSungaiMelayuRayak->city_id,
        ]);

        for ($i = 1; $i <= 10; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sungaiMelayu->id,
                'district_id' => $sungaiMelayu->district_id,
                'voting_zone_id' => $sungaiMelayu->voting_zone_id,
                'city_id' => $sungaiMelayu->city_id,
            ]);
        }
        /**-------------- SUNGAI MELAYU ------------- **/


        /**-------------- SUNGAI MELAYU BARU ------------- **/
        $sungaiMelayuBaru = Village::create([
            'name' => 'Desa Sungai Melayu Baru',
            'district_id' => $kecamatanSungaiMelayuRayak->id,
            'voting_zone_id' => $kecamatanSungaiMelayuRayak->voting_zone_id,
            'city_id' => $kecamatanSungaiMelayuRayak->city_id,
        ]);

        for ($i = 1; $i <= 5; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sungaiMelayuBaru->id,
                'district_id' => $sungaiMelayuBaru->district_id,
                'voting_zone_id' => $sungaiMelayuBaru->voting_zone_id,
                'city_id' => $sungaiMelayuBaru->city_id,
            ]);
        }
        /**-------------- SUNGAI MELAYU BARU ------------- **/



        /**-------------- SUNGAI MELAYU JAYA ------------- **/
        $sungaiMelayuJaya = Village::create([
            'name' => 'Desa Sungai Melayu Jaya',
            'district_id' => $kecamatanSungaiMelayuRayak->id,
            'voting_zone_id' => $kecamatanSungaiMelayuRayak->voting_zone_id,
            'city_id' => $kecamatanSungaiMelayuRayak->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sungaiMelayuJaya->id,
                'district_id' => $sungaiMelayuJaya->district_id,
                'voting_zone_id' => $sungaiMelayuJaya->voting_zone_id,
                'city_id' => $sungaiMelayuJaya->city_id,
            ]);
        }
        /**-------------- SUNGAI MELAYU JAYA ------------- **/

        /**-------------- SUNGAI MELAYU RAYAK (DAPIL 4) ------------- **/
    }
}
