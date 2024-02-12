<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            PartySeeder::class,
            CitySeeder::class,
            VotingZoneSeeder::class,
            DistrictSeeder::class,
            VillageSeeder::class,
            WebConfigSeeder::class,
            CandidateSeeder::class,
        ]);
    }
}
