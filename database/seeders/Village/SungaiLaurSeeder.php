<?php

namespace Database\Seeders\Village;

use App\Models\District;
use App\Models\Village;
use App\Models\VotingPlace;
use Illuminate\Database\Seeder;

class SungaiLaurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kecamatanSungaiLaur = District::where('name', 'Sungai Laur')->first();

        /**-------------- BAYUN SARI ------------- **/
        $bayunSari = Village::create([
            'name' => 'Desa Bayun Sari',
            'district_id' => $kecamatanSungaiLaur->id,
            'voting_zone_id' => $kecamatanSungaiLaur->voting_zone_id,
            'city_id' => $kecamatanSungaiLaur->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $bayunSari->id,
                'district_id' => $bayunSari->district_id,
                'voting_zone_id' => $bayunSari->voting_zone_id,
                'city_id' => $bayunSari->city_id,
            ]);
        }
        /**-------------- BAYUN SARI ------------- **/


        /**-------------- BENGARAS ------------- **/
        $bengaras = Village::create([
            'name' => 'Desa Bengaras',
            'district_id' => $kecamatanSungaiLaur->id,
            'voting_zone_id' => $kecamatanSungaiLaur->voting_zone_id,
            'city_id' => $kecamatanSungaiLaur->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $bengaras->id,
                'district_id' => $bengaras->district_id,
                'voting_zone_id' => $bengaras->voting_zone_id,
                'city_id' => $bengaras->city_id,
            ]);
        }
        /**-------------- BENGARAS ------------- **/



        /**-------------- HARAPAN BARU ------------- **/
        $harapanBaru = Village::create([
            'name' => 'Desa Harapan Baru',
            'district_id' => $kecamatanSungaiLaur->id,
            'voting_zone_id' => $kecamatanSungaiLaur->voting_zone_id,
            'city_id' => $kecamatanSungaiLaur->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
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



        /**-------------- KEPARI ------------- **/
        $kepari = Village::create([
            'name' => 'Desa Kepari',
            'district_id' => $kecamatanSungaiLaur->id,
            'voting_zone_id' => $kecamatanSungaiLaur->voting_zone_id,
            'city_id' => $kecamatanSungaiLaur->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $kepari->id,
                'district_id' => $kepari->district_id,
                'voting_zone_id' => $kepari->voting_zone_id,
                'city_id' => $kepari->city_id,
            ]);
        }
        /**-------------- KEPARI ------------- **/



        /**-------------- LANJUT MEKAR SARI ------------- **/
        $lanjutMekarSari = Village::create([
            'name' => 'Desa Lanjut Mekar Sari',
            'district_id' => $kecamatanSungaiLaur->id,
            'voting_zone_id' => $kecamatanSungaiLaur->voting_zone_id,
            'city_id' => $kecamatanSungaiLaur->city_id,
        ]);

        for ($i = 1; $i <= 2; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $lanjutMekarSari->id,
                'district_id' => $lanjutMekarSari->district_id,
                'voting_zone_id' => $lanjutMekarSari->voting_zone_id,
                'city_id' => $lanjutMekarSari->city_id,
            ]);
        }
        /**-------------- LANJUT MEKAR SARI ------------- **/



        /**-------------- MEKAR HARAPAN ------------- **/
        $mekarHarapan = Village::create([
            'name' => 'Desa Mekar Harapan',
            'district_id' => $kecamatanSungaiLaur->id,
            'voting_zone_id' => $kecamatanSungaiLaur->voting_zone_id,
            'city_id' => $kecamatanSungaiLaur->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $mekarHarapan->id,
                'district_id' => $mekarHarapan->district_id,
                'voting_zone_id' => $mekarHarapan->voting_zone_id,
                'city_id' => $mekarHarapan->city_id,
            ]);
        }
        /**-------------- MEKAR HARAPAN ------------- **/



        /**-------------- MERABU JAYA ------------- **/
        $merabuJaya = Village::create([
            'name' => 'Desa Merabu Jaya',
            'district_id' => $kecamatanSungaiLaur->id,
            'voting_zone_id' => $kecamatanSungaiLaur->voting_zone_id,
            'city_id' => $kecamatanSungaiLaur->city_id,
        ]);

        for ($i = 1; $i <= 1; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $merabuJaya->id,
                'district_id' => $merabuJaya->district_id,
                'voting_zone_id' => $merabuJaya->voting_zone_id,
                'city_id' => $merabuJaya->city_id,
            ]);
        }
        /**-------------- MERABU JAYA ------------- **/



        /**-------------- RANDAU LIMAT ------------- **/
        $randauLimat = Village::create([
            'name' => 'Desa Randau Limat',
            'district_id' => $kecamatanSungaiLaur->id,
            'voting_zone_id' => $kecamatanSungaiLaur->voting_zone_id,
            'city_id' => $kecamatanSungaiLaur->city_id,
        ]);

        for ($i = 1; $i <= 2; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $randauLimat->id,
                'district_id' => $randauLimat->district_id,
                'voting_zone_id' => $randauLimat->voting_zone_id,
                'city_id' => $randauLimat->city_id,
            ]);
        }
        /**-------------- RANDAU LIMAT ------------- **/


        /**-------------- RIAM BUNUT ------------- **/
        $riamBunut = Village::create([
            'name' => 'Desa Riam Bunut',
            'district_id' => $kecamatanSungaiLaur->id,
            'voting_zone_id' => $kecamatanSungaiLaur->voting_zone_id,
            'city_id' => $kecamatanSungaiLaur->city_id,
        ]);

        for ($i = 1; $i <= 5; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $riamBunut->id,
                'district_id' => $riamBunut->district_id,
                'voting_zone_id' => $riamBunut->voting_zone_id,
                'city_id' => $riamBunut->city_id,
            ]);
        }
        /**-------------- RIAM BUNUT ------------- **/


        /**-------------- SELANGKUT RAYA ------------- **/
        $selangkutRaya = Village::create([
            'name' => 'Desa Selangkut Raya',
            'district_id' => $kecamatanSungaiLaur->id,
            'voting_zone_id' => $kecamatanSungaiLaur->voting_zone_id,
            'city_id' => $kecamatanSungaiLaur->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $selangkutRaya->id,
                'district_id' => $selangkutRaya->district_id,
                'voting_zone_id' => $selangkutRaya->voting_zone_id,
                'city_id' => $selangkutRaya->city_id,
            ]);
        }
        /**-------------- SELANGKUT RAYA ------------- **/



        /**-------------- SEMPURNA ------------- **/
        $sempurna = Village::create([
            'name' => 'Desa Sempurna',
            'district_id' => $kecamatanSungaiLaur->id,
            'voting_zone_id' => $kecamatanSungaiLaur->voting_zone_id,
            'city_id' => $kecamatanSungaiLaur->city_id,
        ]);

        for ($i = 1; $i <= 6; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sempurna->id,
                'district_id' => $sempurna->district_id,
                'voting_zone_id' => $sempurna->voting_zone_id,
                'city_id' => $sempurna->city_id,
            ]);
        }
        /**-------------- SEMPURNA ------------- **/



        /**-------------- SEPOTONG ------------- **/
        $sepotong = Village::create([
            'name' => 'Desa Sepotong',
            'district_id' => $kecamatanSungaiLaur->id,
            'voting_zone_id' => $kecamatanSungaiLaur->voting_zone_id,
            'city_id' => $kecamatanSungaiLaur->city_id,
        ]);

        for ($i = 1; $i <= 5; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sepotong->id,
                'district_id' => $sepotong->district_id,
                'voting_zone_id' => $sepotong->voting_zone_id,
                'city_id' => $sepotong->city_id,
            ]);
        }
        /**-------------- SEPOTONG ------------- **/





        /**-------------- SINAR KURI ------------- **/
        $sinarKuri = Village::create([
            'name' => 'Desa Sinar Kuri',
            'district_id' => $kecamatanSungaiLaur->id,
            'voting_zone_id' => $kecamatanSungaiLaur->voting_zone_id,
            'city_id' => $kecamatanSungaiLaur->city_id,
        ]);

        for ($i = 1; $i <= 2; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sinarKuri->id,
                'district_id' => $sinarKuri->district_id,
                'voting_zone_id' => $sinarKuri->voting_zone_id,
                'city_id' => $sinarKuri->city_id,
            ]);
        }
        /**-------------- SINAR KURI ------------- **/





        /**-------------- SUKARAMAI ------------- **/
        $sukaramai = Village::create([
            'name' => 'Desa Sukaramai',
            'district_id' => $kecamatanSungaiLaur->id,
            'voting_zone_id' => $kecamatanSungaiLaur->voting_zone_id,
            'city_id' => $kecamatanSungaiLaur->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sukaramai->id,
                'district_id' => $sukaramai->district_id,
                'voting_zone_id' => $sukaramai->voting_zone_id,
                'city_id' => $sukaramai->city_id,
            ]);
        }
        /**-------------- SUKARAMAI ------------- **/




        /**-------------- SUKA DAKA ------------- **/
        $sukaDaka = Village::create([
            'name' => 'Desa Suka Daka',
            'district_id' => $kecamatanSungaiLaur->id,
            'voting_zone_id' => $kecamatanSungaiLaur->voting_zone_id,
            'city_id' => $kecamatanSungaiLaur->city_id,
        ]);

        for ($i = 1; $i <= 6; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sukaDaka->id,
                'district_id' => $sukaDaka->district_id,
                'voting_zone_id' => $sukaDaka->voting_zone_id,
                'city_id' => $sukaDaka->city_id,
            ]);
        }
        /**-------------- SUKA DAKA ------------- **/




        /**-------------- TANJUNG BERINGIN ------------- **/
        $tanjungBeringin = Village::create([
            'name' => 'Desa Tanjung Beringin',
            'district_id' => $kecamatanSungaiLaur->id,
            'voting_zone_id' => $kecamatanSungaiLaur->voting_zone_id,
            'city_id' => $kecamatanSungaiLaur->city_id,
        ]);

        for ($i = 1; $i <= 6; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $tanjungBeringin->id,
                'district_id' => $tanjungBeringin->district_id,
                'voting_zone_id' => $tanjungBeringin->voting_zone_id,
                'city_id' => $tanjungBeringin->city_id,
            ]);
        }
        /**-------------- TANJUNG BERINGIN ------------- **/





        /**-------------- TANJUNG MAJU ------------- **/
        $tanjungMaju = Village::create([
            'name' => 'Desa Tanjung Maju',
            'district_id' => $kecamatanSungaiLaur->id,
            'voting_zone_id' => $kecamatanSungaiLaur->voting_zone_id,
            'city_id' => $kecamatanSungaiLaur->city_id,
        ]);

        for ($i = 1; $i <= 2; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $tanjungMaju->id,
                'district_id' => $tanjungMaju->district_id,
                'voting_zone_id' => $tanjungMaju->voting_zone_id,
                'city_id' => $tanjungMaju->city_id,
            ]);
        }
        /**-------------- TANJUNG MAJU ------------- **/






        /**-------------- TELUK BAYUR ------------- **/
        $telukBayur = Village::create([
            'name' => 'Desa Teluk Bayur',
            'district_id' => $kecamatanSungaiLaur->id,
            'voting_zone_id' => $kecamatanSungaiLaur->voting_zone_id,
            'city_id' => $kecamatanSungaiLaur->city_id,
        ]);

        for ($i = 1; $i <= 5; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $telukBayur->id,
                'district_id' => $telukBayur->district_id,
                'voting_zone_id' => $telukBayur->voting_zone_id,
                'city_id' => $telukBayur->city_id,
            ]);
        }
        /**-------------- TELUK BAYUR ------------- **/



        /**-------------- TELUK MUTIARA ------------- **/
        $telukMutiara = Village::create([
            'name' => 'Desa Teluk Mutiara',
            'district_id' => $kecamatanSungaiLaur->id,
            'voting_zone_id' => $kecamatanSungaiLaur->voting_zone_id,
            'city_id' => $kecamatanSungaiLaur->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $telukMutiara->id,
                'district_id' => $telukMutiara->district_id,
                'voting_zone_id' => $telukMutiara->voting_zone_id,
                'city_id' => $telukMutiara->city_id,
            ]);
        }
        /**-------------- TELUK MUTIARA ------------- **/

        /**-------------- SUNGAI LAUR (DAPIL 2) ------------- **/
    }
}
