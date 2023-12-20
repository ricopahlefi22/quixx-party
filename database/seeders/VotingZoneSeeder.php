<?php

namespace Database\Seeders;

use App\Models\VotingZone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VotingZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // VotingZone::factory(50)->create();


        /**-------------- KABUPATEN KETAPANG ------------- **/
        VotingZone::create([
            'voting_zone_id' => '0ef85de1-cb26-47b3-926a-5b813ae00533',
            'name' => 'Dapil 1',
            'city_id' => 'b5d5da9b-9e1a-11ee-922f-0f7624512ade',
        ]);

        VotingZone::create([
            'voting_zone_id' => '64b635c8-4bdc-4caa-a121-28bb220221a9',
            'name' => 'Dapil 2',
            'city_id' => 'b5d5da9b-9e1a-11ee-922f-0f7624512ade',
        ]);

        VotingZone::create([
            'voting_zone_id' => 'ba15950d-8d0c-4579-b543-717afabbb23d',
            'name' => 'Dapil 3',
            'city_id' => 'b5d5da9b-9e1a-11ee-922f-0f7624512ade',
        ]);

        VotingZone::create([
            'voting_zone_id' => 'cf6cae46-ea92-41b6-8ffe-c0e802e1680d',
            'name' => 'Dapil 4',
            'city_id' => 'b5d5da9b-9e1a-11ee-922f-0f7624512ade',
        ]);

        VotingZone::create([
            'voting_zone_id' => 'd2294470-6700-46bd-944b-669185e01f61',
            'name' => 'Dapil 5',
            'city_id' => 'b5d5da9b-9e1a-11ee-922f-0f7624512ade',
        ]);

        VotingZone::create([
            'voting_zone_id' => 'c2e7a437-6611-40ff-b1cd-3a12c42a3e87',
            'name' => 'Dapil 6',
            'city_id' => 'b5d5da9b-9e1a-11ee-922f-0f7624512ade',
        ]);

        VotingZone::create([
            'voting_zone_id' => 'cd42927c-68f9-4179-b689-ce6adfaaa673',
            'name' => 'Dapil 7',
            'city_id' => 'b5d5da9b-9e1a-11ee-922f-0f7624512ade',
        ]);
        /**-------------- KABUPATEN KETAPANG ------------- **/


        /**-------------- KABUPATEN KAYONG UTARA ------------- **/
        VotingZone::create([
            'voting_zone_id' => '8726e153-6d12-4933-af5a-b3ff3ba35904',
            'name' => 'Dapil 1',
            'city_id' => '7f0e123c-7ac9-44fb-9da8-cda481d4b1f3',
        ]);

        VotingZone::create([
            'voting_zone_id' => 'a4f310e1-95a2-4667-bea0-da87d231a211',
            'name' => 'Dapil 2',
            'city_id' => '7f0e123c-7ac9-44fb-9da8-cda481d4b1f3',
        ]);

        VotingZone::create([
            'voting_zone_id' => '73f40922-8679-4006-af2c-8449fb43ddfe',
            'name' => 'Dapil 3',
            'city_id' => '7f0e123c-7ac9-44fb-9da8-cda481d4b1f3',
        ]);

        VotingZone::create([
            'voting_zone_id' => 'a243ca24-7279-435e-a045-259822ff04bd',
            'name' => 'Dapil 4',
            'city_id' => '7f0e123c-7ac9-44fb-9da8-cda481d4b1f3',
        ]);
        /**-------------- KABUPATEN KAYONG UTARA ------------- **/
    }
}
