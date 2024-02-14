<?php

namespace Database\Seeders\Village;

use App\Models\District;
use App\Models\Village;
use App\Models\VotingPlace;
use Illuminate\Database\Seeder;

class ManisMataSeeder extends Seeder
{
    public function run(): void
    {
        $kecamatanManisMata = District::where('name', 'Manis Mata')->first();

        /**-------------- AIR DEKAKAH ------------- **/
        $airDekakah = Village::create([
            'name' => 'Desa Air Dekakah',
            'district_id' => $kecamatanManisMata->id,
            'voting_zone_id' => $kecamatanManisMata->voting_zone_id,
            'city_id' => $kecamatanManisMata->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $airDekakah->id,
                'district_id' => $airDekakah->district_id,
                'voting_zone_id' => $airDekakah->voting_zone_id,
                'city_id' => $airDekakah->city_id,
            ]);
        }
        /**-------------- AIR DEKAKAH ------------- **/


        /**-------------- ASAM BESAR ------------- **/
        $asamBesar = Village::create([
            'name' => 'Desa Asam Besar',
            'district_id' => $kecamatanManisMata->id,
            'voting_zone_id' => $kecamatanManisMata->voting_zone_id,
            'city_id' => $kecamatanManisMata->city_id,
        ]);

        for ($i = 1; $i <= 11; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $asamBesar->id,
                'district_id' => $asamBesar->district_id,
                'voting_zone_id' => $asamBesar->voting_zone_id,
                'city_id' => $asamBesar->city_id,
            ]);
        }
        /**-------------- ASAM BESAR ------------- **/



        /**-------------- BATU SEDAU ------------- **/
        $batuSedau = Village::create([
            'name' => 'Desa Batu Sedau',
            'district_id' => $kecamatanManisMata->id,
            'voting_zone_id' => $kecamatanManisMata->voting_zone_id,
            'city_id' => $kecamatanManisMata->city_id,
        ]);

        for ($i = 1; $i <= 5; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $batuSedau->id,
                'district_id' => $batuSedau->district_id,
                'voting_zone_id' => $batuSedau->voting_zone_id,
                'city_id' => $batuSedau->city_id,
            ]);
        }
        /**-------------- BATU SEDAU ------------- **/



        /**-------------- BUKIT GAJAH ------------- **/
        $bukitGajah = Village::create([
            'name' => 'Desa Bukit Gajah',
            'district_id' => $kecamatanManisMata->id,
            'voting_zone_id' => $kecamatanManisMata->voting_zone_id,
            'city_id' => $kecamatanManisMata->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $bukitGajah->id,
                'district_id' => $bukitGajah->district_id,
                'voting_zone_id' => $bukitGajah->voting_zone_id,
                'city_id' => $bukitGajah->city_id,
            ]);
        }
        /**-------------- BUKIT GAJAH ------------- **/



        /**-------------- JAMBI ------------- **/
        $jambi = Village::create([
            'name' => 'Desa Jambi',
            'district_id' => $kecamatanManisMata->id,
            'voting_zone_id' => $kecamatanManisMata->voting_zone_id,
            'city_id' => $kecamatanManisMata->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $jambi->id,
                'district_id' => $jambi->district_id,
                'voting_zone_id' => $jambi->voting_zone_id,
                'city_id' => $jambi->city_id,
            ]);
        }
        /**-------------- JAMBI ------------- **/



        /**-------------- KALIMANTAN ------------- **/
        $kalimantan = Village::create([
            'name' => 'Desa Kalimantan',
            'district_id' => $kecamatanManisMata->id,
            'voting_zone_id' => $kecamatanManisMata->voting_zone_id,
            'city_id' => $kecamatanManisMata->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $kalimantan->id,
                'district_id' => $kalimantan->district_id,
                'voting_zone_id' => $kalimantan->voting_zone_id,
                'city_id' => $kalimantan->city_id,
            ]);
        }
        /**-------------- KALIMANTAN ------------- **/



        /**-------------- KELAMPAI ------------- **/
        $kelampai = Village::create([
            'name' => 'Desa Kelampai',
            'district_id' => $kecamatanManisMata->id,
            'voting_zone_id' => $kecamatanManisMata->voting_zone_id,
            'city_id' => $kecamatanManisMata->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $kelampai->id,
                'district_id' => $kelampai->district_id,
                'voting_zone_id' => $kelampai->voting_zone_id,
                'city_id' => $kelampai->city_id,
            ]);
        }
        /**-------------- KELAMPAI ------------- **/



        /**-------------- KEMUNING ------------- **/
        $kemuning = Village::create([
            'name' => 'Desa Kemuning',
            'district_id' => $kecamatanManisMata->id,
            'voting_zone_id' => $kecamatanManisMata->voting_zone_id,
            'city_id' => $kecamatanManisMata->city_id,
        ]);

        for ($i = 1; $i <= 2; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $kemuning->id,
                'district_id' => $kemuning->district_id,
                'voting_zone_id' => $kemuning->voting_zone_id,
                'city_id' => $kemuning->city_id,
            ]);
        }
        /**-------------- KEMUNING ------------- **/




        /**-------------- LEMBAH MUKTI ------------- **/
        $lembahMukti = Village::create([
            'name' => 'Desa Lembah Mukti',
            'district_id' => $kecamatanManisMata->id,
            'voting_zone_id' => $kecamatanManisMata->voting_zone_id,
            'city_id' => $kecamatanManisMata->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $lembahMukti->id,
                'district_id' => $lembahMukti->district_id,
                'voting_zone_id' => $lembahMukti->voting_zone_id,
                'city_id' => $lembahMukti->city_id,
            ]);
        }
        /**-------------- LEMBAH MUKTI ------------- **/


        /**-------------- MANIS MATA ------------- **/
        $manisMata = Village::create([
            'name' => 'Desa Manis Mata',
            'district_id' => $kecamatanManisMata->id,
            'voting_zone_id' => $kecamatanManisMata->voting_zone_id,
            'city_id' => $kecamatanManisMata->city_id,
        ]);

        for ($i = 1; $i <= 12; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $manisMata->id,
                'district_id' => $manisMata->district_id,
                'voting_zone_id' => $manisMata->voting_zone_id,
                'city_id' => $manisMata->city_id,
            ]);
        }
        /**-------------- MANIS MATA ------------- **/


        /**-------------- MEKAR JAYA ------------- **/
        $mekarJaya = Village::create([
            'name' => 'Desa Mekar jaya',
            'district_id' => $kecamatanManisMata->id,
            'voting_zone_id' => $kecamatanManisMata->voting_zone_id,
            'city_id' => $kecamatanManisMata->city_id,
        ]);

        for ($i = 1; $i <= 2; $i++) {
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



        /**-------------- PAKIT SELABA ------------- **/
        $pakitSelaba = Village::create([
            'name' => 'Desa Pakit Selaba',
            'district_id' => $kecamatanManisMata->id,
            'voting_zone_id' => $kecamatanManisMata->voting_zone_id,
            'city_id' => $kecamatanManisMata->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $pakitSelaba->id,
                'district_id' => $pakitSelaba->district_id,
                'voting_zone_id' => $pakitSelaba->voting_zone_id,
                'city_id' => $pakitSelaba->city_id,
            ]);
        }
        /**-------------- PAKIT SELABA ------------- **/




        /**-------------- PELEMPANGAN ------------- **/
        $pelempangan = Village::create([
            'name' => 'Desa Pelempangan',
            'district_id' => $kecamatanManisMata->id,
            'voting_zone_id' => $kecamatanManisMata->voting_zone_id,
            'city_id' => $kecamatanManisMata->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $pelempangan->id,
                'district_id' => $pelempangan->district_id,
                'voting_zone_id' => $pelempangan->voting_zone_id,
                'city_id' => $pelempangan->city_id,
            ]);
        }
        /**-------------- PELEMPANGAN ------------- **/




        /**-------------- RATU ELOK ------------- **/
        $ratuElok = Village::create([
            'name' => 'Desa Ratu Elok',
            'district_id' => $kecamatanManisMata->id,
            'voting_zone_id' => $kecamatanManisMata->voting_zone_id,
            'city_id' => $kecamatanManisMata->city_id,
        ]);

        for ($i = 1; $i <= 11; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $ratuElok->id,
                'district_id' => $ratuElok->district_id,
                'voting_zone_id' => $ratuElok->voting_zone_id,
                'city_id' => $ratuElok->city_id,
            ]);
        }
        /**-------------- RATU ELOK ------------- **/


        /**-------------- SEGULING ------------- **/
        $seguling = Village::create([
            'name' => 'Desa Seguling',
            'district_id' => $kecamatanManisMata->id,
            'voting_zone_id' => $kecamatanManisMata->voting_zone_id,
            'city_id' => $kecamatanManisMata->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $seguling->id,
                'district_id' => $seguling->district_id,
                'voting_zone_id' => $seguling->voting_zone_id,
                'city_id' => $seguling->city_id,
            ]);
        }
        /**-------------- SEGULING ------------- **/




        /**-------------- SENGKUANG MERABONG ------------- **/
        $sengkuangMerabong = Village::create([
            'name' => 'Desa Sengkuang Merabong',
            'district_id' => $kecamatanManisMata->id,
            'voting_zone_id' => $kecamatanManisMata->voting_zone_id,
            'city_id' => $kecamatanManisMata->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sengkuangMerabong->id,
                'district_id' => $sengkuangMerabong->district_id,
                'voting_zone_id' => $sengkuangMerabong->voting_zone_id,
                'city_id' => $sengkuangMerabong->city_id,
            ]);
        }
        /**-------------- SENGKUANG MERABONG ------------- **/




        /**-------------- SILAT ------------- **/
        $silat = Village::create([
            'name' => 'Desa Silat',
            'district_id' => $kecamatanManisMata->id,
            'voting_zone_id' => $kecamatanManisMata->voting_zone_id,
            'city_id' => $kecamatanManisMata->city_id,
        ]);

        for ($i = 1; $i <= 7; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $silat->id,
                'district_id' => $silat->district_id,
                'voting_zone_id' => $silat->voting_zone_id,
                'city_id' => $silat->city_id,
            ]);
        }
        /**-------------- SILAT ------------- **/




        /**-------------- SUAK BURUNG ------------- **/
        $suakBurung = Village::create([
            'name' => 'Desa Suak Burung',
            'district_id' => $kecamatanManisMata->id,
            'voting_zone_id' => $kecamatanManisMata->voting_zone_id,
            'city_id' => $kecamatanManisMata->city_id,
        ]);

        for ($i = 1; $i <= 5; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $suakBurung->id,
                'district_id' => $suakBurung->district_id,
                'voting_zone_id' => $suakBurung->voting_zone_id,
                'city_id' => $suakBurung->city_id,
            ]);
        }
        /**-------------- SUAK BURUNG ------------- **/






        /**-------------- SUKA RAMAI ------------- **/
        $sukaRamai = Village::create([
            'name' => 'Desa Suka Ramai',
            'district_id' => $kecamatanManisMata->id,
            'voting_zone_id' => $kecamatanManisMata->voting_zone_id,
            'city_id' => $kecamatanManisMata->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sukaRamai->id,
                'district_id' => $sukaRamai->district_id,
                'voting_zone_id' => $sukaRamai->voting_zone_id,
                'city_id' => $sukaRamai->city_id,
            ]);
        }
        /**-------------- SUKA RAMAI ------------- **/





        /**-------------- SUNGAI BULUH ------------- **/
        $sungaiBuluh = Village::create([
            'name' => 'Desa Sungai Buluh',
            'district_id' => $kecamatanManisMata->id,
            'voting_zone_id' => $kecamatanManisMata->voting_zone_id,
            'city_id' => $kecamatanManisMata->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sungaiBuluh->id,
                'district_id' => $sungaiBuluh->district_id,
                'voting_zone_id' => $sungaiBuluh->voting_zone_id,
                'city_id' => $sungaiBuluh->city_id,
            ]);
        }
        /**-------------- SUNGAI BULUH ------------- **/





        /**-------------- TERUSAN ------------- **/
        $terusan = Village::create([
            'name' => 'Desa Terusan',
            'district_id' => $kecamatanManisMata->id,
            'voting_zone_id' => $kecamatanManisMata->voting_zone_id,
            'city_id' => $kecamatanManisMata->city_id,
        ]);

        for ($i = 1; $i <= 5; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $terusan->id,
                'district_id' => $terusan->district_id,
                'voting_zone_id' => $terusan->voting_zone_id,
                'city_id' => $terusan->city_id,
            ]);
        }
        /**-------------- TERUSAN ------------- **/




        /**-------------- TRIBUN JAYA ------------- **/
        $tribunJaya = Village::create([
            'name' => 'Desa Tribun Jaya',
            'district_id' => $kecamatanManisMata->id,
            'voting_zone_id' => $kecamatanManisMata->voting_zone_id,
            'city_id' => $kecamatanManisMata->city_id,
        ]);

        for ($i = 1; $i <= 1; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $tribunJaya->id,
                'district_id' => $tribunJaya->district_id,
                'voting_zone_id' => $tribunJaya->voting_zone_id,
                'city_id' => $tribunJaya->city_id,
            ]);
        }
        /**-------------- TRIBUN JAYA ------------- **/


        /**-------------- MANIS MATA (DAPIL 5) ------------- **/
    }
}
