<?php

namespace Database\Seeders\Candidate;

use App\Models\Candidate;
use App\Models\VotingZone;
use Illuminate\Database\Seeder;

class Dapil1Seeder extends Seeder
{
    public function run(): void
    {
        $votingZone = VotingZone::where('name', 'Dapil 1')->first();

        // Partai Kebangkitan Bangsa
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-1/1.png',
            'number' => 1,
            'name' => 'Amrin',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 1,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-1/2.png',
            'number' => 2,
            'name' => 'Utin Eliana Febriansari',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 1,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-1/3.png',
            'number' => 3,
            'name' => 'Muhammad Indra, S.Pd.I.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 1,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-1/4.png',
            'number' => 4,
            'name' => 'Suciani, A.Ma.',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 1,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-1/5.png',
            'number' => 5,
            'name' => 'Drs. Ahmad Yani',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 1,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-1/6.png',
            'number' => 6,
            'name' => 'Sigit Hermawan',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 1,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-1/7.png',
            'number' => 7,
            'name' => 'Erva Nisa',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 1,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-1/8.png',
            'number' => 8,
            'name' => 'Juhari',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 1,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-1/9.png',
            'number' => 9,
            'name' => 'Rabuan Noor',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 1,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pkb/ketapang-1/10.png',
            'number' => 10,
            'name' => 'Eko Hartanto Rimba',
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
            'photo' => 'images/candidate/partai-gerindra/ketapang-1/1.png',
            'number' => 1,
            'name' => 'Riyan Heryanto',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 2,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-1/2.png',
            'number' => 2,
            'name' => 'Heriadi, S.H.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 2,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-1/3.png',
            'number' => 3,
            'name' => 'Eva Septiani',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 2,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-1/4.png',
            'number' => 4,
            'name' => 'Al Muhammad Yani, S.H., M.Kn.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 2,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-1/5.png',
            'number' => 5,
            'name' => 'H. Husni',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 2,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-1/6.png',
            'number' => 6,
            'name' => 'Rohaeni',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 2,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-1/7.png',
            'number' => 7,
            'name' => 'Abdullah',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 2,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-1/8.png',
            'number' => 8,
            'name' => 'Ridwan Efendi, S.M.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 2,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-1/9.png',
            'number' => 9,
            'name' => 'Elia Ruspita',
            'gender' => 'Perempuan',
            'city' => 'Pontianak',
            'party_id' => 2,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gerindra/ketapang-1/10.png',
            'number' => 10,
            'name' => 'Hadi Supratman',
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
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-1/1.png',
            'number' => 1,
            'name' => 'Antoni Salim, S.H.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 3,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-1/2.png',
            'number' => 2,
            'name' => 'Hery Sasmito, S.Ag., M.HI.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 3,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-1/3.png',
            'number' => 3,
            'name' => 'Gurita, S.PKP.',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 3,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-1/4.png',
            'number' => 4,
            'name' => 'Nilus Kasmi, A.Md.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 3,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-1/5.png',
            'number' => 5,
            'name' => 'Marzuki',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 3,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-1/6.png',
            'number' => 6,
            'name' => 'Hetti',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 3,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-1/7.png',
            'number' => 7,
            'name' => 'Ceparudin',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 3,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-1/8.png',
            'number' => 8,
            'name' => 'Aswandi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 3,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-1/9.png',
            'number' => 9,
            'name' => 'Maria Agustine, S.E.',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 3,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/pdi-perjuangan/ketapang-1/10.png',
            'number' => 10,
            'name' => 'Rudiansyah',
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
            'photo' => 'images/candidate/partai-golkar/ketapang-1/1.png',
            'number' => 1,
            'name' => 'Mia Gayatri, S.E.',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 4,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-1/2.png',
            'number' => 2,
            'name' => 'Maria Raissa Sofia Rantan, S.H.',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 4,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-1/3.png',
            'number' => 3,
            'name' => 'Hery Susanto, A.Md.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 4,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-1/4.png',
            'number' => 4,
            'name' => 'Abdul Bar, S.M.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 4,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-1/5.png',
            'number' => 5,
            'name' => 'Fernandy Lim, S.H.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 4,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-1/6.png',
            'number' => 6,
            'name' => 'Nani Sudiarni',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 4,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-1/7.png',
            'number' => 7,
            'name' => 'Ernawati',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 4,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-1/8.png',
            'number' => 8,
            'name' => 'Rustam, S.H., M.A.P.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 4,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-1/9.png',
            'number' => 9,
            'name' => 'Syaiful Bahri, S.E.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 4,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-golkar/ketapang-1/10.png',
            'number' => 10,
            'name' => 'Syahril',
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
            'photo' => 'images/candidate/partai-nasdem/ketapang-1/1.png',
            'number' => 1,
            'name' => 'Rina Mutia, S.E.',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 5,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-1/2.png',
            'number' => 2,
            'name' => 'Morhani, S.Fil.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 5,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-1/3.png',
            'number' => 3,
            'name' => 'M. Eri Setyawan, S.Sos., M.AP.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 5,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-1/4.png',
            'number' => 4,
            'name' => 'Jairina',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 5,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-1/5.png',
            'number' => 5,
            'name' => 'M. Tri Juardi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 5,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-1/6.png',
            'number' => 6,
            'name' => 'Syaparuddin. S.E.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 5,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-1/7.png',
            'number' => 7,
            'name' => 'Sudirman, S.H.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 5,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-1/8.png',
            'number' => 8,
            'name' => 'Nengti',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 5,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-1/9.png',
            'number' => 9,
            'name' => 'M. Valdin Yudinata, S.H.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 5,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-nasdem/ketapang-1/10.png',
            'number' => 10,
            'name' => 'Sunardi',
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
            'photo' => 'images/candidate/partai-buruh/ketapang-1/1.png',
            'number' => 1,
            'name' => 'Sukamto, S.Pd.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 6,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-buruh/ketapang-1/2.png',
            'number' => 2,
            'name' => 'M. Lintar Wijaya',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 6,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-buruh/ketapang-1/3.png',
            'number' => 3,
            'name' => 'Maulina',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 6,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Buruh

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Gelora Indonesia
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gelora-indonesia/ketapang-1/1.png',
            'number' => 1,
            'name' => 'Sarijan',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 7,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gelora-indonesia/ketapang-1/2.png',
            'number' => 2,
            'name' => 'Akhmad Sayuti Ibrahim',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 7,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gelora-indonesia/ketapang-1/3.png',
            'number' => 3,
            'name' => 'Nadila',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 7,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gelora-indonesia/ketapang-1/4.png',
            'number' => 4,
            'name' => 'Bujang Efendi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 7,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gelora-indonesia/ketapang-1/5.png',
            'number' => 5,
            'name' => 'Lusi Astuti',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 7,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gelora-indonesia/ketapang-1/6.png',
            'number' => 6,
            'name' => 'Dessy Daniaty',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 7,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gelora-indonesia/ketapang-1/7.png',
            'number' => 7,
            'name' => 'Agus Kharisma',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 7,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-gelora-indonesia/ketapang-1/8.png',
            'number' => 8,
            'name' => 'Ani Andriani',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 7,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Gelora Indonesia

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai PKS
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pks/ketapang-1/1.png',
            'number' => 1,
            'name' => 'Anton Suryanto',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 8,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pks/ketapang-1/2.png',
            'number' => 2,
            'name' => 'Effendi, S.Sos.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 8,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pks/ketapang-1/3.png',
            'number' => 3,
            'name' => 'Nur Merida Fitri',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 8,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pks/ketapang-1/4.png',
            'number' => 4,
            'name' => 'Anton B. Sa\'i',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 8,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pks/ketapang-1/5.png',
            'number' => 5,
            'name' => 'Sahrani',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 8,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pks/ketapang-1/6.png',
            'number' => 6,
            'name' => 'Imro Atul Mujayanah',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 8,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pks/ketapang-1/7.png',
            'number' => 7,
            'name' => 'Suhendri',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 8,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pks/ketapang-1/8.png',
            'number' => 8,
            'name' => 'Joko Prianto A.Md.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 8,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pks/ketapang-1/9.png',
            'number' => 9,
            'name' => 'Sainah',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 8,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pks/ketapang-1/10.png',
            'number' => 10,
            'name' => 'Lukman, S.Pd.I.',
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
            'photo' => 'images/candidate/partai-hanura/ketapang-1/1.png',
            'number' => 1,
            'name' => 'Nasdiansyah, S.I., M.E.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 10,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-1/2.png',
            'number' => 2,
            'name' => 'Muhammad Said, S.H.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 10,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-1/3.png',
            'number' => 3,
            'name' => 'Raminar',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 10,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-1/4.png',
            'number' => 4,
            'name' => 'Rustami',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 10,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-1/5.png',
            'number' => 5,
            'name' => 'Eka Tri Prasetiya, S.Sos.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 10,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-1/6.png',
            'number' => 6,
            'name' => 'Mislawati',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 10,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-1/7.png',
            'number' => 7,
            'name' => 'Wawan Supriawan',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 10,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-1/8.png',
            'number' => 8,
            'name' => 'Syahrani, S.E.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 10,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-1/9.png',
            'number' => 9,
            'name' => 'Ririn Safariani, A.Md.',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 10,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-hanura/ketapang-1/10.png',
            'number' => 10,
            'name' => 'Robert Jatzuaki Sampouw',
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
            'photo' => 'images/candidate/partai-pan/ketapang-1/1.png',
            'number' => 1,
            'name' => 'Suryanto. AR, S.H.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 12,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-1/2.png',
            'number' => 2,
            'name' => 'Julvan Teruna',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 12,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-1/3.png',
            'number' => 3,
            'name' => 'Dwi Purnamasari, S.M.',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 12,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-1/4.png',
            'number' => 4,
            'name' => 'Ery Harnadi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 12,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-1/5.png',
            'number' => 5,
            'name' => 'Subrata',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 12,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-1/6.png',
            'number' => 6,
            'name' => 'Stephanie',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 12,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-1/7.png',
            'number' => 7,
            'name' => 'M. Yunus',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 12,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-1/8.png',
            'number' => 8,
            'name' => 'Siti Aulia, A.Md.Keb.',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 12,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-1/9.png',
            'number' => 9,
            'name' => 'Afriza, S.H.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 12,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-pan/ketapang-1/10.png',
            'number' => 10,
            'name' => 'Adib Sunni',
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
            'photo' => 'images/candidate/partai-demokrat/ketapang-1/1.png',
            'number' => 1,
            'name' => 'Rion Sardi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 14,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-1/2.png',
            'number' => 2,
            'name' => 'Alpiani M. Alim Jali',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 14,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-1/3.png',
            'number' => 3,
            'name' => 'Nurlinda',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 14,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-1/4.png',
            'number' => 4,
            'name' => 'Andri Yusa Putra',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 14,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-1/5.png',
            'number' => 5,
            'name' => 'Renaultdus Jhorghie Pranatal',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 14,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-1/6.png',
            'number' => 6,
            'name' => 'Asmawati',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 14,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-1/7.png',
            'number' => 7,
            'name' => 'Eko Sugianto',
            'gender' => 'Laki-Laki',
            'city' => 'Pontianak',
            'party_id' => 14,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-1/8.png',
            'number' => 8,
            'name' => 'Masdiana',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 14,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-1/9.png',
            'number' => 9,
            'name' => 'Sunli, S.Pd.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 14,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-demokrat/ketapang-1/10.png',
            'number' => 10,
            'name' => 'Hary Riamijar',
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
            'photo' => 'images/candidate/partai-psi/ketapang-1/1.png',
            'number' => 1,
            'name' => 'Suharman, S.T.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 15,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-psi/ketapang-1/2.png',
            'number' => 2,
            'name' => 'Sukianto',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 15,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-psi/ketapang-1/3.png',
            'number' => 3,
            'name' => 'Juniawati',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 15,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-psi/ketapang-1/4.png',
            'number' => 4,
            'name' => 'Efendy Irawan',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 15,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-psi/ketapang-1/5.png',
            'number' => 5,
            'name' => 'FR Opoi Saryudi H',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 15,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-psi/ketapang-1/6.png',
            'number' => 6,
            'name' => 'Supraptiwi',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 15,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-psi/ketapang-1/7.png',
            'number' => 7,
            'name' => 'Victor Yosefli Thomi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 15,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-psi/ketapang-1/8.png',
            'number' => 8,
            'name' => 'Dewi Hartatik',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 15,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-psi/ketapang-1/9.png',
            'number' => 9,
            'name' => 'Astuti',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 15,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-psi/ketapang-1/10.png',
            'number' => 10,
            'name' => 'Doriamanta Purba, A.Md.',
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
            'photo' => 'images/candidate/partai-perindo/ketapang-1/1.png',
            'number' => 1,
            'name' => 'Robi Sugara',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 16,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-1/2.png',
            'number' => 2,
            'name' => 'Rosli',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 16,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-1/3.png',
            'number' => 3,
            'name' => 'Kornelia Corry',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 16,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-1/4.png',
            'number' => 4,
            'name' => 'Efendi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 16,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-1/5.png',
            'number' => 5,
            'name' => 'Hendrik Alpiktoria, A.Md.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 16,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-1/6.png',
            'number' => 6,
            'name' => 'Fitria Karyani',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 16,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-1/7.png',
            'number' => 7,
            'name' => 'Herie Handoko, S.IP.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 16,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-1/8.png',
            'number' => 8,
            'name' => 'Wiwik Nirawati',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 16,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-1/9.png',
            'number' => 9,
            'name' => 'Drisyfida, S.H.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 16,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-perindo/ketapang-1/10.png',
            'number' => 10,
            'name' => 'Bambang Irawan',
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
            'photo' => 'images/candidate/partai-ppp/ketapang-1/1.png',
            'number' => 1,
            'name' => 'Hendra, S.P., M.Sos.',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 17,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ppp/ketapang-1/2.png',
            'number' => 2,
            'name' => 'Sukardi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 17,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ppp/ketapang-1/3.png',
            'number' => 3,
            'name' => 'Cindy Monica',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 17,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ppp/ketapang-1/4.png',
            'number' => 4,
            'name' => 'Jahidi',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 17,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ppp/ketapang-1/5.png',
            'number' => 5,
            'name' => 'Junainah',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 17,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ppp/ketapang-1/6.png',
            'number' => 6,
            'name' => 'Refki Feri Setiawan, S.T.',
            'gender' => 'Laki-Laki',
            'city' => 'Pontianak',
            'party_id' => 17,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ppp/ketapang-1/7.png',
            'number' => 7,
            'name' => 'Heri Gunawan',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 17,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ppp/ketapang-1/8.png',
            'number' => 8,
            'name' => 'Suhadasiah',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 17,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ppp/ketapang-1/9.png',
            'number' => 9,
            'name' => 'Wahyu Abdillah',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 17,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai PPP

        // -----------------------------------------------------------------------------------------------------------------------------------------

        // Partai Ummat
        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ummat/ketapang-1/1.png',
            'number' => 1,
            'name' => 'Munauri',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 18,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ummat/ketapang-1/2.png',
            'number' => 2,
            'name' => 'Ayu Rahayu',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 18,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ummat/ketapang-1/3.png',
            'number' => 3,
            'name' => 'Sam Syajarudin',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 18,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ummat/ketapang-1/4.png',
            'number' => 4,
            'name' => 'Idrus, S.E.I.',
            'gender' => 'Laki-Laki',
            'city' => 'Pontianak',
            'party_id' => 18,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ummat/ketapang-1/5.png',
            'number' => 5,
            'name' => 'Siswono',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 18,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ummat/ketapang-1/6.png',
            'number' => 6,
            'name' => 'Riska Natalia',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 18,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ummat/ketapang-1/7.png',
            'number' => 7,
            'name' => 'M. Yunus',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 18,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ummat/ketapang-1/8.png',
            'number' => 8,
            'name' => 'Ardianto Zulkarnain',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 18,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ummat/ketapang-1/9.png',
            'number' => 9,
            'name' => 'Nur Asikin',
            'gender' => 'Perempuan',
            'city' => 'Ketapang',
            'party_id' => 18,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);

        Candidate::factory()->create([
            'photo' => 'images/candidate/partai-ummat/ketapang-1/10.png',
            'number' => 10,
            'name' => 'Normansyah',
            'gender' => 'Laki-Laki',
            'city' => 'Ketapang',
            'party_id' => 18,
            'level' => 'Kabupaten',
            'voting_zone_id' => $votingZone->id,
        ]);
        // Partai Ummat
    }
}
