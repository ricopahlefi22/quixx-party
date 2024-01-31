<?php

namespace Database\Seeders;

use App\Models\WebConfig;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WebConfig::factory()->create([
            'token' => 'XR9154bgT7ZS1Nk38RYb2WnEEe5pfsfSnpVu5M1y2gV9L1CZ34',
        ]);
    }
}
