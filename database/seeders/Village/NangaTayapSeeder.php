<?php

namespace Database\Seeders\Village;

use App\Models\District;
use App\Models\Village;
use App\Models\VotingPlace;
use Illuminate\Database\Seeder;

class NangaTayapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kecamatanNangaTayap = District::where('name', 'Nanga Tayap')->first();

        /**-------------- BATU MAS ------------- **/
        $batuMas = Village::create([
            'name' => 'Desa Batu Mas',
            'district_id' => $kecamatanNangaTayap->id,
            'voting_zone_id' => $kecamatanNangaTayap->voting_zone_id,
            'city_id' => $kecamatanNangaTayap->city_id,
        ]);

        for ($i = 1; $i <= 5; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $batuMas->id,
                'district_id' => $batuMas->district_id,
                'voting_zone_id' => $batuMas->voting_zone_id,
                'city_id' => $batuMas->city_id,
            ]);
        }
        /**-------------- BATU MAS ------------- **/


        /**-------------- BETENUNG ------------- **/
        $betenung = Village::create([
            'name' => 'Desa Betenung',
            'district_id' => $kecamatanNangaTayap->id,
            'voting_zone_id' => $kecamatanNangaTayap->voting_zone_id,
            'city_id' => $kecamatanNangaTayap->city_id,
        ]);

        for ($i = 1; $i <= 5; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $betenung->id,
                'district_id' => $betenung->district_id,
                'voting_zone_id' => $betenung->voting_zone_id,
                'city_id' => $betenung->city_id,
            ]);
        }
        /**-------------- BETENUNG ------------- **/



        /**-------------- CEGOLAK ------------- **/
        $cegolak = Village::create([
            'name' => 'Desa Cegolak',
            'district_id' => $kecamatanNangaTayap->id,
            'voting_zone_id' => $kecamatanNangaTayap->voting_zone_id,
            'city_id' => $kecamatanNangaTayap->city_id,
        ]);

        for ($i = 1; $i <= 2; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $cegolak->id,
                'district_id' => $cegolak->district_id,
                'voting_zone_id' => $cegolak->voting_zone_id,
                'city_id' => $cegolak->city_id,
            ]);
        }
        /**-------------- CEGOLAK ------------- **/



        /**-------------- KAYONG HULU ------------- **/
        $kayongHulu = Village::create([
            'name' => 'Desa Kayong Hulu',
            'district_id' => $kecamatanNangaTayap->id,
            'voting_zone_id' => $kecamatanNangaTayap->voting_zone_id,
            'city_id' => $kecamatanNangaTayap->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $kayongHulu->id,
                'district_id' => $kayongHulu->district_id,
                'voting_zone_id' => $kayongHulu->voting_zone_id,
                'city_id' => $kayongHulu->city_id,
            ]);
        }
        /**-------------- KAYONG HULU ------------- **/



        /**-------------- KAYONG UTARA ------------- **/
        $kayongUtara = Village::create([
            'name' => 'Desa Kayong Utara',
            'district_id' => $kecamatanNangaTayap->id,
            'voting_zone_id' => $kecamatanNangaTayap->voting_zone_id,
            'city_id' => $kecamatanNangaTayap->city_id,
        ]);

        for ($i = 1; $i <= 2; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $kayongUtara->id,
                'district_id' => $kayongUtara->district_id,
                'voting_zone_id' => $kayongUtara->voting_zone_id,
                'city_id' => $kayongUtara->city_id,
            ]);
        }
        /**-------------- KAYONG UTARA ------------- **/



        /**-------------- KAYUNG TUHE ------------- **/
        $kayungTuhe = Village::create([
            'name' => 'Desa Kayung Tuhe',
            'district_id' => $kecamatanNangaTayap->id,
            'voting_zone_id' => $kecamatanNangaTayap->voting_zone_id,
            'city_id' => $kecamatanNangaTayap->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $kayungTuhe->id,
                'district_id' => $kayungTuhe->district_id,
                'voting_zone_id' => $kayungTuhe->voting_zone_id,
                'city_id' => $kayungTuhe->city_id,
            ]);
        }
        /**-------------- KAYUNG TUHE ------------- **/



        /**-------------- LEMBAH HIJAU DUA ------------- **/
        $lembahHijauDua = Village::create([
            'name' => 'Desa Lembah Hijau Dua',
            'district_id' => $kecamatanNangaTayap->id,
            'voting_zone_id' => $kecamatanNangaTayap->voting_zone_id,
            'city_id' => $kecamatanNangaTayap->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $lembahHijauDua->id,
                'district_id' => $lembahHijauDua->district_id,
                'voting_zone_id' => $lembahHijauDua->voting_zone_id,
                'city_id' => $lembahHijauDua->city_id,
            ]);
        }
        /**-------------- LEMBAH HIJAU DUA ------------- **/



        /**-------------- LEMBAH HIJAU SATU ------------- **/
        $lembahHijauSatu = Village::create([
            'name' => 'Desa Lembah Hijau Satu',
            'district_id' => $kecamatanNangaTayap->id,
            'voting_zone_id' => $kecamatanNangaTayap->voting_zone_id,
            'city_id' => $kecamatanNangaTayap->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $lembahHijauSatu->id,
                'district_id' => $lembahHijauSatu->district_id,
                'voting_zone_id' => $lembahHijauSatu->voting_zone_id,
                'city_id' => $lembahHijauSatu->city_id,
            ]);
        }
        /**-------------- LEMBAH HIJAU SATU ------------- **/


        /**-------------- MENSUBANG ------------- **/
        $mensubang = Village::create([
            'name' => 'Desa Mensubang',
            'district_id' => $kecamatanNangaTayap->id,
            'voting_zone_id' => $kecamatanNangaTayap->voting_zone_id,
            'city_id' => $kecamatanNangaTayap->city_id,
        ]);

        for ($i = 1; $i <= 6; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $mensubang->id,
                'district_id' => $mensubang->district_id,
                'voting_zone_id' => $mensubang->voting_zone_id,
                'city_id' => $mensubang->city_id,
            ]);
        }
        /**-------------- MENSUBANG ------------- **/


        /**-------------- NANGA TAYAP ------------- **/
        $nangaTayap = Village::create([
            'name' => 'Desa Nanga Tayap',
            'district_id' => $kecamatanNangaTayap->id,
            'voting_zone_id' => $kecamatanNangaTayap->voting_zone_id,
            'city_id' => $kecamatanNangaTayap->city_id,
        ]);

        for ($i = 1; $i <= 16; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $nangaTayap->id,
                'district_id' => $nangaTayap->district_id,
                'voting_zone_id' => $nangaTayap->voting_zone_id,
                'city_id' => $nangaTayap->city_id,
            ]);
        }
        /**-------------- NANGA TAYAP ------------- **/



        /**-------------- PANGKALAN SUKA ------------- **/
        $pangkalanSuka = Village::create([
            'name' => 'Desa Pangkalan Suka',
            'district_id' => $kecamatanNangaTayap->id,
            'voting_zone_id' => $kecamatanNangaTayap->voting_zone_id,
            'city_id' => $kecamatanNangaTayap->city_id,
        ]);

        for ($i = 1; $i <= 5; $i++) {
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



        /**-------------- PANGKALAN TELOK ------------- **/
        $pangkalanTelok = Village::create([
            'name' => 'Desa Pangkalan Telok',
            'district_id' => $kecamatanNangaTayap->id,
            'voting_zone_id' => $kecamatanNangaTayap->voting_zone_id,
            'city_id' => $kecamatanNangaTayap->city_id,
        ]);

        for ($i = 1; $i <= 9; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $pangkalanTelok->id,
                'district_id' => $pangkalanTelok->district_id,
                'voting_zone_id' => $pangkalanTelok->voting_zone_id,
                'city_id' => $pangkalanTelok->city_id,
            ]);
        }
        /**-------------- PANGKALAN TELOK ------------- **/




        /**-------------- PATEH BENTENG ------------- **/
        $patehBenteng = Village::create([
            'name' => 'Desa Pateh Benteng',
            'district_id' => $kecamatanNangaTayap->id,
            'voting_zone_id' => $kecamatanNangaTayap->voting_zone_id,
            'city_id' => $kecamatanNangaTayap->city_id,
        ]);

        for ($i = 1; $i <= 2; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $patehBenteng->id,
                'district_id' => $patehBenteng->district_id,
                'voting_zone_id' => $patehBenteng->voting_zone_id,
                'city_id' => $patehBenteng->city_id,
            ]);
        }
        /**-------------- PATEH BENTENG ------------- **/




        /**-------------- SEBADAK RAYA ------------- **/
        $sebadakRaya = Village::create([
            'name' => 'Desa Sebadak Raya',
            'district_id' => $kecamatanNangaTayap->id,
            'voting_zone_id' => $kecamatanNangaTayap->voting_zone_id,
            'city_id' => $kecamatanNangaTayap->city_id,
        ]);

        for ($i = 1; $i <= 7; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sebadakRaya->id,
                'district_id' => $sebadakRaya->district_id,
                'voting_zone_id' => $sebadakRaya->voting_zone_id,
                'city_id' => $sebadakRaya->city_id,
            ]);
        }
        /**-------------- SEBADAK RAYA ------------- **/



        /**-------------- SEPAKAT JAYA ------------- **/
        $sepakatJaya = Village::create([
            'name' => 'Desa Sepakat Jaya',
            'district_id' => $kecamatanNangaTayap->id,
            'voting_zone_id' => $kecamatanNangaTayap->voting_zone_id,
            'city_id' => $kecamatanNangaTayap->city_id,
        ]);

        for ($i = 1; $i <= 6; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sepakatJaya->id,
                'district_id' => $sepakatJaya->district_id,
                'voting_zone_id' => $sepakatJaya->voting_zone_id,
                'city_id' => $sepakatJaya->city_id,
            ]);
        }
        /**-------------- SEPAKAT JAYA ------------- **/





        /**-------------- SIANTAU RAYA ------------- **/
        $siantauRaya = Village::create([
            'name' => 'Desa Siantau Raya',
            'district_id' => $kecamatanNangaTayap->id,
            'voting_zone_id' => $kecamatanNangaTayap->voting_zone_id,
            'city_id' => $kecamatanNangaTayap->city_id,
        ]);

        for ($i = 1; $i <= 8; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $siantauRaya->id,
                'district_id' => $siantauRaya->district_id,
                'voting_zone_id' => $siantauRaya->voting_zone_id,
                'city_id' => $siantauRaya->city_id,
            ]);
        }
        /**-------------- SIANTAU RAYA ------------- **/




        /**-------------- SIMPANG TIGA SEMBELANGAAN ------------- **/
        $simpangTigaSembelangaan = Village::create([
            'name' => 'Desa Simpang Tiga Sembelangaan',
            'district_id' => $kecamatanNangaTayap->id,
            'voting_zone_id' => $kecamatanNangaTayap->voting_zone_id,
            'city_id' => $kecamatanNangaTayap->city_id,
        ]);

        for ($i = 1; $i <= 7; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $simpangTigaSembelangaan->id,
                'district_id' => $simpangTigaSembelangaan->district_id,
                'voting_zone_id' => $simpangTigaSembelangaan->voting_zone_id,
                'city_id' => $simpangTigaSembelangaan->city_id,
            ]);
        }
        /**-------------- SIMPANG TIGA SEMBELANGAAN ------------- **/




        /**-------------- SUNGAI KELIK ------------- **/
        $sungaiKelik = Village::create([
            'name' => 'Desa Sungai Kelik',
            'district_id' => $kecamatanNangaTayap->id,
            'voting_zone_id' => $kecamatanNangaTayap->voting_zone_id,
            'city_id' => $kecamatanNangaTayap->city_id,
        ]);

        for ($i = 1; $i <= 14; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sungaiKelik->id,
                'district_id' => $sungaiKelik->district_id,
                'voting_zone_id' => $sungaiKelik->voting_zone_id,
                'city_id' => $sungaiKelik->city_id,
            ]);
        }
        /**-------------- SUNGAI KELIK ------------- **/





        /**-------------- TAJOK KAYONG ------------- **/
        $tajokKayong = Village::create([
            'name' => 'Desa Tajok Kayong',
            'district_id' => $kecamatanNangaTayap->id,
            'voting_zone_id' => $kecamatanNangaTayap->voting_zone_id,
            'city_id' => $kecamatanNangaTayap->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $tajokKayong->id,
                'district_id' => $tajokKayong->district_id,
                'voting_zone_id' => $tajokKayong->voting_zone_id,
                'city_id' => $tajokKayong->city_id,
            ]);
        }
        /**-------------- TAJOK KAYONG ------------- **/


        /**-------------- TANJUNG MEDAN ------------- **/
        $tanjungMedan = Village::create([
            'name' => 'Desa Tanjung Medan',
            'district_id' => $kecamatanNangaTayap->id,
            'voting_zone_id' => $kecamatanNangaTayap->voting_zone_id,
            'city_id' => $kecamatanNangaTayap->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $tanjungMedan->id,
                'district_id' => $tanjungMedan->district_id,
                'voting_zone_id' => $tanjungMedan->voting_zone_id,
                'city_id' => $tanjungMedan->city_id,
            ]);
        }
        /**-------------- TANJUNG MEDAN ------------- **/

        /**-------------- NANGA TAYAP (DAPIL 3) ------------- **/
    }
}
