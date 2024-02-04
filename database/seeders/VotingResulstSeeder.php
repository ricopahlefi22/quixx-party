<?php

namespace Database\Seeders;

use App\Models\VotingResult;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class VotingResulstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VotingResult::create([
            'number' => mt_rand(1,200),
            'voting_place_id' => '1',
            'village_id' => '1',
            'district_id' => 1,
            'voting_zone_id' => 1,
            'city_id' => 1,
        ]);

        VotingResult::create([
            'number' => mt_rand(1,200),
            'voting_place_id' => '1',
            'village_id' => '1',
            'district_id' => 1,
            'voting_zone_id' => 1,
            'city_id' => 1,
        ]);

        VotingResult::create([
            'number' => mt_rand(1,200),
            'voting_place_id' => '1',
            'village_id' => '1',
            'district_id' => 1,
            'voting_zone_id' => 1,
            'city_id' => 1,
        ]);

        VotingResult::create([
            'number' => mt_rand(1,200),
            'voting_place_id' => '1',
            'village_id' => '1',
            'district_id' => 1,
            'voting_zone_id' => 1,
            'city_id' => 1,
        ]);

        VotingResult::create([
            'number' => mt_rand(1,200),
            'voting_place_id' => '1',
            'village_id' => '1',
            'district_id' => 1,
            'voting_zone_id' => 1,
            'city_id' => 1,
        ]);

        VotingResult::create([
            'number' => mt_rand(1,200),
            'voting_place_id' => '1',
            'village_id' => '1',
            'district_id' => 1,
            'voting_zone_id' => 1,
            'city_id' => 1,
        ]);

        VotingResult::create([
            'number' => mt_rand(1,200),
            'voting_place_id' => '1',
            'village_id' => '1',
            'district_id' => 1,
            'voting_zone_id' => 1,
            'city_id' => 1,
        ]);

        
    }
}
