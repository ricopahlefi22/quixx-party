<?php

namespace Database\Seeders\Candidate;

use App\Models\Candidate;
use App\Models\VotingZone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Dapil6Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $votingZone = VotingZone::where('name', 'Dapil 6')->first();

        // Partai Kebangkitan Bangsa
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-6/1.png',
            'number' => 1,
            'name' => 'Pudiyono, S.Pd',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 1,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-6/2.png',
            'number' => 2,
            'name' => 'Zaiwadul Hisan',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 1,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-6/3.png',
            'number' => 3,
            'name' => 'Rosmayanti, S.M.',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 1,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-6/4.png',
            'number' => 4,
            'name' => 'Kevin Alexander Lerrick',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 1,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-6/5.png',
            'number' => 5,
            'name' => 'Yumiati',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 1,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Kebangkitan Bangsa

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Gerakan Indonesia Raya
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-6/1.png',
            'number' => 1,
            'name' => 'Sopian Hadi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 2,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-6/2.png',
            'number' => 2,
            'name' => 'Hasim, S.E.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 2,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-6/3.png',
            'number' => 3,
            'name' => 'Lili Apriyanti',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 2,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-6/4.png',
            'number' => 4,
            'name' => 'Toti Ramawati, S.K.M',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 2,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-6/5.png',
            'number' => 5,
            'name' => 'Emmarinus Sinaga',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 2,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Gerakan Indonesia Raya

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Demokrasi Indonesia Perjuangan
        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-6/1.png',
            'number' => 1,
            'name' => 'Ahin Mandri, S.P.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 3,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-6/2.png',
            'number' => 2,
            'name' => 'Bahrudin Efendi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 3,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-6/3.png',
            'number' => 3,
            'name' => 'Aprilina Emi, S.P.',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 3,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-6/4.png',
            'number' => 4,
            'name' => 'Sukandi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 3,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-6/5.png',
            'number' => 5,
            'name' => 'Marina Meirina, S.Kep., M.Sos.',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 3,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Demokrasi Indonesia Perjuangan

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Golongan Karya
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-6/1.png',
            'number' => 1,
            'name' => 'Gusmani, S.M.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 4,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-6/2.png',
            'number' => 2,
            'name' => 'Eldy Yanto, M.M.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 4,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-6/3.png',
            'number' => 3,
            'name' => 'Endang Susilawati',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 4,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-6/4.png',
            'number' => 4,
            'name' => 'Cahaya Fatimah',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 4,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-6/5.png',
            'number' => 5,
            'name' => 'Murdiyanto',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 4,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Golongan Karya

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Nasdem
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-6/1.png',
            'number' => 1,
            'name' => 'Jhonny Hendrawanto, A.Md.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 5,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-6/2.png',
            'number' => 2,
            'name' => 'Firwan, A.Md.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 5,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-6/3.png',
            'number' => 3,
            'name' => 'Febri Fitra Sari, S.Pd.SD.',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 5,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-6/4.png',
            'number' => 4,
            'name' => 'Yeliwati. T',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 5,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-6/5.png',
            'number' => 5,
            'name' => 'Aman Panjaitan',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 5,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Nasdem

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Buruh
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-buruh/ketapang-6/1.png',
            'number' => 1,
            'name' => 'Yudriansyah',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 6,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-buruh/ketapang-6/2.png',
            'number' => 2,
            'name' => 'Muhammad Fathoni',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 6,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-buruh/ketapang-6/3.png',
            'number' => 3,
            'name' => 'Hasanah',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 6,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Buruh

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai PKS
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pks/ketapang-6/1.png',
            'number' => 1,
            'name' => 'Feri Harianto',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 8,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pks/ketapang-6/2.png',
            'number' => 2,
            'name' => 'Susilawati, S.E.',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 8,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai PKS

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Hanura
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-6/1.png',
            'number' => 1,
            'name' => 'Supiandi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 10,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-6/2.png',
            'number' => 2,
            'name' => 'Angel Isterina Ceaserent, A.Md.Keb',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 10,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-6/3.png',
            'number' => 3,
            'name' => 'Kusnadi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 10,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-6/4.png',
            'number' => 4,
            'name' => 'Icha Noviola',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 10,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-6/5.png',
            'number' => 5,
            'name' => 'Sahril Novian Pratama, S.I.P.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 10,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Hanura

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai PAN
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-6/1.png',
            'number' => 1,
            'name' => 'Elmantono',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 12,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-6/2.png',
            'number' => 2,
            'name' => 'Yevie Kharinawati, S.I.P.',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 12,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-6/3.png',
            'number' => 3,
            'name' => 'Ahmad Rifa\'i',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 12,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-6/4.png',
            'number' => 4,
            'name' => 'Melda Anggraeni',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 12,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-6/5.png',
            'number' => 5,
            'name' => 'Zulkarnain',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 12,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai PAN

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Demokrat
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-6/1.png',
            'number' => 1,
            'name' => 'Yonathan Agung Rachmadi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 14,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-6/2.png',
            'number' => 2,
            'name' => 'M. Aminollah',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 14,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-6/3.png',
            'number' => 3,
            'name' => 'Yam Sasni',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 14,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-6/4.png',
            'number' => 4,
            'name' => 'Hestami Winarti',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 14,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-6/5.png',
            'number' => 5,
            'name' => 'Heri Siswanto',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 14,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Demokrat

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai PSI
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-psi/ketapang-6/1.png',
            'number' => 1,
            'name' => 'Siti Aisah',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 15,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai PSI

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Perindo
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-6/1.png',
            'number' => 1,
            'name' => 'Susanto',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 16,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-6/2.png',
            'number' => 2,
            'name' => 'Evita Agustina',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 16,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-6/3.png',
            'number' => 3,
            'name' => 'Yemi',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 16,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-6/4.png',
            'number' => 4,
            'name' => 'Erwin Irawan',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 16,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Perindo

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai PPP
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ppp/ketapang-6/1.png',
            'number' => 1,
            'name' => 'H. Zainuddin, S.E.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 17,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ppp/ketapang-6/2.png',
            'number' => 2,
            'name' => 'Hariyati',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 17,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ppp/ketapang-6/3.png',
            'number' => 3,
            'name' => 'Siti Nur Arafah',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 17,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ppp/ketapang-6/4.png',
            'number' => 4,
            'name' => 'Abdul Sani, S.H., M.M., M.Kn.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 17,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai PPP

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Ummat
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ummat/ketapang-6/1.png',
            'number' => 1,
            'name' => 'Rabbir Firli',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 18,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ummat/ketapang-6/2.png',
            'number' => 2,
            'name' => 'Ibnul Hadi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 18,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ummat/ketapang-6/3.png',
            'number' => 3,
            'name' => 'Maryani',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 18,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Ummat
    }
}
