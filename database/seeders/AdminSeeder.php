<?php

namespace Database\Seeders;

use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => 'Rico Pahlefi',
            'username' => 'ricopahlefi',
            'phone_number' => '089528597031',
            'phone_number_verified_at' => Carbon::now(),
            'level' => true,
            'password' => bcrypt('12341234'),
        ]);

        Admin::create([
            'name' => 'Tio Akbar',
            'username' => 'tioakbar',
            'phone_number' => '08123123123',
            'phone_number_verified_at' => Carbon::now(),
            'level' => false,
            'password' => bcrypt('12345678'),
        ]);

        Admin::create([
            'name' => 'Admin Dapil 1',
            'username' => 'dapil1',
            'phone_number' => '08953444443331',
            'phone_number_verified_at' => Carbon::now(),
            'level' => false,
            'voting_zone_id' => 1,
            'city_id' => 1,
            'password' => bcrypt('12345678'),
        ]);

        Admin::create([
            'name' => 'Admin Dapil 2',
            'username' => 'dapil2',
            'phone_number' => '08853334434341',
            'phone_number_verified_at' => Carbon::now(),
            'level' => false,
            'voting_zone_id' => 2,
            'city_id' => 2,
            'password' => bcrypt('12345678'),
        ]);

        Admin::create([
            'name' => 'Admin Dapil 3',
            'username' => 'dapil3',
            'phone_number' => '0895283455031',
            'phone_number_verified_at' => Carbon::now(),
            'level' => false,
            'voting_zone_id' => 3,
            'city_id' => 3,
            'password' => bcrypt('12345678'),
        ]);
    }
}
