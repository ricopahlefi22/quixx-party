<?php

namespace Database\Seeders\Village;

use App\Models\District;
use App\Models\Village;
use App\Models\VotingPlace;
use Illuminate\Database\Seeder;

class SimpangHilirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kecamatanSimpangHilir = District::where('name', 'Simpang Hilir')->first();

        /**-------------- BATU BARAT ------------- **/
        $batuBarat = Village::create([
            'name' => 'Desa Batu Barat',
            'district_id' => $kecamatanSimpangHilir->id,
            'voting_zone_id' => $kecamatanSimpangHilir->voting_zone_id,
            'city_id' => $kecamatanSimpangHilir->city_id,
        ]);

        for ($i = 1; $i <= 8; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $batuBarat->id,
                'district_id' => $batuBarat->district_id,
                'voting_zone_id' => $batuBarat->voting_zone_id,
                'city_id' => $batuBarat->city_id,
            ]);
        }
        /**-------------- BATU BARAT ------------- **/


        /**-------------- LUBUK BATU ------------- **/
        $lubukBatu = Village::create([
            'name' => 'Desa Lubuk Batu',
            'district_id' => $kecamatanSimpangHilir->id,
            'voting_zone_id' => $kecamatanSimpangHilir->voting_zone_id,
            'city_id' => $kecamatanSimpangHilir->city_id,
        ]);

        for ($i = 1; $i <= 6; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $lubukBatu->id,
                'district_id' => $lubukBatu->district_id,
                'voting_zone_id' => $lubukBatu->voting_zone_id,
                'city_id' => $lubukBatu->city_id,
            ]);
        }
        /**-------------- LUBUK BATU ------------- **/



        /**-------------- MATAN JAYA ------------- **/
        $matanJaya = Village::create([
            'name' => 'Desa Matan Jaya',
            'district_id' => $kecamatanSimpangHilir->id,
            'voting_zone_id' => $kecamatanSimpangHilir->voting_zone_id,
            'city_id' => $kecamatanSimpangHilir->city_id,
        ]);

        for ($i = 1; $i <= 15; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $matanJaya->id,
                'district_id' => $matanJaya->district_id,
                'voting_zone_id' => $matanJaya->voting_zone_id,
                'city_id' => $matanJaya->city_id,
            ]);
        }
        /**-------------- MATAN JAYA ------------- **/



        /**-------------- MEDAN JAYA ------------- **/
        $medanJaya = Village::create([
            'name' => 'Desa Medan Jaya',
            'district_id' => $kecamatanSimpangHilir->id,
            'voting_zone_id' => $kecamatanSimpangHilir->voting_zone_id,
            'city_id' => $kecamatanSimpangHilir->city_id,
        ]);

        for ($i = 1; $i <= 8; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $medanJaya->id,
                'district_id' => $medanJaya->district_id,
                'voting_zone_id' => $medanJaya->voting_zone_id,
                'city_id' => $medanJaya->city_id,
            ]);
        }
        /**-------------- MEDAN JAYA ------------- **/



        /**-------------- NIPAH KUNING ------------- **/
        $nipahKuning = Village::create([
            'name' => 'Desa Nipah Kuning',
            'district_id' => $kecamatanSimpangHilir->id,
            'voting_zone_id' => $kecamatanSimpangHilir->voting_zone_id,
            'city_id' => $kecamatanSimpangHilir->city_id,
        ]);

        for ($i = 1; $i <= 9; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $nipahKuning->id,
                'district_id' => $nipahKuning->district_id,
                'voting_zone_id' => $nipahKuning->voting_zone_id,
                'city_id' => $nipahKuning->city_id,
            ]);
        }
        /**-------------- NIPAH KUNING ------------- **/



        /**-------------- PADU BANJAR ------------- **/
        $paduBanjar = Village::create([
            'name' => 'Desa Padu Banjar',
            'district_id' => $kecamatanSimpangHilir->id,
            'voting_zone_id' => $kecamatanSimpangHilir->voting_zone_id,
            'city_id' => $kecamatanSimpangHilir->city_id,
        ]);

        for ($i = 1; $i <= 10; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $paduBanjar->id,
                'district_id' => $paduBanjar->district_id,
                'voting_zone_id' => $paduBanjar->voting_zone_id,
                'city_id' => $paduBanjar->city_id,
            ]);
        }
        /**-------------- PADU BANJAR ------------- **/



        /**-------------- PEMANGKAT ------------- **/
        $pemangkat = Village::create([
            'name' => 'Desa Pemangkat',
            'district_id' => $kecamatanSimpangHilir->id,
            'voting_zone_id' => $kecamatanSimpangHilir->voting_zone_id,
            'city_id' => $kecamatanSimpangHilir->city_id,
        ]);

        for ($i = 1; $i <= 6; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $pemangkat->id,
                'district_id' => $pemangkat->district_id,
                'voting_zone_id' => $pemangkat->voting_zone_id,
                'city_id' => $pemangkat->city_id,
            ]);
        }
        /**-------------- PEMANGKAT ------------- **/



        /**-------------- PENJALAAN ------------- **/
        $penjalaan = Village::create([
            'name' => 'Desa Penjalaan',
            'district_id' => $kecamatanSimpangHilir->id,
            'voting_zone_id' => $kecamatanSimpangHilir->voting_zone_id,
            'city_id' => $kecamatanSimpangHilir->city_id,
        ]);

        for ($i = 1; $i <= 8; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $penjalaan->id,
                'district_id' => $penjalaan->district_id,
                'voting_zone_id' => $penjalaan->voting_zone_id,
                'city_id' => $penjalaan->city_id,
            ]);
        }
        /**-------------- PENJALAAN ------------- **/


        /**-------------- PULAU KUMBANG ------------- **/
        $pulauKumbang = Village::create([
            'name' => 'Desa Pulau Kumbang',
            'district_id' => $kecamatanSimpangHilir->id,
            'voting_zone_id' => $kecamatanSimpangHilir->voting_zone_id,
            'city_id' => $kecamatanSimpangHilir->city_id,
        ]);

        for ($i = 1; $i <= 8; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $pulauKumbang->id,
                'district_id' => $pulauKumbang->district_id,
                'voting_zone_id' => $pulauKumbang->voting_zone_id,
                'city_id' => $pulauKumbang->city_id,
            ]);
        }
        /**-------------- PULAU KUMBANG ------------- **/



        /**-------------- RANTAU PANJANG ------------- **/
        $rantauPanjang = Village::create([
            'name' => 'Desa Rantau Panjang',
            'district_id' => $kecamatanSimpangHilir->id,
            'voting_zone_id' => $kecamatanSimpangHilir->voting_zone_id,
            'city_id' => $kecamatanSimpangHilir->city_id,
        ]);

        for ($i = 1; $i <= 14; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $rantauPanjang->id,
                'district_id' => $rantauPanjang->district_id,
                'voting_zone_id' => $rantauPanjang->voting_zone_id,
                'city_id' => $rantauPanjang->city_id,
            ]);
        }
        /**-------------- RANTAU PANJANG ------------- **/




        /**-------------- SUNGAI MATA-MATA ------------- **/
        $sungaiMataMata = Village::create([
            'name' => 'Desa Sungai Mata-Mata',
            'district_id' => $kecamatanSimpangHilir->id,
            'voting_zone_id' => $kecamatanSimpangHilir->voting_zone_id,
            'city_id' => $kecamatanSimpangHilir->city_id,
        ]);

        for ($i = 1; $i <= 14; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sungaiMataMata->id,
                'district_id' => $sungaiMataMata->district_id,
                'voting_zone_id' => $sungaiMataMata->voting_zone_id,
                'city_id' => $sungaiMataMata->city_id,
            ]);
        }
        /**-------------- SUNGAI MATA-MATA ------------- **/



        /**-------------- TELUK MELANO ------------- **/
        $telukMelano = Village::create([
            'name' => 'Desa Teluk Melano',
            'district_id' => $kecamatanSimpangHilir->id,
            'voting_zone_id' => $kecamatanSimpangHilir->voting_zone_id,
            'city_id' => $kecamatanSimpangHilir->city_id,
        ]);

        for ($i = 1; $i <= 9; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $telukMelano->id,
                'district_id' => $telukMelano->district_id,
                'voting_zone_id' => $telukMelano->voting_zone_id,
                'city_id' => $telukMelano->city_id,
            ]);
        }
        /**-------------- TELUK MELANO ------------- **/

        /**-------------- SIMPANG HILIR (DAPIL 4) ------------- **/
    }
}
