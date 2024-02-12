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
            'short_name' => 'PKB',
            'number' => 1,
        ]);

        Party::factory()->create([
            'logo' => 'images/party/partai-gerindra.png',
            'name' => 'Partai Gerakan Indonesia Raya',
            'short_name' => 'Gerindra',
            'number' => 2,
        ]);

        Party::factory()->create([
            'logo' => 'images/party/pdi-perjuangan.png',
            'name' => 'Partai Demokrasi Indonesia Perjuangan',
            'short_name' => 'PDIP',
            'number' => 3,
        ]);

        Party::factory()->create([
            'logo' => 'images/party/partai-golkar.png',
            'name' => 'Partai Golongan Karya',
            'short_name' => 'Golkar',
            'number' => 4,
        ]);

        Party::factory()->create([
            'logo' => 'images/party/partai-nasdem.png',
            'name' => 'Partai Nasional Demokrat',
            'short_name' => 'Nasdem',
            'number' => 5,
        ]);

        Party::factory()->create([
            'logo' => 'images/party/partai-buruh.png',
            'name' => 'Partai Buruh',
            'short_name' => 'Buruh',
            'number' => 6,
        ]);

        Party::factory()->create([
            'logo' => 'images/party/partai-gelora-indonesia.png',
            'name' => 'Partai Gelombang Rakyat Indonesia',
            'short_name' => 'Gelora',
            'number' => 7,
        ]);

        Party::factory()->create([
            'logo' => 'images/party/partai-pks.png',
            'name' => 'Partai Keadilan Sejahtera',
            'short_name' => 'PKS',
            'number' => 8,
        ]);

        Party::factory()->create([
            'logo' => 'images/party/partai-pkn.png',
            'name' => 'Partai Kebangkitan Nusantara',
            'short_name' => 'PKN',
            'number' => 9,
        ]);

        Party::factory()->create([
            'logo' => 'images/party/partai-hanura.png',
            'name' => 'Partai Hati Nurani Rakyat',
            'short_name' => 'Hanura',
            'number' => 10,
        ]);

        Party::factory()->create([
            'logo' => 'images/party/partai-garuda.png',
            'name' => 'Partai Garda Perubahan Indonesia',
            'short_name' => 'Garuda',
            'number' => 11,
        ]);

        Party::factory()->create([
            'logo' => 'images/party/partai-pan.png',
            'name' => 'Partai Amanat Nasional',
            'short_name' => 'PAN',
            'number' => 12,
        ]);

        Party::factory()->create([
            'logo' => 'images/party/partai-bulan-bintang.png',
            'name' => 'Partai Bulan Bintang',
            'short_name' => 'PBB',
            'number' => 13,
        ]);

        Party::factory()->create([
            'logo' => 'images/party/partai-demokrat.png',
            'name' => 'Partai Demokrat',
            'short_name' => 'Demokrat',
            'number' => 14,
        ]);

        Party::factory()->create([
            'logo' => 'images/party/partai-psi.png',
            'name' => 'Partai Solidaritas Indonesia',
            'short_name' => 'PSI',
            'number' => 15,
        ]);

        Party::factory()->create([
            'logo' => 'images/party/partai-perindo.png',
            'name' => 'Partai Perindo',
            'short_name' => 'Perindo',
            'number' => 16,
        ]);

        Party::factory()->create([
            'logo' => 'images/party/partai-ppp.png',
            'name' => 'Partai Persatuan Pembangunan',
            'short_name' => 'PPP',
            'number' => 17,
        ]);

        Party::factory()->create([
            'logo' => 'images/party/partai-ummat.png',
            'name' => 'Partai Ummat',
            'short_name' => 'Ummat',
            'number' => 24,
        ]);
    }
}
