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
            'username' => 'cinekw',
            'phone_number' => '0895376945991',
            'phone_number_verified_at' => Carbon::now(),
            'level' => true,
            'password' => bcrypt('12345678'),
        ]);

        Admin::create([
            'name' => 'Muhammad Ariansyah',
            'username' => 'ariekuroboo',
            'phone_number' => '08971158448',
            'phone_number_verified_at' => Carbon::now(),
            'level' => true,
            'password' => bcrypt('12345678'),
        ]);

        Admin::create([
            'name' => 'Ketapang 1',
            'username' => 'ketapang1',
            'phone_number_verified_at' => Carbon::now(),
            'level' => false,
            'voting_zone_id' => 1,
            'city_id' => 1,
            'password' => bcrypt('12345678'),
        ]);

        Admin::create([
            'name' => 'Ketapang 2',
            'username' => 'ketapang2',
            'phone_number_verified_at' => Carbon::now(),
            'level' => false,
            'voting_zone_id' => 2,
            'city_id' => 1,
            'password' => bcrypt('12345678'),
        ]);

        Admin::create([
            'name' => 'Ketapang 3',
            'username' => 'ketapang3',
            'phone_number_verified_at' => Carbon::now(),
            'level' => false,
            'voting_zone_id' => 3,
            'city_id' => 1,
            'password' => bcrypt('12345678'),
        ]);

        Admin::create([
            'name' => 'Ketapang 4',
            'username' => 'ketapang4',
            'phone_number_verified_at' => Carbon::now(),
            'level' => false,
            'voting_zone_id' => 4,
            'city_id' => 1,
            'password' => bcrypt('12345678'),
        ]);

        Admin::create([
            'name' => 'Ketapang 5',
            'username' => 'ketapang5',
            'phone_number_verified_at' => Carbon::now(),
            'level' => false,
            'voting_zone_id' => 5,
            'city_id' => 1,
            'password' => bcrypt('12345678'),
        ]);

        Admin::create([
            'name' => 'Ketapang 6',
            'username' => 'ketapang6',
            'phone_number_verified_at' => Carbon::now(),
            'level' => false,
            'voting_zone_id' => 6,
            'city_id' => 1,
            'password' => bcrypt('12345678'),
        ]);

        Admin::create([
            'name' => 'Ketapang 7',
            'username' => 'ketapang7',
            'phone_number_verified_at' => Carbon::now(),
            'level' => false,
            'voting_zone_id' => 7,
            'city_id' => 1,
            'password' => bcrypt('12345678'),
        ]);


        Admin::create([
            'name' => 'Kayong Utara 1',
            'username' => 'kayong1',
            'phone_number_verified_at' => Carbon::now(),
            'level' => false,
            'voting_zone_id' => 1,
            'city_id' => 2,
            'password' => bcrypt('12345678'),
        ]);

        Admin::create([
            'name' => 'Kayong Utara 2',
            'username' => 'kayong2',
            'phone_number_verified_at' => Carbon::now(),
            'level' => false,
            'voting_zone_id' => 2,
            'city_id' => 2,
            'password' => bcrypt('12345678'),
        ]);

        Admin::create([
            'name' => 'Kayong Utara 3',
            'username' => 'kayong3',
            'phone_number_verified_at' => Carbon::now(),
            'level' => false,
            'voting_zone_id' => 3,
            'city_id' => 2,
            'password' => bcrypt('12345678'),
        ]);

        Admin::create([
            'name' => 'Kayong Utara 4',
            'username' => 'kayong4',
            'phone_number_verified_at' => Carbon::now(),
            'level' => false,
            'voting_zone_id' => 4,
            'city_id' => 2,
            'password' => bcrypt('12345678'),
        ]);
    }
}
