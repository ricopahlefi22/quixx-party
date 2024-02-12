<?php

namespace Database\Seeders\Candidate;

use App\Models\Candidate;
use App\Models\VotingZone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Dapil7Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $votingZone = VotingZone::where('name', 'Dapil 7')->first();

        // Partai Kebangkitan Bangsa
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-7/1.png',
            'number' => 1,
            'name' => 'Fathol Bari, S.H.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 1,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-7/2.png',
            'number' => 2,
            'name' => 'Arba Datol Hairal, S.Pd.',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 1,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-7/3.png',
            'number' => 3,
            'name' => 'Rodi Rosadi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 1,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-7/4.png',
            'number' => 4,
            'name' => 'Mas Susanti',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 1,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-7/5.png',
            'number' => 5,
            'name' => 'Muhammad Al Farizi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 1,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-7/6.png',
            'number' => 6,
            'name' => 'Rahida',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 1,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-7/7.png',
            'number' => 7,
            'name' => 'Ririn Astuti',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 1,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Kebangkitan Bangsa

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Gerakan Indonesia Raya
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-7/1.png',
            'number' => 1,
            'name' => 'H. Mathoji',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 2,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-7/2.png',
            'number' => 2,
            'name' => 'Masturi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 2,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-7/3.png',
            'number' => 3,
            'name' => 'Risma Aryani, S.E., M.A.P.',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 2,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-7/4.png',
            'number' => 4,
            'name' => 'Mustar, S.E.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 2,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-7/5.png',
            'number' => 5,
            'name' => 'Rahmat Kurniawan',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 2,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-7/6.png',
            'number' => 6,
            'name' => 'Sefti Nurindah Sari',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 2,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-7/7.png',
            'number' => 7,
            'name' => 'Mahrel',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 2,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Gerakan Indonesia Raya

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Demokrasi Indonesia Perjuangan
        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-7/1.png',
            'number' => 1,
            'name' => 'Hasib Setiawan, S.Pd.I.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 3,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-7/2.png',
            'number' => 2,
            'name' => 'Apolonius Salim',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 3,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-7/3.png',
            'number' => 3,
            'name' => 'Maryatan',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 3,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-7/4.png',
            'number' => 4,
            'name' => 'Drs. Joko Prastowo, M.H.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 3,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-7/5.png',
            'number' => 5,
            'name' => 'Julita Permata Sari',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 3,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-7/6.png',
            'number' => 6,
            'name' => 'Heni Pariana',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 3,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-7/7.png',
            'number' => 7,
            'name' => 'Jailani',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 3,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Demokrasi Indonesia Perjuangan

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Golongan Karya
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-7/1.png',
            'number' => 1,
            'name' => 'Achmad Sholeh, S.T., M.Sos',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 4,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-7/2.png',
            'number' => 2,
            'name' => 'Uti Royden Top, S.M.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 4,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-7/3.png',
            'number' => 3,
            'name' => 'Hj. Hairiah',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 4,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-7/4.png',
            'number' => 4,
            'name' => 'Muhidin',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 4,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-7/5.png',
            'number' => 5,
            'name' => 'Elena',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 4,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-7/6.png',
            'number' => 6,
            'name' => 'Juliana',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 4,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-7/7.png',
            'number' => 7,
            'name' => 'Abdurrahim',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 4,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Golongan Karya

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Nasdem
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-7/1.png',
            'number' => 1,
            'name' => 'Wasti',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 5,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-7/2.png',
            'number' => 2,
            'name' => 'Hamidah Febriana',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 5,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-7/3.png',
            'number' => 3,
            'name' => 'Supriyadi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 5,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-7/4.png',
            'number' => 4,
            'name' => 'Supandi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 5,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-7/5.png',
            'number' => 5,
            'name' => 'Muhammad Ali, S.T.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 5,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-7/6.png',
            'number' => 6,
            'name' => 'Utin Supiati',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 5,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-7/7.png',
            'number' => 7,
            'name' => 'M. Arsyat, A.Ma',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 5,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Nasdem

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Buruh
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-buruh/ketapang-7/1.png',
            'number' => 1,
            'name' => 'Agus Billi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 6,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-buruh/ketapang-7/2.png',
            'number' => 2,
            'name' => 'Asnuri',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 6,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-buruh/ketapang-7/3.png',
            'number' => 3,
            'name' => 'Sarpiah',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 6,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-buruh/ketapang-7/4.png',
            'number' => 4,
            'name' => 'Hariandi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 6,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-buruh/ketapang-7/5.png',
            'number' => 5,
            'name' => 'Kusnadi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 6,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-buruh/ketapang-7/6.png',
            'number' => 6,
            'name' => 'Lusiana',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 6,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Buruh

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Gelora Indonesia
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gelora-indonesia/ketapang-7/1.png',
            'number' => 1,
            'name' => 'Deni Ismardi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 7,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gelora-indonesia/ketapang-7/2.png',
            'number' => 2,
            'name' => 'Malini',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 7,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Gelora Indonesia

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai PKS
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pks/ketapang-7/1.png',
            'number' => 1,
            'name' => 'M. Puadi, S.Si',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 8,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pks/ketapang-7/2.png',
            'number' => 2,
            'name' => 'Azhar, S.Pd.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 8,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pks/ketapang-7/3.png',
            'number' => 3,
            'name' => 'Ramlah',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 8,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pks/ketapang-7/4.png',
            'number' => 4,
            'name' => 'Rahmad Hidayat',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 8,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pks/ketapang-7/5.png',
            'number' => 5,
            'name' => 'Moh. Yusuf',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 8,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pks/ketapang-7/6.png',
            'number' => 6,
            'name' => 'Marsa Lena',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 8,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pks/ketapang-7/7.png',
            'number' => 7,
            'name' => 'Syarif Ghazwal Fikri, S.Pd.I.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 8,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai PKS

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Hanura
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-7/1.png',
            'number' => 1,
            'name' => 'Hendriadi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 10,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-7/2.png',
            'number' => 2,
            'name' => 'M. Abdul Azis Nor',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 10,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-7/3.png',
            'number' => 3,
            'name' => 'Fitri Atun',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 10,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-7/4.png',
            'number' => 4,
            'name' => 'Muhammad Amin',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 10,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-7/5.png',
            'number' => 5,
            'name' => 'Wiwik Suyanti',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 10,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-7/6.png',
            'number' => 6,
            'name' => 'Saipul',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 10,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-7/7.png',
            'number' => 7,
            'name' => 'Rudi Masla',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 10,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Hanura

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai PAN
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-7/1.png',
            'number' => 1,
            'name' => 'Syahrizal',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 12,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-7/2.png',
            'number' => 2,
            'name' => 'H. Ali Sabri',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 12,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-7/3.png',
            'number' => 3,
            'name' => 'Rachmi Angriani',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 12,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-7/4.png',
            'number' => 4,
            'name' => 'Sy. Hudiansyah, S.Pd.I.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 12,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-7/5.png',
            'number' => 5,
            'name' => 'Kusmawadi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 12,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-7/6.png',
            'number' => 6,
            'name' => 'Karmila',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 12,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-7/7.png',
            'number' => 7,
            'name' => 'Asmu',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 12,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai PAN

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Demokrat
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-7/1.png',
            'number' => 1,
            'name' => 'Zunaidi, S.Pd.I.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 14,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-7/2.png',
            'number' => 2,
            'name' => 'H. Muardi, S.E.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 14,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-7/3.png',
            'number' => 3,
            'name' => 'Anisyah',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 14,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-7/4.png',
            'number' => 4,
            'name' => 'Dewi Yulianti, S.H.',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 14,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-7/5.png',
            'number' => 5,
            'name' => 'Mardiat',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 14,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-7/6.png',
            'number' => 6,
            'name' => 'Uti Hiriyansah',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 14,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-7/7.png',
            'number' => 7,
            'name' => 'Nursiri',
            'gender' => 'Laki-Laki',
            'city' => 'Pontianak',
            'party_id' => 14,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Demokrat

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai PSI
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-psi/ketapang-7/1.png',
            'number' => 1,
            'name' => 'A. Kadir, S.E.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 15,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-psi/ketapang-7/2.png',
            'number' => 2,
            'name' => 'Ery Julianto',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 15,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-psi/ketapang-7/3.png',
            'number' => 3,
            'name' => 'Neli Darusman, S.E.',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 15,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-psi/ketapang-7/4.png',
            'number' => 4,
            'name' => 'Antonia. M',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 15,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai PSI

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Perindo
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-7/1.png',
            'number' => 1,
            'name' => 'R. Joko Santoso',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 16,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-7/2.png',
            'number' => 2,
            'name' => 'Eti Kurniatin, S.Pd.',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 16,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-7/3.png',
            'number' => 3,
            'name' => 'Erwin',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 16,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-7/4.png',
            'number' => 4,
            'name' => 'Muhammad Ahmadi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 16,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-7/5.png',
            'number' => 5,
            'name' => 'Abdul Malik',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 16,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-7/6.png',
            'number' => 6,
            'name' => 'Helentina Nababan',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 16,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-7/7.png',
            'number' => 7,
            'name' => 'Redo Aprillindo Rizaldi, S.I.P.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 16,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Perindo

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai PPP
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ppp/ketapang-7/1.png',
            'number' => 1,
            'name' => 'Suryani',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 17,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ppp/ketapang-7/2.png',
            'number' => 2,
            'name' => 'Aliansyah',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 17,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ppp/ketapang-7/3.png',
            'number' => 3,
            'name' => 'Juju Jubaedah',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 17,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ppp/ketapang-7/4.png',
            'number' => 4,
            'name' => 'Abdullah Nuriman',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 17,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ppp/ketapang-7/5.png',
            'number' => 5,
            'name' => 'Sutrisno, S.H.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 17,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ppp/ketapang-7/6.png',
            'number' => 6,
            'name' => 'Putri Yandini',
            'gender' => 'Perempuan',
            'city' => 'Pontianak',
            'party_id' => 17,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ppp/ketapang-7/7.png',
            'number' => 7,
            'name' => 'Deni Hariyanto',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 17,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai PPP

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Ummat
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ummat/ketapang-7/1.png',
            'number' => 1,
            'name' => 'Salihan',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 18,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ummat/ketapang-7/2.png',
            'number' => 2,
            'name' => 'Sumiati',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 18,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ummat/ketapang-7/3.png',
            'number' => 3,
            'name' => 'Arisandini, S.Pd.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 18,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ummat/ketapang-7/4.png',
            'number' => 4,
            'name' => 'Suriansyah',
            'gender' => 'Laki-Laki',
            'city' => 'Pontianak',
            'party_id' => 18,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ummat/ketapang-7/5.png',
            'number' => 5,
            'name' => 'Mahyaman',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 18,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ummat/ketapang-7/6.png',
            'number' => 6,
            'name' => 'Yupita',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 18,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Ummat
    }
}
