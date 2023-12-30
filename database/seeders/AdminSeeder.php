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
            'email' => 'ricopahlefi22@gmail.com',
            'email_verified_at' => Carbon::now(),
            'level' => true,
            'password' => bcrypt('12341234'),
        ]);


        Admin::create([
            'name' => 'Naldy',
            'email' => 'admin@gmail.com',
            'email_verified_at' => Carbon::now(),
            'level' => true,
            'password' => bcrypt('12345678'),
        ]);

        Admin::create([
            'name' => 'Naldy',
            'email' => 'user@gmail.com',
            'email_verified_at' => Carbon::now(),
            'level' => false,
            'password' => bcrypt('12345678'),
        ]);

        Admin::factory(5)->create();
    }
}
