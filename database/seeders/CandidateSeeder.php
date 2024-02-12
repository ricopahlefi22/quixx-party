<?php

namespace Database\Seeders;

use Database\Seeders\Candidate\Dapil1Seeder;
use Database\Seeders\Candidate\Dapil6Seeder;
use Database\Seeders\Candidate\Dapil7Seeder;
use Illuminate\Database\Seeder;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            Dapil1Seeder::class,
            // Dapil2Seeder::class,
            // Dapil3Seeder::class,
            // Dapil4Seeder::class,
            // Dapil5Seeder::class,
            Dapil6Seeder::class,
            Dapil7Seeder::class,
        ]);
    }
}
