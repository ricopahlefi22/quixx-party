<?php

namespace Database\Seeders;

use App\Models\Party;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Party::factory()->create([
            'logo' => 'images/party/partai-pkb.png',
            'name' => 'Partai Kebangkitan Bangsa',
            'number' => 1,
        ]);

        Party::factory()->create([
            'logo' => 'images/party/partai-gerindra.png',
            'name' => 'Partai Gerakan Indonesia Raya',
            'number' => 2,
        ]);

        Party::factory()->create([
            'logo' => 'images/party/pdi-perjuangan.png',
            'name' => 'Partai Demokrasi Indonesia Perjuangan',
            'number' => 3,
        ]);

        Party::factory()->create([
            'logo' => 'images/party/partai-golkar.png',
            'name' => 'Partai Golongan Karya',
            'number' => 4,
        ]);

        Party::factory()->create([
            'logo' => 'images/party/partai-nasdem.png',
            'name' => 'Partai Nasdem',
            'number' => 5,
        ]);

        Party::factory()->create([
            'logo' => 'images/party/partai-buruh.png',
            'name' => 'Partai Buruh',
            'number' => 6,
        ]);

        Party::factory()->create([
            'logo' => 'images/party/partai-gelora-indonesia.png',
            'name' => 'Partai Gelombang Rakyat Indonesia',
            'number' => 7,
        ]);

        Party::factory()->create([
            'logo' => 'images/party/partai-pks.png',
            'name' => 'Partai Keadilan Sejahtera',
            'number' => 8,
        ]);

        Party::factory()->create([
            'logo' => 'images/party/partai-pkn.png',
            'name' => 'Partai Kebangkitan Nusantara',
            'number' => 9,
        ]);

        Party::factory()->create([
            'logo' => 'images/party/partai-hanura.png',
            'name' => 'Partai Hati Nurani Rakyat',
            'number' => 10,
        ]);

        Party::factory()->create([
            'logo' => 'images/party/partai-garuda.png',
            'name' => 'Partai Garda Perubahan Indonesia',
            'number' => 11,
        ]);

        Party::factory()->create([
            'logo' => 'images/party/partai-pan.png',
            'name' => 'Partai Amanat Nasional',
            'number' => 12,
        ]);

        Party::factory()->create([
            'logo' => 'images/party/partai-bulan-bintang.png',
            'name' => 'Partai Bulan Bintang',
            'number' => 13,
        ]);

        Party::factory()->create([
            'logo' => 'images/party/partai-demokrat.png',
            'name' => 'Partai Demokrat',
            'number' => 14,
        ]);

        Party::factory()->create([
            'logo' => 'images/party/partai-psi.png',
            'name' => 'Partai Solidaritas Indonesia',
            'number' => 15,
        ]);

        Party::factory()->create([
            'logo' => 'images/party/partai-perindo.png',
            'name' => 'Partai Perindo',
            'number' => 16,
        ]);

        Party::factory()->create([
            'logo' => 'images/party/partai-ppp.png',
            'name' => 'Partai Persatuan Pembangunan',
            'number' => 17,
        ]);

        Party::factory()->create([
            'logo' => 'images/party/partai-ummat.png',
            'name' => 'Partai Ummat',
            'number' => 24,
        ]);
    }
}
