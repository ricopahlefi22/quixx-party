<?php

namespace Database\Seeders;

use Database\Seeders\Village\AirUpasSeeder;
use Database\Seeders\Village\BenuaKayongSeeder;
use Database\Seeders\Village\DeltaPawanSeeder;
use Database\Seeders\Village\HuluSungaiSeeder;
use Database\Seeders\Village\JelaiHuluSeeder;
use Database\Seeders\Village\KarimataSeeder;
use Database\Seeders\Village\KendawanganSeeder;
use Database\Seeders\Village\ManisMataSeeder;
use Database\Seeders\Village\MarauSeeder;
use Database\Seeders\Village\MatanHilirSelatanSeeder;
use Database\Seeders\Village\MatanHilirUtaraSeeder;
use Database\Seeders\Village\MuaraPawanSeeder;
use Database\Seeders\Village\NangaTayapSeeder;
use Database\Seeders\Village\PemahanSeeder;
use Database\Seeders\Village\PulauMayaSeeder;
use Database\Seeders\Village\SandaiSeeder;
use Database\Seeders\Village\SepontiSeeder;
use Database\Seeders\Village\SimpangDuaSeeder;
use Database\Seeders\Village\SimpangHilirSeeder;
use Database\Seeders\Village\SimpangHuluSeeder;
use Database\Seeders\Village\SingkupSeeder;
use Database\Seeders\Village\SukadanaSeeder;
use Database\Seeders\Village\SungaiLaurSeeder;
use Database\Seeders\Village\SungaiMelayuRayakSeeder;
use Database\Seeders\Village\TelukBatangSeeder;
use Database\Seeders\Village\TumbangTitiSeeder;
use Illuminate\Database\Seeder;
use SandaiSeeder as GlobalSandaiSeeder;

class VillageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            /**-------------- (DAPIL 1) KABUPATEN KETAPANG ------------- **/
            DeltaPawanSeeder::class,
            MatanHilirUtaraSeeder::class,
            MuaraPawanSeeder::class,
            /**-------------- (DAPIL 1) KABUPATEN KETAPANG ------------- **/


            /**-------------- (DAPIL 2) KABUPATEN KETAPANG ------------- **/
            SimpangDuaSeeder::class,
            SimpangHuluSeeder::class,
            SungaiLaurSeeder::class,
            /**-------------- (DAPIL 2) KABUPATEN KETAPANG ------------- **/


            /**-------------- (DAPIL 3) KABUPATEN KETAPANG ------------- **/
            HuluSungaiSeeder::class,
            NangaTayapSeeder::class,
            SandaiSeeder::class,
            /**-------------- (DAPIL 3) KABUPATEN KETAPANG ------------- **/


            /**-------------- (DAPIL 4) KABUPATEN KETAPANG ------------- **/
            JelaiHuluSeeder::class,
            PemahanSeeder::class,
            SungaiMelayuRayakSeeder::class,
            TumbangTitiSeeder::class,
            /**-------------- (DAPIL 4) KABUPATEN KETAPANG ------------- **/


            /**-------------- (DAPIL 5) KABUPATEN KETAPANG ------------- **/
            AirUpasSeeder::class,
            ManisMataSeeder::class,
            MarauSeeder::class,
            /**-------------- (DAPIL 5) KABUPATEN KETAPANG ------------- **/


            /**-------------- (DAPIL 6) KABUPATEN KETAPANG ------------- **/
            KendawanganSeeder::class,
            SingkupSeeder::class,
            /**-------------- (DAPIL 6) KABUPATEN KETAPANG ------------- **/


            /**-------------- (DAPIL 7) KABUPATEN KETAPANG ------------- **/
            BenuaKayongSeeder::class,
            MatanHilirSelatanSeeder::class,
            /**-------------- (DAPIL 7) KABUPATEN KETAPANG ------------- **/






            /**-------------- (DAPIL 1) KABUPATEN KAYONG UTARA ------------- **/
            SukadanaSeeder::class,
            /**-------------- (DAPIL 1) KABUPATEN KAYONG UTARA ------------- **/


            /**-------------- (DAPIL 2) KABUPATEN KAYONG UTARA ------------- **/
            KarimataSeeder::class,
            PulauMayaSeeder::class,
            /**-------------- (DAPIL 2) KABUPATEN KAYONG UTARA ------------- **/


            /**-------------- (DAPIL 3) KABUPATEN KAYONG UTARA ------------- **/
            SepontiSeeder::class,
            TelukBatangSeeder::class,
            /**-------------- (DAPIL 3) KABUPATEN KAYONG UTARA ------------- **/


            /**-------------- (DAPIL 4) KABUPATEN KAYONG UTARA ------------- **/
            SimpangHilirSeeder::class,
            /**-------------- (DAPIL 4) KABUPATEN KAYONG UTARA ------------- **/

        ]);
    }
}
