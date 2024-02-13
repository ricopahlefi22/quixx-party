<?php

namespace Database\Seeders\Candidate;

use App\Models\Candidate;
use App\Models\VotingZone;
use Illuminate\Database\Seeder;

class Dapil5Seeder extends Seeder
{
    public function run(): void
    {
        $votingZone = VotingZone::where('name', 'Dapil 5')->first();

        // Partai Kebangkitan Bangsa
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-5/1.png',
            'number' => 1,
            'name' => 'Ahmad Rosyid Riyatno',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 1,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-5/2.png',
            'number' => 2,
            'name' => 'Riduansyah',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 1,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-5/3.png',
            'number' => 3,
            'name' => 'Mardiana',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 1,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-5/4.png',
            'number' => 4,
            'name' => 'Ahmad Upin Ramadan',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 1,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-5/5.png',
            'number' => 5,
            'name' => 'Juminem',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 1,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Kebangkitan Bangsa

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Gerakan Indonesia Raya
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-5/1.png',
            'number' => 1,
            'name' => 'Akim',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 2,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-5/2.png',
            'number' => 2,
            'name' => 'Saidi, S.M.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 2,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-5/3.png',
            'number' => 3,
            'name' => 'Yulianti',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 2,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-5/4.png',
            'number' => 4,
            'name' => 'Antonius Leak',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 2,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-5/5.png',
            'number' => 5,
            'name' => 'Susana',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 2,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Gerakan Indonesia Raya

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Demokrasi Indonesia Perjuangan
        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-5/1.png',
            'number' => 1,
            'name' => 'Ismanto, S.Pd.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 3,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-5/2.png',
            'number' => 2,
            'name' => 'Tanaka Anggara Mukti',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 3,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-5/3.png',
            'number' => 3,
            'name' => 'Suryanti',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 3,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-5/4.png',
            'number' => 4,
            'name' => 'Yusniati',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 3,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-5/5.png',
            'number' => 5,
            'name' => 'Whilis Aryant, S.E.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 3,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Demokrasi Indonesia Perjuangan

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Golongan Karya
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-5/1.png',
            'number' => 1,
            'name' => 'Markus Ewi, S.E., M.Sos.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 4,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-5/2.png',
            'number' => 2,
            'name' => 'Philipus, S.Pd.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 4,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-5/3.png',
            'number' => 3,
            'name' => 'Vitronila Ervina',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 4,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-5/4.png',
            'number' => 4,
            'name' => 'Dedy Haryanto',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 4,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-5/5.png',
            'number' => 5,
            'name' => 'Sylvia Nurvitasari',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 4,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Golongan Karya

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Nasdem
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-5/1.png',
            'number' => 1,
            'name' => 'Irawan, S.A.P.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 5,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-5/2.png',
            'number' => 2,
            'name' => 'Yuyun Septiani, S.Pd.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 5,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-5/3.png',
            'number' => 3,
            'name' => 'Fabrianus Mekong, S.I.P.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 5,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-5/4.png',
            'number' => 4,
            'name' => 'Cristina Nova Yulita',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 5,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-5/5.png',
            'number' => 5,
            'name' => 'Ruswandi, S.Sos.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 5,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Nasdem

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Buruh
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-buruh/ketapang-5/1.png',
            'number' => 1,
            'name' => 'Sahbandi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 6,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-buruh/ketapang-5/2.png',
            'number' => 2,
            'name' => 'Martha Dinata',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 6,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-buruh/ketapang-5/3.png',
            'number' => 3,
            'name' => 'Sari Putem',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 6,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Buruh

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai PKS
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pks/ketapang-5/1.png',
            'number' => 1,
            'name' => 'Andi Agasi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 8,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pks/ketapang-5/2.png',
            'number' => 2,
            'name' => 'Bela Fitriani',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 8,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pks/ketapang-5/3.png',
            'number' => 3,
            'name' => 'Efendi',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 8,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai PKS

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Hanura
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-5/1.png',
            'number' => 1,
            'name' => 'Suprianto, S.H.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 10,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-5/2.png',
            'number' => 2,
            'name' => 'Yordan Kafomai, S.E.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 10,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-5/3.png',
            'number' => 3,
            'name' => 'Nurohmah',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 10,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-5/4.png',
            'number' => 4,
            'name' => 'Megawati',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 10,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-5/5.png',
            'number' => 5,
            'name' => 'Ahmad Fatoni, A.Md.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 10,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Hanura

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai PAN
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-5/1.png',
            'number' => 1,
            'name' => 'M. Redahansyah',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 12,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-5/2.png',
            'number' => 2,
            'name' => 'Alfianur',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 12,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-5/3.png',
            'number' => 3,
            'name' => 'Delfiyanti Eka Saputri',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 12,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-5/4.png',
            'number' => 4,
            'name' => 'Lilis Marlina',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 12,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-5/5.png',
            'number' => 5,
            'name' => 'Agustinus Herman Susilo, S.H.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 12,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai PAN

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Demokrat
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-5/1.png',
            'number' => 1,
            'name' => 'Dahlan',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 14,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-5/2.png',
            'number' => 2,
            'name' => 'Martarinus, S.H.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 14,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-5/3.png',
            'number' => 3,
            'name' => 'Rahmia Nurjannah',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 14,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-5/4.png',
            'number' => 4,
            'name' => 'Nurhayati',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 14,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-5/5.png',
            'number' => 5,
            'name' => 'Sairus Salikin',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 14,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Demokrat

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai PSI
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-psi/ketapang-5/1.png',
            'number' => 1,
            'name' => 'Ir. Matias Sembiring',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 15,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-psi/ketapang-5/2.png',
            'number' => 2,
            'name' => 'Beni Alpri',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 15,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-psi/ketapang-5/3.png',
            'number' => 3,
            'name' => 'Maria Novita Andriani Tongo',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 15,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-psi/ketapang-5/4.png',
            'number' => 4,
            'name' => 'Namhein',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 15,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai PSI

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Perindo
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-5/1.png',
            'number' => 1,
            'name' => 'Mahsus, S.T., M.T.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 16,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-5/2.png',
            'number' => 2,
            'name' => 'Fery Bungsu',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 16,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-5/3.png',
            'number' => 3,
            'name' => 'Angela Widyasari, S.H.',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 16,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-5/4.png',
            'number' => 4,
            'name' => 'Tini',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 16,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-5/5.png',
            'number' => 5,
            'name' => 'Buntung',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 16,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Perindo

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai PPP
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ppp/ketapang-5/1.png',
            'number' => 1,
            'name' => 'Dedimus I',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 17,
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ppp/ketapang-5/2.png',
            'number' => 2,
            'name' => 'Sherly Melinda',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 17,
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai PPP
    }
}
