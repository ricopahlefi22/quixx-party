<?php

namespace Database\Seeders\Village;

use App\Models\District;
use App\Models\Village;
use App\Models\VotingPlace;
use Illuminate\Database\Seeder;

class TumbangTitiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kecamatanTumbangTiti = District::where('name', 'Tumbang Titi')->first();

        /**-------------- AUR GADING ------------- **/
        $aurGading = Village::create([
            'name' => 'Desa Aur Gading',
            'district_id' => $kecamatanTumbangTiti->id,
            'voting_zone_id' => $kecamatanTumbangTiti->voting_zone_id,
            'city_id' => $kecamatanTumbangTiti->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $aurGading->id,
                'district_id' => $aurGading->district_id,
                'voting_zone_id' => $aurGading->voting_zone_id,
                'city_id' => $aurGading->city_id,
            ]);
        }
        /**-------------- AUR GADING ------------- **/


        /**-------------- BATU BERANSAK ------------- **/
        $batuBeransak = Village::create([
            'name' => 'Desa Batu Beransak',
            'district_id' => $kecamatanTumbangTiti->id,
            'voting_zone_id' => $kecamatanTumbangTiti->voting_zone_id,
            'city_id' => $kecamatanTumbangTiti->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $batuBeransak->id,
                'district_id' => $batuBeransak->district_id,
                'voting_zone_id' => $batuBeransak->voting_zone_id,
                'city_id' => $batuBeransak->city_id,
            ]);
        }
        /**-------------- BATU BERANSAK ------------- **/



        /**-------------- BATU TAJAM ------------- **/
        $batuTajam = Village::create([
            'name' => 'Desa Batu Tajam',
            'district_id' => $kecamatanTumbangTiti->id,
            'voting_zone_id' => $kecamatanTumbangTiti->voting_zone_id,
            'city_id' => $kecamatanTumbangTiti->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $batuTajam->id,
                'district_id' => $batuTajam->district_id,
                'voting_zone_id' => $batuTajam->voting_zone_id,
                'city_id' => $batuTajam->city_id,
            ]);
        }
        /**-------------- BATU TAJAM ------------- **/



        /**-------------- BELABAN TUJUH ------------- **/
        $belabanTujuh = Village::create([
            'name' => 'Desa Belaban Tujuh',
            'district_id' => $kecamatanTumbangTiti->id,
            'voting_zone_id' => $kecamatanTumbangTiti->voting_zone_id,
            'city_id' => $kecamatanTumbangTiti->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $belabanTujuh->id,
                'district_id' => $belabanTujuh->district_id,
                'voting_zone_id' => $belabanTujuh->voting_zone_id,
                'city_id' => $belabanTujuh->city_id,
            ]);
        }
        /**-------------- BELABAN TUJUH ------------- **/



        /**-------------- BERINGIN RAYO ------------- **/
        $beringinRayo = Village::create([
            'name' => 'Desa Beringin Rayo',
            'district_id' => $kecamatanTumbangTiti->id,
            'voting_zone_id' => $kecamatanTumbangTiti->voting_zone_id,
            'city_id' => $kecamatanTumbangTiti->city_id,
        ]);

        for ($i = 1; $i <= 6; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $beringinRayo->id,
                'district_id' => $beringinRayo->district_id,
                'voting_zone_id' => $beringinRayo->voting_zone_id,
                'city_id' => $beringinRayo->city_id,
            ]);
        }
        /**-------------- BERINGIN RAYO ------------- **/



        /**-------------- JELAYAN ------------- **/
        $jelayan = Village::create([
            'name' => 'Desa Jelayan',
            'district_id' => $kecamatanTumbangTiti->id,
            'voting_zone_id' => $kecamatanTumbangTiti->voting_zone_id,
            'city_id' => $kecamatanTumbangTiti->city_id,
        ]);

        for ($i = 1; $i <= 2; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $jelayan->id,
                'district_id' => $jelayan->district_id,
                'voting_zone_id' => $jelayan->voting_zone_id,
                'city_id' => $jelayan->city_id,
            ]);
        }
        /**-------------- JELAYAN ------------- **/



        /**-------------- JUNGKAL ------------- **/
        $jungkal = Village::create([
            'name' => 'Desa Jungkal',
            'district_id' => $kecamatanTumbangTiti->id,
            'voting_zone_id' => $kecamatanTumbangTiti->voting_zone_id,
            'city_id' => $kecamatanTumbangTiti->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $jungkal->id,
                'district_id' => $jungkal->district_id,
                'voting_zone_id' => $jungkal->voting_zone_id,
                'city_id' => $jungkal->city_id,
            ]);
        }
        /**-------------- JUNGKAL ------------- **/



        /**-------------- KALIMAS BARU ------------- **/
        $kalimasBaru = Village::create([
            'name' => 'Desa Kalimas Baru',
            'district_id' => $kecamatanTumbangTiti->id,
            'voting_zone_id' => $kecamatanTumbangTiti->voting_zone_id,
            'city_id' => $kecamatanTumbangTiti->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $kalimasBaru->id,
                'district_id' => $kalimasBaru->district_id,
                'voting_zone_id' => $kalimasBaru->voting_zone_id,
                'city_id' => $kalimasBaru->city_id,
            ]);
        }
        /**-------------- KALIMAS BARU ------------- **/


        /**-------------- MAHAWA ------------- **/
        $mahawa = Village::create([
            'name' => 'Desa Mahawa',
            'district_id' => $kecamatanTumbangTiti->id,
            'voting_zone_id' => $kecamatanTumbangTiti->voting_zone_id,
            'city_id' => $kecamatanTumbangTiti->city_id,
        ]);

        for ($i = 1; $i <= 8; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $mahawa->id,
                'district_id' => $mahawa->district_id,
                'voting_zone_id' => $mahawa->voting_zone_id,
                'city_id' => $mahawa->city_id,
            ]);
        }
        /**-------------- MAHAWA ------------- **/


        /**-------------- NANGA KELAMPAI ------------- **/
        $nangaKelampai = Village::create([
            'name' => 'Desa Nanga Kelampai',
            'district_id' => $kecamatanTumbangTiti->id,
            'voting_zone_id' => $kecamatanTumbangTiti->voting_zone_id,
            'city_id' => $kecamatanTumbangTiti->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $nangaKelampai->id,
                'district_id' => $nangaKelampai->district_id,
                'voting_zone_id' => $nangaKelampai->voting_zone_id,
                'city_id' => $nangaKelampai->city_id,
            ]);
        }
        /**-------------- NANGA KELAMPAI ------------- **/



        /**-------------- NATAI PANJANG ------------- **/
        $nataiPanjang = Village::create([
            'name' => 'Desa Natai Panjang',
            'district_id' => $kecamatanTumbangTiti->id,
            'voting_zone_id' => $kecamatanTumbangTiti->voting_zone_id,
            'city_id' => $kecamatanTumbangTiti->city_id,
        ]);

        for ($i = 1; $i <= 5; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $nataiPanjang->id,
                'district_id' => $nataiPanjang->district_id,
                'voting_zone_id' => $nataiPanjang->voting_zone_id,
                'city_id' => $nataiPanjang->city_id,
            ]);
        }
        /**-------------- NATAI PANJANG ------------- **/



        /**-------------- PEMUATAN JAYA ------------- **/
        $pemuatanJaya = Village::create([
            'name' => 'Desa Pemuatan Jaya',
            'district_id' => $kecamatanTumbangTiti->id,
            'voting_zone_id' => $kecamatanTumbangTiti->voting_zone_id,
            'city_id' => $kecamatanTumbangTiti->city_id,
        ]);

        for ($i = 1; $i <= 5; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $pemuatanJaya->id,
                'district_id' => $pemuatanJaya->district_id,
                'voting_zone_id' => $pemuatanJaya->voting_zone_id,
                'city_id' => $pemuatanJaya->city_id,
            ]);
        }
        /**-------------- PEMUATAN JAYA ------------- **/





        /**-------------- PENGATAPAN RAYA ------------- **/
        $pengatapanRaya = Village::create([
            'name' => 'Desa Pengatapan Raya',
            'district_id' => $kecamatanTumbangTiti->id,
            'voting_zone_id' => $kecamatanTumbangTiti->voting_zone_id,
            'city_id' => $kecamatanTumbangTiti->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $pengatapanRaya->id,
                'district_id' => $pengatapanRaya->district_id,
                'voting_zone_id' => $pengatapanRaya->voting_zone_id,
                'city_id' => $pengatapanRaya->city_id,
            ]);
        }
        /**-------------- PENGATAPAN RAYA ------------- **/



        /**-------------- PETEBANG JAYA ------------- **/
        $petebangJaya = Village::create([
            'name' => 'Desa Petebang Jaya',
            'district_id' => $kecamatanTumbangTiti->id,
            'voting_zone_id' => $kecamatanTumbangTiti->voting_zone_id,
            'city_id' => $kecamatanTumbangTiti->city_id,
        ]);

        for ($i = 1; $i <= 2; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $petebangJaya->id,
                'district_id' => $petebangJaya->district_id,
                'voting_zone_id' => $petebangJaya->voting_zone_id,
                'city_id' => $petebangJaya->city_id,
            ]);
        }
        /**-------------- PETEBANG JAYA ------------- **/



        /**-------------- SEGAR WANGI ------------- **/
        $segarWangi = Village::create([
            'name' => 'Desa Segar Wangi',
            'district_id' => $kecamatanTumbangTiti->id,
            'voting_zone_id' => $kecamatanTumbangTiti->voting_zone_id,
            'city_id' => $kecamatanTumbangTiti->city_id,
        ]);

        for ($i = 1; $i <= 7; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $segarWangi->id,
                'district_id' => $segarWangi->district_id,
                'voting_zone_id' => $segarWangi->voting_zone_id,
                'city_id' => $segarWangi->city_id,
            ]);
        }
        /**-------------- SEGAR WANGI ------------- **/




        /**-------------- SENGKAHARAK ------------- **/
        $sengkarahak = Village::create([
            'name' => 'Desa Sengkaharak',
            'district_id' => $kecamatanTumbangTiti->id,
            'voting_zone_id' => $kecamatanTumbangTiti->voting_zone_id,
            'city_id' => $kecamatanTumbangTiti->city_id,
        ]);

        for ($i = 1; $i <= 2; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sengkarahak->id,
                'district_id' => $sengkarahak->district_id,
                'voting_zone_id' => $sengkarahak->voting_zone_id,
                'city_id' => $sengkarahak->city_id,
            ]);
        }
        /**-------------- SENGKAHARAK ------------- **/




        /**-------------- SEPAUHAN RAYA ------------- **/
        $sepauhanRaya = Village::create([
            'name' => 'Desa Sepauhan Raya',
            'district_id' => $kecamatanTumbangTiti->id,
            'voting_zone_id' => $kecamatanTumbangTiti->voting_zone_id,
            'city_id' => $kecamatanTumbangTiti->city_id,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sepauhanRaya->id,
                'district_id' => $sepauhanRaya->district_id,
                'voting_zone_id' => $sepauhanRaya->voting_zone_id,
                'city_id' => $sepauhanRaya->city_id,
            ]);
        }
        /**-------------- SEPAUHAN RAYA ------------- **/





        /**-------------- SEPURING INDAH ------------- **/
        $sepuringIndah = Village::create([
            'name' => 'Desa Sepuring Indah',
            'district_id' => $kecamatanTumbangTiti->id,
            'voting_zone_id' => $kecamatanTumbangTiti->voting_zone_id,
            'city_id' => $kecamatanTumbangTiti->city_id,
        ]);

        for ($i = 1; $i <= 2; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sepuringIndah->id,
                'district_id' => $sepuringIndah->district_id,
                'voting_zone_id' => $sepuringIndah->voting_zone_id,
                'city_id' => $sepuringIndah->city_id,
            ]);
        }
        /**-------------- SEPURING INDAH ------------- **/



        /**-------------- SERENGKAH ------------- **/
        $serengkah = Village::create([
            'name' => 'Desa Serengkah',
            'district_id' => $kecamatanTumbangTiti->id,
            'voting_zone_id' => $kecamatanTumbangTiti->voting_zone_id,
            'city_id' => $kecamatanTumbangTiti->city_id,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $serengkah->id,
                'district_id' => $serengkah->district_id,
                'voting_zone_id' => $serengkah->voting_zone_id,
                'city_id' => $serengkah->city_id,
            ]);
        }
        /**-------------- SERENGKAH ------------- **/


        /**-------------- SERENGKAH KANAN ------------- **/
        $serengkahKanan = Village::create([
            'name' => 'Desa Serengkah Kanan',
            'district_id' => $kecamatanTumbangTiti->id,
            'voting_zone_id' => $kecamatanTumbangTiti->voting_zone_id,
            'city_id' => $kecamatanTumbangTiti->city_id,
        ]);

        for ($i = 1; $i <= 2; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $serengkahKanan->id,
                'district_id' => $serengkahKanan->district_id,
                'voting_zone_id' => $serengkahKanan->voting_zone_id,
                'city_id' => $serengkahKanan->city_id,
            ]);
        }
        /**-------------- SERENGKAH KANAN ------------- **/




        /**-------------- SUKA DAMAI ------------- **/
        $sukaDamai = Village::create([
            'name' => 'Desa Suka Damai',
            'district_id' => $kecamatanTumbangTiti->id,
            'voting_zone_id' => $kecamatanTumbangTiti->voting_zone_id,
            'city_id' => $kecamatanTumbangTiti->city_id,
        ]);

        for ($i = 1; $i <= 2; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $sukaDamai->id,
                'district_id' => $sukaDamai->district_id,
                'voting_zone_id' => $sukaDamai->voting_zone_id,
                'city_id' => $sukaDamai->city_id,
            ]);
        }
        /**-------------- SUKA DAMAI ------------- **/




        /**-------------- TANJUNG BEULANG ------------- **/
        $tanjungBeulang = Village::create([
            'name' => 'Desa Tanjung Beulang',
            'district_id' => $kecamatanTumbangTiti->id,
            'voting_zone_id' => $kecamatanTumbangTiti->voting_zone_id,
            'city_id' => $kecamatanTumbangTiti->city_id,
        ]);

        for ($i = 1; $i <= 2; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $tanjungBeulang->id,
                'district_id' => $tanjungBeulang->district_id,
                'voting_zone_id' => $tanjungBeulang->voting_zone_id,
                'city_id' => $tanjungBeulang->city_id,
            ]);
        }
        /**-------------- TANJUNG BEULANG ------------- **/




        /**-------------- TANJUNG MALOI ------------- **/
        $tanjungMaloi = Village::create([
            'name' => 'Desa Tanjung Maloi',
            'district_id' => $kecamatanTumbangTiti->id,
            'voting_zone_id' => $kecamatanTumbangTiti->voting_zone_id,
            'city_id' => $kecamatanTumbangTiti->city_id,
        ]);

        for ($i = 1; $i <= 1; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $tanjungMaloi->id,
                'district_id' => $tanjungMaloi->district_id,
                'voting_zone_id' => $tanjungMaloi->voting_zone_id,
                'city_id' => $tanjungMaloi->city_id,
            ]);
        }
        /**-------------- TANJUNG MALOI ------------- **/





        /**-------------- TITI BARU ------------- **/
        $titiBaru = Village::create([
            'name' => 'Desa Titi Baru',
            'district_id' => $kecamatanTumbangTiti->id,
            'voting_zone_id' => $kecamatanTumbangTiti->voting_zone_id,
            'city_id' => $kecamatanTumbangTiti->city_id,
        ]);

        for ($i = 1; $i <= 8; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $titiBaru->id,
                'district_id' => $titiBaru->district_id,
                'voting_zone_id' => $titiBaru->voting_zone_id,
                'city_id' => $titiBaru->city_id,
            ]);
        }
        /**-------------- TITI BARU ------------- **/




        /**-------------- TUMBANG TITI ------------- **/
        $tumbangTiti = Village::create([
            'name' => 'Desa Tumbang Titi',
            'district_id' => $kecamatanTumbangTiti->id,
            'voting_zone_id' => $kecamatanTumbangTiti->voting_zone_id,
            'city_id' => $kecamatanTumbangTiti->city_id,
        ]);

        for ($i = 1; $i <= 11; $i++) {
            $tpsNumber = (strlen($i) != 2) ? '00' . $i : '0' . $i;

            VotingPlace::create([
                'name' => 'TPS ' . $tpsNumber,
                'village_id' => $tumbangTiti->id,
                'district_id' => $tumbangTiti->district_id,
                'voting_zone_id' => $tumbangTiti->voting_zone_id,
                'city_id' => $tumbangTiti->city_id,
            ]);
        }
        /**-------------- TUMBANG TITI ------------- **/

        /**-------------- TUMBANG TITI (DAPIL 4) ------------- **/
    }
}
