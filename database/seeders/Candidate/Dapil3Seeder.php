<?php

namespace Database\Seeders\Candidate;

use App\Models\Candidate;
use App\Models\VotingZone;
use Illuminate\Database\Seeder;

class Dapil3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $votingZone = VotingZone::where('name', 'Dapil 3')->first();

        // Partai Kebangkitan Bangsa
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-3/1.png',
            'number' => 1,
            'name' => 'Sahadi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 1,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-3/2.png',
            'number' => 2,
            'name' => 'Sumadi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 1,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-3/3.png',
            'number' => 3,
            'name' => 'Erlia',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 1,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-3/4.png',
            'number' => 4,
            'name' => 'Melia Nurul Hasanah',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 1,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-3/5.png',
            'number' => 5,
            'name' => 'Lie Hun Seng',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 1,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-3/6.png',
            'number' => 6,
            'name' => 'Ridwan, S.Kom.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 1,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-3/7.png',
            'number' => 7,
            'name' => 'Devi Ariani',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 1,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Kebangkitan Bangsa

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Gerakan Indonesia Raya
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-3/1.png',
            'number' => 1,
            'name' => 'Muhammad Rijal',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 2,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-3/2.png',
            'number' => 2,
            'name' => 'Erpuat',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 2,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-3/3.png',
            'number' => 3,
            'name' => 'Neti Haryati',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 2,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-3/4.png',
            'number' => 4,
            'name' => 'Issiat Isyak, S.Pd.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 2,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-3/5.png',
            'number' => 5,
            'name' => 'Aritonang, S.I.P',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 2,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-3/6.png',
            'number' => 6,
            'name' => 'Emilia, A.Md.',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 2,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-3/7.png',
            'number' => 7,
            'name' => 'Sabinus Andi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 2,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Gerakan Indonesia Raya

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Demokrasi Indonesia Perjuangan
        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-3/1.png',
            'number' => 1,
            'name' => 'Kurniawan, S.H.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 3,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-3/2.png',
            'number' => 2,
            'name' => 'Iyus Toda',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 3,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-3/3.png',
            'number' => 3,
            'name' => 'Euis Suminarsih, A.Md.',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 3,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-3/4.png',
            'number' => 4,
            'name' => 'Amansius, S.H.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 3,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-3/5.png',
            'number' => 5,
            'name' => 'Agapitus, S.H.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 3,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-3/6.png',
            'number' => 6,
            'name' => 'Dewi Paramita',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 3,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-3/7.png',
            'number' => 7,
            'name' => 'Robi Cahyadi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 3,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Demokrasi Indonesia Perjuangan

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Golongan Karya
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-3/1.png',
            'number' => 1,
            'name' => 'Hendri Wijaya',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 4,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-3/2.png',
            'number' => 2,
            'name' => 'Suyanto, S.I.P.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 4,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-3/3.png',
            'number' => 3,
            'name' => 'Marsila',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 4,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-3/4.png',
            'number' => 4,
            'name' => 'Dodik Mijil Siswanto, A.Md.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 4,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-3/5.png',
            'number' => 5,
            'name' => 'Fira Arniwati, S.Tr.T.',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 4,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-3/6.png',
            'number' => 6,
            'name' => 'Ferdinandus Masdi, S.Sos.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 4,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-3/7.png',
            'number' => 7,
            'name' => 'Theopanus Petrus',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 4,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Golongan Karya

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Nasdem
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-3/1.png',
            'number' => 1,
            'name' => 'Uti Muliadi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 5,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-3/2.png',
            'number' => 2,
            'name' => 'Patrisius Yansen, S.H.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 5,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-3/3.png',
            'number' => 3,
            'name' => 'Devita Satriana, S.K.M.',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 5,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-3/4.png',
            'number' => 4,
            'name' => 'Mustardi, S.Pd.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 5,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-3/5.png',
            'number' => 5,
            'name' => 'Hertedi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 5,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-3/6.png',
            'number' => 6,
            'name' => 'Karmilawati, S.E.',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 5,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-3/7.png',
            'number' => 7,
            'name' => 'Suharyono',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 5,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Nasdem

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Buruh
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-buruh/ketapang-3/1.png',
            'number' => 1,
            'name' => 'Rahmalia',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 6,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Buruh

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai PKS
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pks/ketapang-3/1.png',
            'number' => 1,
            'name' => 'Mustapirin',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 8,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pks/ketapang-3/2.png',
            'number' => 2,
            'name' => 'Devy Alghafiq',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 8,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pks/ketapang-3/3.png',
            'number' => 3,
            'name' => 'Agustina, A.Md.',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 8,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pks/ketapang-3/4.png',
            'number' => 4,
            'name' => 'Prima Yuliantoro, S.Pd.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 8,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pks/ketapang-3/5.png',
            'number' => 5,
            'name' => 'Wawan Tris A. Karim',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 8,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pks/ketapang-3/6.png',
            'number' => 6,
            'name' => 'Eva Rosdiana Dewi',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 8,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pks/ketapang-3/7.png',
            'number' => 7,
            'name' => 'Jaka Pratama',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 8,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai PKS

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Hanura
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-3/1.png',
            'number' => 1,
            'name' => 'Supriyatno',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 10,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-3/2.png',
            'number' => 2,
            'name' => 'Belgerano',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 10,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-3/3.png',
            'number' => 3,
            'name' => 'Maryati',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 10,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-3/4.png',
            'number' => 4,
            'name' => 'Nova Lestari Ningsih',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 10,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-3/5.png',
            'number' => 5,
            'name' => 'Martin Luter',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 10,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-3/6.png',
            'number' => 6,
            'name' => 'Arianto',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 10,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-3/7.png',
            'number' => 7,
            'name' => 'Feky Resky',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 10,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Hanura

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai PAN
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-3/1.png',
            'number' => 1,
            'name' => 'Usman Diyanto',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 12,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-3/2.png',
            'number' => 2,
            'name' => 'Hariyanto',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 12,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-3/3.png',
            'number' => 3,
            'name' => 'Tuti Kusmawati',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 12,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-3/4.png',
            'number' => 4,
            'name' => 'Asmawadi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 12,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-3/5.png',
            'number' => 5,
            'name' => 'Donata Melsiana, A.Md.T.',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 12,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-3/6.png',
            'number' => 6,
            'name' => 'Ainah',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 12,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-3/7.png',
            'number' => 7,
            'name' => 'Damianus Yogi Kurniawan',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 12,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai PAN

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Demokrat
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-3/1.png',
            'number' => 1,
            'name' => 'Dodi Kurniawan',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 14,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-3/2.png',
            'number' => 2,
            'name' => 'Supratman, S.Sos., M.Si.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 14,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-3/3.png',
            'number' => 3,
            'name' => 'Nur Halisah',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 14,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-3/4.png',
            'number' => 4,
            'name' => 'Weni Prida',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 14,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-3/5.png',
            'number' => 5,
            'name' => 'Sebastianus',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 14,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-3/6.png',
            'number' => 6,
            'name' => 'Zulkarnaen',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 14,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-3/7.png',
            'number' => 7,
            'name' => 'Nikasius Meki',
            'gender' => 'Laki-Laki',
            'city' => 'Pontianak',
            'party_id' => 14,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Demokrat

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai PSI
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-psi/ketapang-3/1.png',
            'number' => 1,
            'name' => 'drg. Johannes Hasiholan Lumbantobing',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 15,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-psi/ketapang-3/2.png',
            'number' => 2,
            'name' => 'Dedy Mulianto',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 15,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-psi/ketapang-3/3.png',
            'number' => 3,
            'name' => 'Yustina, A.Md.',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 15,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-psi/ketapang-3/4.png',
            'number' => 4,
            'name' => 'Ir. Florianus Suryadarma',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 15,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-psi/ketapang-3/5.png',
            'number' => 5,
            'name' => 'Martha Irba Nisuna',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 15,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-psi/ketapang-3/6.png',
            'number' => 6,
            'name' => 'Mariata Yesi',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 15,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-psi/ketapang-3/7.png',
            'number' => 7,
            'name' => 'Katik',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 15,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai PSI

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Perindo
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-3/1.png',
            'number' => 1,
            'name' => 'Budi Mateus, S.Pd., M.Si.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 16,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-3/2.png',
            'number' => 2,
            'name' => 'Frederikus Ado',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 16,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-3/3.png',
            'number' => 3,
            'name' => 'Diana Natalia',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 16,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-3/4.png',
            'number' => 4,
            'name' => 'Mikael Edi Sairondi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 16,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-3/5.png',
            'number' => 5,
            'name' => 'Maryono S.Sos',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 16,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-3/6.png',
            'number' => 6,
            'name' => 'Nadila Nuke Lorensa',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 16,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-3/7.png',
            'number' => 7,
            'name' => 'Ajim',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 16,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Perindo

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai PPP
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ppp/ketapang-3/1.png',
            'number' => 1,
            'name' => 'Musyawiri',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 17,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ppp/ketapang-3/2.png',
            'number' => 2,
            'name' => 'Muhammad Tohir',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 17,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ppp/ketapang-3/3.png',
            'number' => 3,
            'name' => 'Hartati',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 17,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ppp/ketapang-3/4.png',
            'number' => 4,
            'name' => 'Suani',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 17,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ppp/ketapang-3/5.png',
            'number' => 5,
            'name' => 'Sonia',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 17,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ppp/ketapang-3/6.png',
            'number' => 6,
            'name' => 'Ali Sadikin',
            'gender' => 'Laki-Laki',
            'city' => 'Pontianak',
            'party_id' => 17,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai PPP

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Ummat
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ummat/ketapang-3/1.png',
            'number' => 1,
            'name' => 'Hermawan',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 18,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ummat/ketapang-3/2.png',
            'number' => 2,
            'name' => 'Selviana',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 18,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ummat/ketapang-3/3.png',
            'number' => 3,
            'name' => 'Mahendra',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 18,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ummat/ketapang-3/4.png',
            'number' => 4,
            'name' => 'Parneka',
            'gender' => 'Laki-Laki',
            'city' => 'Pontianak',
            'party_id' => 18,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ummat/ketapang-3/5.png',
            'number' => 5,
            'name' => 'Febry Nurhalizah',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 18,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ummat/ketapang-3/6.png',
            'number' => 6,
            'name' => 'Jepri',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 18,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Ummat
    }
}
