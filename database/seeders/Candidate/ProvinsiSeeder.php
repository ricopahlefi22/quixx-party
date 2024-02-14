<?php

namespace Database\Seeders\Candidate;

use App\Models\Candidate;
use Illuminate\Database\Seeder;

class ProvinsiSeeder extends Seeder
{
    public function run(): void
    {
        // Partai Demokrat
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/kalbar-8/1.png',
            'number' => 1,
            'name' => 'H. Rasmidi, S.E., M.M.',
            'gender' => 'Laki-Laki',
            'party_id' => 14,
            'level' => 'Provinsi',
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/kalbar-8/2.png',
            'number' => 2,
            'name' => 'M. Sukardi, S.E., M.M.',
            'gender' => 'Laki-Laki',
            'party_id' => 14,
            'level' => 'Provinsi',
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/kalbar-8/3.png',
            'number' => 3,
            'name' => 'Devi Anggraini',
            'gender' => 'Perempuan',
            'party_id' => 14,
            'level' => 'Provinsi',
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/kalbar-8/4.png',
            'number' => 4,
            'name' => 'H. Nizarwan Achmad, S.Sos., M.Si.',
            'gender' => 'Laki-Laki',
            'party_id' => 14,
            'level' => 'Provinsi',
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/kalbar-8/5.png',
            'number' => 5,
            'name' => 'Amantus Sumarno, S.E.',
            'gender' => 'Laki-Laki',
            'party_id' => 14,
            'level' => 'Provinsi',
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/kalbar-8/6.png',
            'number' => 6,
            'name' => 'Widiya Gusmiyarti',
            'gender' => 'Perempuan',
            'party_id' => 14,
            'level' => 'Provinsi',
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/kalbar-8/7.png',
            'number' => 7,
            'name' => 'Indah Kurniati',
            'gender' => 'Perempuan',
            'party_id' => 14,
            'level' => 'Provinsi',
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/kalbar-8/8.png',
            'number' => 8,
            'name' => 'Rudi Hartono',
            'gender' => 'Laki-Laki',
            'party_id' => 14,
            'level' => 'Provinsi',
        ]);
        // Partai Demokrat
    }
}
