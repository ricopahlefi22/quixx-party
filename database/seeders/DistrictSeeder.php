<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // District::factory(500)->create();

        /**-------------- (DAPIL 1) KABUPATEN KETAPANG ------------- **/
        District::create([
            'district_id' => 'd9a0f57c-52c5-4d56-bd4d-0f3556421d3a',
            'name' => 'Delta Pawan',
            'voting_zone_id' => '0ef85de1-cb26-47b3-926a-5b813ae00533',
            'city_id' => 'b5d5da9b-9e1a-11ee-922f-0f7624512ade',
        ]);

        District::create([
            'district_id' => '15ba9691-3322-4373-bab2-8ac869fed6a0',
            'name' => 'Matan Hilir Utara',
            'voting_zone_id' => '0ef85de1-cb26-47b3-926a-5b813ae00533',
            'city_id' => 'b5d5da9b-9e1a-11ee-922f-0f7624512ade',
        ]);

        District::create([
            'district_id' => 'ef03c567-f2a1-4ffb-aeca-112f97aab79f',
            'name' => 'Muara Pawan',
            'voting_zone_id' => '0ef85de1-cb26-47b3-926a-5b813ae00533',
            'city_id' => 'b5d5da9b-9e1a-11ee-922f-0f7624512ade',
        ]);
        /**-------------- (DAPIL 1) KABUPATEN KETAPANG ------------- **/



        /**-------------- (DAPIL 2) KABUPATEN KETAPANG ------------- **/
        District::create([
            'district_id' => '4978da83-6a78-4b88-ae6d-27c4eb835d5f',
            'name' => 'Simpang Dua',
            'voting_zone_id' => '64b635c8-4bdc-4caa-a121-28bb220221a9',
            'city_id' => 'b5d5da9b-9e1a-11ee-922f-0f7624512ade',
        ]);

        District::create([
            'district_id' => 'e0c2a1e8-97ca-4792-a296-d5935265e01b',
            'name' => 'Simpang Hulu',
            'voting_zone_id' => '64b635c8-4bdc-4caa-a121-28bb220221a9',
            'city_id' => 'b5d5da9b-9e1a-11ee-922f-0f7624512ade',
        ]);

        District::create([
            'district_id' => '8d17dcdf-e129-4f99-9e57-df5d22aaa502',
            'name' => 'Sungai Laur',
            'voting_zone_id' => '64b635c8-4bdc-4caa-a121-28bb220221a9',
            'city_id' => 'b5d5da9b-9e1a-11ee-922f-0f7624512ade',
        ]);
        /**-------------- (DAPIL 2) KABUPATEN KETAPANG ------------- **/




        /**-------------- (DAPIL 3) KABUPATEN KETAPANG ------------- **/
        District::create([
            'district_id' => '2be2d919-1f1a-42dd-a347-caf67d2eedb6',
            'name' => 'Hulu Sungai',
            'voting_zone_id' => 'ba15950d-8d0c-4579-b543-717afabbb23d',
            'city_id' => 'b5d5da9b-9e1a-11ee-922f-0f7624512ade',
        ]);

        District::create([
            'district_id' => '14898485-2931-4a74-872c-5890f92777d8',
            'name' => 'Nanga Tayap',
            'voting_zone_id' => 'ba15950d-8d0c-4579-b543-717afabbb23d',
            'city_id' => 'b5d5da9b-9e1a-11ee-922f-0f7624512ade',
        ]);

        District::create([
            'district_id' => 'b0eba99a-f4ce-41d8-887b-f1e1a42b440b',
            'name' => 'Sandai',
            'voting_zone_id' => 'ba15950d-8d0c-4579-b543-717afabbb23d',
            'city_id' => 'b5d5da9b-9e1a-11ee-922f-0f7624512ade',
        ]);
        /**-------------- (DAPIL 3) KABUPATEN KETAPANG ------------- **/



        /**-------------- (DAPIL 4) KABUPATEN KETAPANG ------------- **/
        District::create([
            'district_id' => '6386ec68-dd86-419f-bb50-ee9a42f97454',
            'name' => 'Jelai Hulu',
            'voting_zone_id' => 'cf6cae46-ea92-41b6-8ffe-c0e802e1680d',
            'city_id' => 'b5d5da9b-9e1a-11ee-922f-0f7624512ade',
        ]);

        District::create([
            'district_id' => '7b2ba0c7-6f72-4cae-8d92-90fc4322e756',
            'name' => 'Pemahan',
            'voting_zone_id' => 'cf6cae46-ea92-41b6-8ffe-c0e802e1680d',
            'city_id' => 'b5d5da9b-9e1a-11ee-922f-0f7624512ade',
        ]);

        District::create([
            'district_id' => 'a7e030f6-b9b4-4772-ae50-6c7f57f4f8aa',
            'name' => 'Sungai Melayu Rayak',
            'voting_zone_id' => 'cf6cae46-ea92-41b6-8ffe-c0e802e1680d',
            'city_id' => 'b5d5da9b-9e1a-11ee-922f-0f7624512ade',
        ]);

        District::create([
            'district_id' => '68a64fbf-20c6-4e7e-86a2-83ca7e309cb1',
            'name' => 'Tumbang Titi',
            'voting_zone_id' => 'cf6cae46-ea92-41b6-8ffe-c0e802e1680d',
            'city_id' => 'b5d5da9b-9e1a-11ee-922f-0f7624512ade',
        ]);
        /**-------------- (DAPIL 4) KABUPATEN KETAPANG ------------- **/



        /**-------------- (DAPIL 5) KABUPATEN KETAPANG ------------- **/
        District::create([
            'district_id' => '38bf0c27-5449-4c94-85df-d63e2708ff21',
            'name' => 'Air Upas',
            'voting_zone_id' => 'd2294470-6700-46bd-944b-669185e01f61',
            'city_id' => 'b5d5da9b-9e1a-11ee-922f-0f7624512ade',
        ]);

        District::create([
            'district_id' => '133c3fdd-70f3-4bcd-a5ae-82ebadc3a0fe',
            'name' => 'Manis Mata',
            'voting_zone_id' => 'd2294470-6700-46bd-944b-669185e01f61',
            'city_id' => 'b5d5da9b-9e1a-11ee-922f-0f7624512ade',
        ]);

        District::create([
            'district_id' => 'e6d33350-9c2e-48b1-a89c-40cd055cf5a0',
            'name' => 'Marau',
            'voting_zone_id' => 'd2294470-6700-46bd-944b-669185e01f61',
            'city_id' => 'b5d5da9b-9e1a-11ee-922f-0f7624512ade',
        ]);
        /**-------------- (DAPIL 5) KABUPATEN KETAPANG ------------- **/



        /**-------------- (DAPIL 6) KABUPATEN KETAPANG ------------- **/
        District::create([
            'district_id' => 'fc1e59ef-1236-4903-b53c-233deab25365',
            'name' => 'Kendawangan',
            'voting_zone_id' => 'c2e7a437-6611-40ff-b1cd-3a12c42a3e87',
            'city_id' => 'b5d5da9b-9e1a-11ee-922f-0f7624512ade',
        ]);

        District::create([
            'district_id' => '586b2a27-7b5b-48ef-9436-bbc8bd6eae83',
            'name' => 'Singkup',
            'voting_zone_id' => 'c2e7a437-6611-40ff-b1cd-3a12c42a3e87',
            'city_id' => 'b5d5da9b-9e1a-11ee-922f-0f7624512ade',
        ]);
        /**-------------- (DAPIL 6) KABUPATEN KETAPANG ------------- **/



        /**-------------- (DAPIL 7) KABUPATEN KETAPANG ------------- **/
        District::create([
            'district_id' => '04d018dc-9a17-4625-8581-0f5e8c78f2d7',
            'name' => 'Benua Kayong',
            'voting_zone_id' => 'cd42927c-68f9-4179-b689-ce6adfaaa673',
            'city_id' => 'b5d5da9b-9e1a-11ee-922f-0f7624512ade',
        ]);

        District::create([
            'district_id' => '3bd6fa56-d8cc-46f8-85af-a23b8bd0997e',
            'name' => 'Matan Hilir Selatan',
            'voting_zone_id' => 'cd42927c-68f9-4179-b689-ce6adfaaa673',
            'city_id' => 'b5d5da9b-9e1a-11ee-922f-0f7624512ade',
        ]);
        /**-------------- (DAPIL 7) KABUPATEN KETAPANG ------------- **/





        /**-------------- (DAPIL 1) KABUPATEN KAYONG UTARA ------------- **/
        District::create([
            'district_id' => 'c342df7f-d464-4a49-adcd-6a8dd300f8b8',
            'name' => 'Sukadana',
            'voting_zone_id' => '8726e153-6d12-4933-af5a-b3ff3ba35904',
            'city_id' => '7f0e123c-7ac9-44fb-9da8-cda481d4b1f3',
        ]);
        /**-------------- (DAPIL 1) KABUPATEN KAYONG UTARA ------------- **/


        /**-------------- (DAPIL 2) KABUPATEN KAYONG UTARA ------------- **/
        District::create([
            'district_id' => '6f1557a5-45d4-471d-9abe-840dff316d55',
            'name' => 'Karimata',
            'voting_zone_id' => 'a4f310e1-95a2-4667-bea0-da87d231a211',
            'city_id' => '7f0e123c-7ac9-44fb-9da8-cda481d4b1f3',
        ]);

        District::create([
            'district_id' => '486f3bef-06e3-4d08-ad9e-3329e9b90c71',
            'name' => 'Pulau Maya',
            'voting_zone_id' => 'a4f310e1-95a2-4667-bea0-da87d231a211',
            'city_id' => '7f0e123c-7ac9-44fb-9da8-cda481d4b1f3',
        ]);
        /**-------------- (DAPIL 2) KABUPATEN KAYONG UTARA ------------- **/



        /**-------------- (DAPIL 3) KABUPATEN KAYONG UTARA ------------- **/
        District::create([
            'district_id' => 'c91be414-d5ed-4f4f-a8a0-25a248500a08',
            'name' => 'Seponti',
            'voting_zone_id' => '73f40922-8679-4006-af2c-8449fb43ddfe',
            'city_id' => '7f0e123c-7ac9-44fb-9da8-cda481d4b1f3',
        ]);

        District::create([
            'district_id' => '1d9339d1-4430-40d2-93a4-bccb4e3cedac',
            'name' => 'Teluk Batang',
            'voting_zone_id' => '73f40922-8679-4006-af2c-8449fb43ddfe',
            'city_id' => '7f0e123c-7ac9-44fb-9da8-cda481d4b1f3',
        ]);
        /**-------------- (DAPIL 3) KABUPATEN KAYONG UTARA ------------- **/



        /**-------------- (DAPIL 4) KABUPATEN KAYONG UTARA ------------- **/
        District::create([
            'district_id' => 'ce506221-823f-4f5d-b9cf-f12066e3710d',
            'name' => 'Simpang Hilir',
            'voting_zone_id' => 'a243ca24-7279-435e-a045-259822ff04bd',
            'city_id' => '7f0e123c-7ac9-44fb-9da8-cda481d4b1f3',
        ]);
        /**-------------- (DAPIL 4) KABUPATEN KAYONG UTARA ------------- **/
    }
}
