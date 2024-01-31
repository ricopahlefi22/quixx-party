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
            'name' => 'Sunardi',
            'username' => 'naldy',
            'phone_number' => '08123123123',
            'phone_number_verified_at' => Carbon::now(),
            'level' => false,
            'password' => bcrypt('12345678'),
        ]);

        Admin::factory(5)->create();
    }
}
