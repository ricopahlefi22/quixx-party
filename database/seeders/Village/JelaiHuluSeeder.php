<?php

namespace Database\Seeders\Village;

use App\Models\District;
use App\Models\Village;
use App\Models\VotingPlace;
use Illuminate\Database\Seeder;

class JelaiHuluSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kecamatanJelaiHulu = District::where('name', 'Jelai Hulu')->first();

        /**-------------- AIR DUA ------------- **/
        $airDua = Village::create([
            'name' => 'Desa Air Dua',
            'district_id' => $kecamatanJelaiHulu->id,
            'voting_zone_id' => $kecamatanJelaiHulu->voting_zone_id,
            'city_id' => $kecamatanJelaiHulu->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $airDua->id,
                'district_id' => $airDua->district_id,
                'voting_zone_id' => $airDua->voting_zone_id,
                'city_id' => $airDua->city_id,
            ]);
        }
        /**-------------- AIR DUA ------------- **/


        /**-------------- ASAM JELAI ------------- **/
        $asamJelai = Village::create([
            'name' => 'Desa Asam Jelai',
            'district_id' => $kecamatanJelaiHulu->id,
            'voting_zone_id' => $kecamatanJelaiHulu->voting_zone_id,
            'city_id' => $kecamatanJelaiHulu->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $asamJelai->id,
                'district_id' => $asamJelai->district_id,
                'voting_zone_id' => $asamJelai->voting_zone_id,
                'city_id' => $asamJelai->city_id,
            ]);
        }
        /**-------------- ASAM JELAI ------------- **/



        /**-------------- BAYAM RAYA ------------- **/
        $bayamRaya = Village::create([
            'name' => 'Desa Bayam Raya',
            'district_id' => $kecamatanJelaiHulu->id,
            'voting_zone_id' => $kecamatanJelaiHulu->voting_zone_id,
            'city_id' => $kecamatanJelaiHulu->city_id,
        ]);

        for ($i = 1; $i <= 1; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $bayamRaya->id,
                'district_id' => $bayamRaya->district_id,
                'voting_zone_id' => $bayamRaya->voting_zone_id,
                'city_id' => $bayamRaya->city_id,
            ]);
        }
        /**-------------- BAYAM RAYA ------------- **/



        /**-------------- BIKU SARANA ------------- **/
        $bikuSarana = Village::create([
            'name' => 'Desa Biku Sarana',
            'district_id' => $kecamatanJelaiHulu->id,
            'voting_zone_id' => $kecamatanJelaiHulu->voting_zone_id,
            'city_id' => $kecamatanJelaiHulu->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $bikuSarana->id,
                'district_id' => $bikuSarana->district_id,
                'voting_zone_id' => $bikuSarana->voting_zone_id,
                'city_id' => $bikuSarana->city_id,
            ]);
        }
        /**-------------- BIKU SARANA ------------- **/



        /**-------------- DERANUK ------------- **/
        $deranuk = Village::create([
            'name' => 'Desa Deranuk',
            'district_id' => $kecamatanJelaiHulu->id,
            'voting_zone_id' => $kecamatanJelaiHulu->voting_zone_id,
            'city_id' => $kecamatanJelaiHulu->city_id,
        ]);

        for ($i = 1; $i <= 5; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $deranuk->id,
                'district_id' => $deranuk->district_id,
                'voting_zone_id' => $deranuk->voting_zone_id,
                'city_id' => $deranuk->city_id,
            ]);
        }
        /**-------------- DERANUK ------------- **/



        /**-------------- KARANG DANGIN ------------- **/
        $muliaKerta = Village::create([
            'name' => 'Desa Karang Dangin',
            'district_id' => $kecamatanJelaiHulu->id,
            'voting_zone_id' => $kecamatanJelaiHulu->voting_zone_id,
            'city_id' => $kecamatanJelaiHulu->city_id,
        ]);

        for ($i = 1; $i <= 1; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $muliaKerta->id,
                'district_id' => $muliaKerta->district_id,
                'voting_zone_id' => $muliaKerta->voting_zone_id,
                'city_id' => $muliaKerta->city_id,
            ]);
        }
        /**-------------- KARANG DANGIN ------------- **/



        /**-------------- KESUMA JAYA ------------- **/
        $kesumaJaya = Village::create([
            'name' => 'Desa Kesuma Jaya',
            'district_id' => $kecamatanJelaiHulu->id,
            'voting_zone_id' => $kecamatanJelaiHulu->voting_zone_id,
            'city_id' => $kecamatanJelaiHulu->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $kesumaJaya->id,
                'district_id' => $kesumaJaya->district_id,
                'voting_zone_id' => $kesumaJaya->voting_zone_id,
                'city_id' => $kesumaJaya->city_id,
            ]);
        }
        /**-------------- KESUMA JAYA ------------- **/



        /**-------------- DESA KUSIK BATU LAPU ------------- **/
        $kusikBatuLapu = Village::create([
            'name' => 'Desa Kusik Batu Lapu',
            'district_id' => $kecamatanJelaiHulu->id,
            'voting_zone_id' => $kecamatanJelaiHulu->voting_zone_id,
            'city_id' => $kecamatanJelaiHulu->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $kusikBatuLapu->id,
                'district_id' => $kusikBatuLapu->district_id,
                'voting_zone_id' => $kusikBatuLapu->voting_zone_id,
                'city_id' => $kusikBatuLapu->city_id,
            ]);
        }
        /**-------------- DESA KUSIK BATU LAPU ------------- **/


        /**-------------- LIMPANG ------------- **/
        $limpang = Village::create([
            'name' => 'Desa Limpang',
            'district_id' => $kecamatanJelaiHulu->id,
            'voting_zone_id' => $kecamatanJelaiHulu->voting_zone_id,
            'city_id' => $kecamatanJelaiHulu->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $limpang->id,
                'district_id' => $limpang->district_id,
                'voting_zone_id' => $limpang->voting_zone_id,
                'city_id' => $limpang->city_id,
            ]);
        }
        /**-------------- LIMPANG ------------- **/


        /**-------------- PANGKALAN PAKET ------------- **/
        $pangkalanPaket = Village::create([
            'name' => 'Desa Pangkalan Paket',
            'district_id' => $kecamatanJelaiHulu->id,
            'voting_zone_id' => $kecamatanJelaiHulu->voting_zone_id,
            'city_id' => $kecamatanJelaiHulu->city_id,
        ]);

        for ($i = 1; $i <= 2; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $pangkalanPaket->id,
                'district_id' => $pangkalanPaket->district_id,
                'voting_zone_id' => $pangkalanPaket->voting_zone_id,
                'city_id' => $pangkalanPaket->city_id,
            ]);
        }
        /**-------------- PANGKALAN PAKET ------------- **/



        /**-------------- PANGKALAN SUKA ------------- **/
        $pangkalanSuka = Village::create([
            'name' => 'Desa Pangkalan Suka',
            'district_id' => $kecamatanJelaiHulu->id,
            'voting_zone_id' => $kecamatanJelaiHulu->voting_zone_id,
            'city_id' => $kecamatanJelaiHulu->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $pangkalanSuka->id,
                'district_id' => $pangkalanSuka->district_id,
                'voting_zone_id' => $pangkalanSuka->voting_zone_id,
                'city_id' => $pangkalanSuka->city_id,
            ]);
        }
        /**-------------- PANGKALAN SUKA ------------- **/



        /**-------------- PASIR MAYANG ------------- **/
        $pasirMayang = Village::create([
            'name' => 'Desa Pasir',
            'district_id' => $kecamatanJelaiHulu->id,
            'voting_zone_id' => $kecamatanJelaiHulu->voting_zone_id,
            'city_id' => $kecamatanJelaiHulu->city_id,
        ]);

        for ($i = 1; $i <= 2; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $pasirMayang->id,
                'district_id' => $pasirMayang->district_id,
                'voting_zone_id' => $pasirMayang->voting_zone_id,
                'city_id' => $pasirMayang->city_id,
            ]);
        }
        /**-------------- PASIR MAYANG ------------- **/





        /**-------------- PENYARANG ------------- **/
        $penyarang = Village::create([
            'name' => 'Desa Penyarang',
            'district_id' => $kecamatanJelaiHulu->id,
            'voting_zone_id' => $kecamatanJelaiHulu->voting_zone_id,
            'city_id' => $kecamatanJelaiHulu->city_id,
        ]);

        for ($i = 1; $i <= 2; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $penyarang->id,
                'district_id' => $penyarang->district_id,
                'voting_zone_id' => $penyarang->voting_zone_id,
                'city_id' => $penyarang->city_id,
            ]);
        }
        /**-------------- PENYARANG ------------- **/



        /**-------------- PERIANGAN ------------- **/
        $periangan = Village::create([
            'name' => 'Desa Periangan',
            'district_id' => $kecamatanJelaiHulu->id,
            'voting_zone_id' => $kecamatanJelaiHulu->voting_zone_id,
            'city_id' => $kecamatanJelaiHulu->city_id,
        ]);

        for ($i = 1; $i <= 7; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $periangan->id,
                'district_id' => $periangan->district_id,
                'voting_zone_id' => $periangan->voting_zone_id,
                'city_id' => $periangan->city_id,
            ]);
        }
        /**-------------- PERIANGAN ------------- **/



        /**-------------- PERIGI ------------- **/
        $perigi = Village::create([
            'name' => 'Desa Perigi',
            'district_id' => $kecamatanJelaiHulu->id,
            'voting_zone_id' => $kecamatanJelaiHulu->voting_zone_id,
            'city_id' => $kecamatanJelaiHulu->city_id,
        ]);

        for ($i = 1; $i <= 2; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $perigi->id,
                'district_id' => $perigi->district_id,
                'voting_zone_id' => $perigi->voting_zone_id,
                'city_id' => $perigi->city_id,
            ]);
        }
        /**-------------- PERIGI ------------- **/




        /**-------------- RANGGA INTAN ------------- **/
        $ranggaIntan = Village::create([
            'name' => 'Desa Rangga Intan',
            'district_id' => $kecamatanJelaiHulu->id,
            'voting_zone_id' => $kecamatanJelaiHulu->voting_zone_id,
            'city_id' => $kecamatanJelaiHulu->city_id,
        ]);

        for ($i = 1; $i <= 2; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $ranggaIntan->id,
                'district_id' => $ranggaIntan->district_id,
                'voting_zone_id' => $ranggaIntan->voting_zone_id,
                'city_id' => $ranggaIntan->city_id,
            ]);
        }
        /**-------------- RANGGA INTAN ------------- **/




        /**-------------- RIAM DANAU KANAN ------------- **/
        $riamDanauKanan = Village::create([
            'name' => 'Desa Riam Danau Kanan',
            'district_id' => $kecamatanJelaiHulu->id,
            'voting_zone_id' => $kecamatanJelaiHulu->voting_zone_id,
            'city_id' => $kecamatanJelaiHulu->city_id,
        ]);

        for ($i = 1; $i <= 5; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $riamDanauKanan->id,
                'district_id' => $riamDanauKanan->district_id,
                'voting_zone_id' => $riamDanauKanan->voting_zone_id,
                'city_id' => $riamDanauKanan->city_id,
            ]);
        }
        /**-------------- RIAM DANAU KANAN ------------- **/





        /**-------------- SEMANTUN ------------- **/
        $semantun = Village::create([
            'name' => 'Desa Semantun',
            'district_id' => $kecamatanJelaiHulu->id,
            'voting_zone_id' => $kecamatanJelaiHulu->voting_zone_id,
            'city_id' => $kecamatanJelaiHulu->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $semantun->id,
                'district_id' => $semantun->district_id,
                'voting_zone_id' => $semantun->voting_zone_id,
                'city_id' => $semantun->city_id,
            ]);
        }
        /**-------------- SEMANTUN ------------- **/



        /**-------------- SIDAHARI ------------- **/
        $sidahari = Village::create([
            'name' => 'Desa Sidahari',
            'district_id' => $kecamatanJelaiHulu->id,
            'voting_zone_id' => $kecamatanJelaiHulu->voting_zone_id,
            'city_id' => $kecamatanJelaiHulu->city_id,
        ]);

        for ($i = 1; $i <= 1; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sidahari->id,
                'district_id' => $sidahari->district_id,
                'voting_zone_id' => $sidahari->voting_zone_id,
                'city_id' => $sidahari->city_id,
            ]);
        }
        /**-------------- SIDAHARI ------------- **/




        /**-------------- TANGGERANG ------------- **/
        $sidahari = Village::create([
            'name' => 'Desa Tanggerang',
            'district_id' => $kecamatanJelaiHulu->id,
            'voting_zone_id' => $kecamatanJelaiHulu->voting_zone_id,
            'city_id' => $kecamatanJelaiHulu->city_id,
        ]);

        for ($i = 1; $i <= 5; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sidahari->id,
                'district_id' => $sidahari->district_id,
                'voting_zone_id' => $sidahari->voting_zone_id,
                'city_id' => $sidahari->city_id,
            ]);
        }
        /**-------------- TANGGERANG ------------- **/




        /**-------------- TEBING BERSERI ------------- **/
        $sidahari = Village::create([
            'name' => 'Desa Tebing Berseri',
            'district_id' => $kecamatanJelaiHulu->id,
            'voting_zone_id' => $kecamatanJelaiHulu->voting_zone_id,
            'city_id' => $kecamatanJelaiHulu->city_id,
        ]);

        for ($i = 1; $i <= 2; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sidahari->id,
                'district_id' => $sidahari->district_id,
                'voting_zone_id' => $sidahari->voting_zone_id,
                'city_id' => $sidahari->city_id,
            ]);
        }
        /**-------------- TEBING BERSERI ------------- **/




        /**-------------- TELUK RUNJAI ------------- **/
        $sidahari = Village::create([
            'name' => 'Desa Teluk Runjai',
            'district_id' => $kecamatanJelaiHulu->id,
            'voting_zone_id' => $kecamatanJelaiHulu->voting_zone_id,
            'city_id' => $kecamatanJelaiHulu->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sidahari->id,
                'district_id' => $sidahari->district_id,
                'voting_zone_id' => $sidahari->voting_zone_id,
                'city_id' => $sidahari->city_id,
            ]);
        }
        /**-------------- TELUK RUNJAI ------------- **/

        /**-------------- JELAI HULU (DAPIL 4) ------------- **/
    }
}
