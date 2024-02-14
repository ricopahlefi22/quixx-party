<?php

namespace Database\Seeders\Village;

use App\Models\District;
use App\Models\Village;
use App\Models\VotingPlace;
use Illuminate\Database\Seeder;

class MatanHilirSelatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kecamatanMatanHilirSelatan = District::where('name', 'Matan Hilir Selatan')->first();

        /**-------------- HARAPAN BARU ------------- **/
        $harapanBaru = Village::create([
            'name' => 'Desa Harapan Baru',
            'district_id' => $kecamatanMatanHilirSelatan->id,
            'voting_zone_id' => $kecamatanMatanHilirSelatan->voting_zone_id,
            'city_id' => $kecamatanMatanHilirSelatan->city_id,
        ]);

        for ($i = 1; $i <= 8; $i++) {
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


        /**-------------- KEMUNING BIUTAK ------------- **/
        $desaKemuningBiutak = Village::create([
            'name' => 'Desa Kemuning Biutak',
            'district_id' => $kecamatanMatanHilirSelatan->id,
            'voting_zone_id' => $kecamatanMatanHilirSelatan->voting_zone_id,
            'city_id' => $kecamatanMatanHilirSelatan->city_id,
        ]);

        for ($i = 1; $i <= 5; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $desaKemuningBiutak->id,
                'district_id' => $desaKemuningBiutak->district_id,
                'voting_zone_id' => $desaKemuningBiutak->voting_zone_id,
                'city_id' => $desaKemuningBiutak->city_id,
            ]);
        }
        /**-------------- KEMUNING BIUTAK ------------- **/



        /**-------------- PAGAR MENTIMUN ------------- **/
        $pagarMentimun = Village::create([
            'name' => 'Desa Pagar Mentimun',
            'district_id' => $kecamatanMatanHilirSelatan->id,
            'voting_zone_id' => $kecamatanMatanHilirSelatan->voting_zone_id,
            'city_id' => $kecamatanMatanHilirSelatan->city_id,
        ]);

        for ($i = 1; $i <= 2; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $pagarMentimun->id,
                'district_id' => $pagarMentimun->district_id,
                'voting_zone_id' => $pagarMentimun->voting_zone_id,
                'city_id' => $pagarMentimun->city_id,
            ]);
        }
        /**-------------- PAGAR MENTIMUN ------------- **/



        /**-------------- PEMATANG GADUNG ------------- **/
        $pematangGadung = Village::create([
            'name' => 'Desa Pematang Gadung',
            'district_id' => $kecamatanMatanHilirSelatan->id,
            'voting_zone_id' => $kecamatanMatanHilirSelatan->voting_zone_id,
            'city_id' => $kecamatanMatanHilirSelatan->city_id,
        ]);

        for ($i = 1; $i <= 9; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $pematangGadung->id,
                'district_id' => $pematangGadung->district_id,
                'voting_zone_id' => $pematangGadung->voting_zone_id,
                'city_id' => $pematangGadung->city_id,
            ]);
        }
        /**-------------- PEMATANG GADUNG ------------- **/



        /**-------------- PESAGUAN KANAN ------------- **/
        $pesaguanKanan = Village::create([
            'name' => 'Desa Pesaguan Kanan',
            'district_id' => $kecamatanMatanHilirSelatan->id,
            'voting_zone_id' => $kecamatanMatanHilirSelatan->voting_zone_id,
            'city_id' => $kecamatanMatanHilirSelatan->city_id,
        ]);

        for ($i = 1; $i <= 16; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $pesaguanKanan->id,
                'district_id' => $pesaguanKanan->district_id,
                'voting_zone_id' => $pesaguanKanan->voting_zone_id,
                'city_id' => $pesaguanKanan->city_id,
            ]);
        }
        /**-------------- PESAGUAN KANAN ------------- **/



        /**-------------- PESAGUAN KIRI ------------- **/
        $pesaguanKiri = Village::create([
            'name' => 'Desa Pesaguan Kiri',
            'district_id' => $kecamatanMatanHilirSelatan->id,
            'voting_zone_id' => $kecamatanMatanHilirSelatan->voting_zone_id,
            'city_id' => $kecamatanMatanHilirSelatan->city_id,
        ]);

        for ($i = 1; $i <= 10; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $pesaguanKiri->id,
                'district_id' => $pesaguanKiri->district_id,
                'voting_zone_id' => $pesaguanKiri->voting_zone_id,
                'city_id' => $pesaguanKiri->city_id,
            ]);
        }
        /**-------------- PESAGUAN KIRI ------------- **/



        /**-------------- SUNGAI BAKAU ------------- **/
        $sungaiBakau = Village::create([
            'name' => 'Desa Sungai Bakau',
            'district_id' => $kecamatanMatanHilirSelatan->id,
            'voting_zone_id' => $kecamatanMatanHilirSelatan->voting_zone_id,
            'city_id' => $kecamatanMatanHilirSelatan->city_id,
        ]);

        for ($i = 1; $i <= 9; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sungaiBakau->id,
                'district_id' => $sungaiBakau->district_id,
                'voting_zone_id' => $sungaiBakau->voting_zone_id,
                'city_id' => $sungaiBakau->city_id,
            ]);
        }
        /**-------------- SUNGAI BAKAU ------------- **/



        /**-------------- SUNGAI BESAR ------------- **/
        $sungaiBesar = Village::create([
            'name' => 'Desa Sungai Besar',
            'district_id' => $kecamatanMatanHilirSelatan->id,
            'voting_zone_id' => $kecamatanMatanHilirSelatan->voting_zone_id,
            'city_id' => $kecamatanMatanHilirSelatan->city_id,
        ]);

        for ($i = 1; $i <= 15; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sungaiBesar->id,
                'district_id' => $sungaiBesar->district_id,
                'voting_zone_id' => $sungaiBesar->voting_zone_id,
                'city_id' => $sungaiBesar->city_id,
            ]);
        }
        /**-------------- SUNGAI BESAR ------------- **/


        /**-------------- SUNGAI JAWI ------------- **/
        $sungaiJawi = Village::create([
            'name' => 'Desa Sungai Jawi',
            'district_id' => $kecamatanMatanHilirSelatan->id,
            'voting_zone_id' => $kecamatanMatanHilirSelatan->voting_zone_id,
            'city_id' => $kecamatanMatanHilirSelatan->city_id,
        ]);

        for ($i = 1; $i <= 10; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sungaiJawi->id,
                'district_id' => $sungaiJawi->district_id,
                'voting_zone_id' => $sungaiJawi->voting_zone_id,
                'city_id' => $sungaiJawi->city_id,
            ]);
        }
        /**-------------- SUNGAI JAWI ------------- **/


        /**-------------- SUNGAI NANJUNG ------------- **/
        $sungaiNanjung = Village::create([
            'name' => 'Desa Sungai Nanjung',
            'district_id' => $kecamatanMatanHilirSelatan->id,
            'voting_zone_id' => $kecamatanMatanHilirSelatan->voting_zone_id,
            'city_id' => $kecamatanMatanHilirSelatan->city_id,
        ]);

        for ($i = 1; $i <= 12; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sungaiNanjung->id,
                'district_id' => $sungaiNanjung->district_id,
                'voting_zone_id' => $sungaiNanjung->voting_zone_id,
                'city_id' => $sungaiNanjung->city_id,
            ]);
        }
        /**-------------- SUNGAI NANJUNG ------------- **/



        /**-------------- SUNGAI PELANG ------------- **/
        $sungaiPelang = Village::create([
            'name' => 'Desa Sungai Pelang',
            'district_id' => $kecamatanMatanHilirSelatan->id,
            'voting_zone_id' => $kecamatanMatanHilirSelatan->voting_zone_id,
            'city_id' => $kecamatanMatanHilirSelatan->city_id,
        ]);

        for ($i = 1; $i <= 20; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sungaiPelang->id,
                'district_id' => $sungaiPelang->district_id,
                'voting_zone_id' => $sungaiPelang->voting_zone_id,
                'city_id' => $sungaiPelang->city_id,
            ]);
        }
        /**-------------- SUNGAI PELANG ------------- **/

        /**-------------- MATAN HILIR SELATAN (DAPIL 7) ------------- **/
    }
}
