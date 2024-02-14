<?php

namespace Database\Seeders\Candidate;

use App\Models\Candidate;
use App\Models\VotingZone;
use Illuminate\Database\Seeder;

class Dapil4Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $votingZone = VotingZone::where('name', 'Dapil 4')->first();

        // Partai Kebangkitan Bangsa
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-4/1.png',
            'number' => 1,
            'name' => 'Heruwanto',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 1,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-4/2.png',
            'number' => 2,
            'name' => 'Masudin',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 1,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-4/3.png',
            'number' => 3,
            'name' => 'Rosnawati',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 1,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-4/4.png',
            'number' => 4,
            'name' => 'Emanuel B',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 1,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-4/5.png',
            'number' => 5,
            'name' => 'Afriani R. Susilawati',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 1,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-4/6.png',
            'number' => 6,
            'name' => 'Edy Kusmawan',
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
            'photo' => 'images/candidate/partai-gerindra/ketapang-4/1.png',
            'number' => 1,
            'name' => 'Ignatius Wewen',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 2,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-4/2.png',
            'number' => 2,
            'name' => 'Didin Syamsudin',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 2,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-4/3.png',
            'number' => 3,
            'name' => 'Mutslatiah',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 2,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-4/4.png',
            'number' => 4,
            'name' => 'Franseda, S.A.P.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 2,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-4/5.png',
            'number' => 5,
            'name' => 'A. Labib Ulin Nuha, S.Pd.I.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 2,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-4/6.png',
            'number' => 6,
            'name' => 'Suryani',
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
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-4/1.png',
            'number' => 1,
            'name' => 'Suprapto, S.Pd., M.M.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 3,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-4/2.png',
            'number' => 2,
            'name' => 'Elisabet, S.I.P.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 3,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-4/3.png',
            'number' => 3,
            'name' => 'Toro, S.I.P.',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 3,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-4/4.png',
            'number' => 4,
            'name' => 'Elibertus Djunaidi, A.Md.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 3,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-4/5.png',
            'number' => 5,
            'name' => 'Veronika Rana Permata, S.Pd.',
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
            'photo' => 'images/candidate/partai-golkar/ketapang-4/1.png',
            'number' => 1,
            'name' => 'Thomas Ferlyan, S.I.P., M.Sos.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 4,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-4/2.png',
            'number' => 2,
            'name' => 'Abdul Karim',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 4,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-4/3.png',
            'number' => 3,
            'name' => 'Sindi Afriyani',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 4,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-4/4.png',
            'number' => 4,
            'name' => 'Drs. Herwani',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 4,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-4/5.png',
            'number' => 5,
            'name' => 'Savrianus Viani',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 4,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-4/6.png',
            'number' => 6,
            'name' => 'Rosita Sari',
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
            'photo' => 'images/candidate/partai-nasdem/ketapang-4/1.png',
            'number' => 1,
            'name' => 'Syaidianur, S.Pd., M.Pd.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 5,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-4/2.png',
            'number' => 2,
            'name' => 'Paskalis Hermawan, S.H.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 5,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-4/3.png',
            'number' => 3,
            'name' => 'Nova Lestari',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 5,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-4/4.png',
            'number' => 4,
            'name' => 'Falentina Osa Kusuma Dewi, S.Tr.Keb',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 5,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-4/5.png',
            'number' => 5,
            'name' => 'Dalmasius Ipo',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 5,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-4/6.png',
            'number' => 6,
            'name' => 'Stevanus Herman',
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
            'photo' => 'images/candidate/partai-buruh/ketapang-4/1.png',
            'number' => 1,
            'name' => 'Koko Hartono.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 6,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-buruh/ketapang-4/3.png',
            'number' => 2,
            'name' => 'Jannatul Adnin',
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
            'photo' => 'images/candidate/partai-pks/ketapang-4/1.png',
            'number' => 1,
            'name' => 'Musawer',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 8,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pks/ketapang-4/2.png',
            'number' => 2,
            'name' => 'Tuluh Tumidi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 8,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pks/ketapang-4/3.png',
            'number' => 3,
            'name' => 'Ernawati',
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
            'photo' => 'images/candidate/partai-hanura/ketapang-4/1.png',
            'number' => 1,
            'name' => 'Sukirman Lodom',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 10,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-4/2.png',
            'number' => 2,
            'name' => 'Antonius Hendri',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 10,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-4/3.png',
            'number' => 3,
            'name' => 'Kartika',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 10,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-4/4.png',
            'number' => 4,
            'name' => 'M. Halidi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 10,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-4/5.png',
            'number' => 5,
            'name' => 'Karmila Hawi',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 10,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-4/6.png',
            'number' => 6,
            'name' => 'Tanto',
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
            'photo' => 'images/candidate/partai-pan/ketapang-4/1.png',
            'number' => 1,
            'name' => 'Mohtar',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 12,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-4/2.png',
            'number' => 2,
            'name' => 'Samsani Ridwan',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 12,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-4/3.png',
            'number' => 3,
            'name' => 'Ismawati',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 12,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-4/4.png',
            'number' => 4,
            'name' => 'Amansius Kidung, S.I.P.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 12,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-4/5.png',
            'number' => 5,
            'name' => 'Desy Sumiati',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 12,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-4/6.png',
            'number' => 6,
            'name' => 'Mery Natalya Tambunan',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 12,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai PAN

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Demokrat
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-4/1.png',
            'number' => 1,
            'name' => 'Y. R. Swandi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 14,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-4/2.png',
            'number' => 2,
            'name' => 'Edi Anjoyo',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 14,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-4/3.png',
            'number' => 3,
            'name' => 'Sella Novitri',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 14,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-4/4.png',
            'number' => 4,
            'name' => 'Andhina Pradita',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 14,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-4/5.png',
            'number' => 5,
            'name' => 'Adrianus',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 14,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-4/6.png',
            'number' => 6,
            'name' => 'Ayatullah Fardini',
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
            'photo' => 'images/candidate/partai-psi/ketapang-4/1.png',
            'number' => 1,
            'name' => 'Daniel, S.I.P',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 15,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-psi/ketapang-4/2.png',
            'number' => 2,
            'name' => 'Ariani',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 15,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-psi/ketapang-4/3.png',
            'number' => 3,
            'name' => 'Nikolaus, S.H.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 15,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-psi/ketapang-4/4.png',
            'number' => 4,
            'name' => 'Mery Irene Natalia',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 15,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-psi/ketapang-4/5.png',
            'number' => 5,
            'name' => 'Leviana',
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
            'photo' => 'images/candidate/partai-perindo/ketapang-4/1.png',
            'number' => 1,
            'name' => 'Ardiani Fauzi S.E., M.A.P.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 16,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-4/2.png',
            'number' => 2,
            'name' => 'Dermawansyah, S.E.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 16,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-4/3.png',
            'number' => 3,
            'name' => 'Maria Devi Ivanka',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 16,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-4/4.png',
            'number' => 4,
            'name' => 'Arjuna',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 16,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-4/5.png',
            'number' => 5,
            'name' => 'Asep Syaiful Amri',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 16,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-4/6.png',
            'number' => 6,
            'name' => 'Siti Melian',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 16,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Perindo

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai PPP
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ppp/ketapang-4/1.png',
            'number' => 1,
            'name' => 'Ahmad Setiadi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 17,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ppp/ketapang-4/2.png',
            'number' => 2,
            'name' => 'Joko Hidayat',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 17,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ppp/ketapang-4/3.png',
            'number' => 3,
            'name' => 'Juliana',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 17,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai PPP
    }
}
