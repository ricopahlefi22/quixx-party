<?php

namespace Database\Seeders\Candidate;

use App\Models\Candidate;
use App\Models\VotingZone;
use Illuminate\Database\Seeder;

class Dapil2Seeder extends Seeder
{
    public function run(): void
    {
        $votingZone = VotingZone::where('name', 'Dapil 2')->first();

        // Partai Kebangkitan Bangsa
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-2/1.png',
            'number' => 1,
            'name' => 'Bambang Susanto, S.I.P.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 1,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-2/2.png',
            'number' => 2,
            'name' => 'Ihwan Harahap',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 1,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-2/3.png',
            'number' => 3,
            'name' => 'Teresia Etiyopia',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 1,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-2/4.png',
            'number' => 4,
            'name' => 'Marlina Wiwinarti',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 1,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-2/5.png',
            'number' => 5,
            'name' => 'Kanisius',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 1,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Kebangkitan Bangsa

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Gerakan Indonesia Raya
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-2/1.png',
            'number' => 1,
            'name' => 'Samuel',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 2,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-2/2.png',
            'number' => 2,
            'name' => 'Jimmy Bidayu S.H.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 2,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-2/3.png',
            'number' => 3,
            'name' => 'Verianti Lisawati',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 2,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-2/4.png',
            'number' => 4,
            'name' => 'Amir',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 2,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-2/5.png',
            'number' => 5,
            'name' => 'Brigita Sayuti',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 2,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Gerakan Indonesia Raya

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Demokrasi Indonesia Perjuangan
        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-2/1.png',
            'number' => 1,
            'name' => 'Mateus Yudi, S.E.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 3,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-2/2.png',
            'number' => 2,
            'name' => 'Susilia Isabila, A.Md.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 3,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-2/3.png',
            'number' => 3,
            'name' => 'Megalina Limoy, S.ST., M.K.M.',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 3,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-2/4.png',
            'number' => 4,
            'name' => 'Hardianus Afa',
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
            'photo' => 'images/candidate/partai-golkar/ketapang-2/1.png',
            'number' => 1,
            'name' => 'Polonius Polo, S.H.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 4,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-2/2.png',
            'number' => 2,
            'name' => 'Sunaryo, S.P.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 4,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-2/3.png',
            'number' => 3,
            'name' => 'Ade Ramayana',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 4,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-2/4.png',
            'number' => 4,
            'name' => 'Muhammad Ilham Chalik, S.Ak.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 4,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-2/5.png',
            'number' => 5,
            'name' => 'Siska Kristin',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 4,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Golongan Karya

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Nasdem
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-2/1.png',
            'number' => 1,
            'name' => 'H. Mar\'ie, S.Pd.SD.',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 5,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-2/2.png',
            'number' => 2,
            'name' => 'Adrianus',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 5,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-2/3.png',
            'number' => 3,
            'name' => 'Eva Yopita, S.ST.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 5,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-2/4.png',
            'number' => 4,
            'name' => 'Veronika Asih',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 5,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-2/5.png',
            'number' => 5,
            'name' => 'Samuel, S.Pd.',
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
            'photo' => 'images/candidate/partai-buruh/ketapang-2/1.png',
            'number' => 1,
            'name' => 'Muhammad Tohir',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 6,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Buruh

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai PKS
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pks/ketapang-2/1.png',
            'number' => 1,
            'name' => 'Arin Triana',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 8,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai PKS

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Hanura
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-2/1.png',
            'number' => 1,
            'name' => 'Tini',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 10,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-2/2.png',
            'number' => 2,
            'name' => 'Sudarno, S.E.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 10,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-2/3.png',
            'number' => 3,
            'name' => 'Markus Margono',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 10,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-2/4.png',
            'number' => 4,
            'name' => 'Yohanes Mugi Seplianto., S.I.P.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 10,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-2/5.png',
            'number' => 5,
            'name' => 'Detty Maria',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 10,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Hanura

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai PAN
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-2/1.png',
            'number' => 1,
            'name' => 'Sulianto Harun',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 12,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-2/2.png',
            'number' => 2,
            'name' => 'Mardiana Yesi, S.M., M.E.',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 12,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-2/3.png',
            'number' => 3,
            'name' => 'Effendy M.T.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 12,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-2/4.png',
            'number' => 4,
            'name' => 'Martini',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 12,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-2/5.png',
            'number' => 5,
            'name' => 'Maman Hadiat',
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
            'photo' => 'images/candidate/partai-demokrat/ketapang-2/1.png',
            'number' => 1,
            'name' => 'Yang Kim, S.Pd., M.M.Pd.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 14,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-2/2.png',
            'number' => 2,
            'name' => 'Yustinus Likon Birto',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 14,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-2/3.png',
            'number' => 3,
            'name' => 'Paula Agi Sugati',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 14,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-2/4.png',
            'number' => 4,
            'name' => 'Saperia Dewi Sartika',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 14,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-2/5.png',
            'number' => 5,
            'name' => 'Andri',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 14,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Demokrat

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai PSI
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-psi/ketapang-2/1.png',
            'number' => 1,
            'name' => 'Amonius, S.E., M.A.P.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 15,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-psi/ketapang-2/2.png',
            'number' => 2,
            'name' => 'Lusiana Verawati',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 15,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-psi/ketapang-2/3.png',
            'number' => 3,
            'name' => 'Wirotomo',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 15,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-psi/ketapang-2/4.png',
            'number' => 4,
            'name' => 'Mariana Eka',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 15,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai PSI

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Perindo
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-2/1.png',
            'number' => 1,
            'name' => 'Domianus Yordan',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 16,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-2/2.png',
            'number' => 2,
            'name' => 'Herdinata',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 16,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-2/3.png',
            'number' => 3,
            'name' => 'Yuliana Wikasari, S.H.',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 16,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-2/4.png',
            'number' => 4,
            'name' => 'Witri Yoria Virnala',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 16,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-2/5.png',
            'number' => 5,
            'name' => 'Silfanus Effendi, M.Sos.',
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
            'photo' => 'images/candidate/partai-ppp/ketapang-2/1.png',
            'number' => 1,
            'name' => 'Uti Waskito, S.Kom.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 17,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ppp/ketapang-2/2.png',
            'number' => 2,
            'name' => 'Yunus',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 17,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ppp/ketapang-2/3.png',
            'number' => 3,
            'name' => 'Nurmala Yusni',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 17,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ppp/ketapang-2/4.png',
            'number' => 4,
            'name' => 'Rosalina Sitiruan',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 17,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ppp/ketapang-2/5.png',
            'number' => 5,
            'name' => 'Heri Irawan',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 17,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai PPP
    }
}
