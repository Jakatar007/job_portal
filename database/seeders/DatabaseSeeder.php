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
        \App\Models\User::factory(3)->create(); // สร้างข้อมูลผู้ใช้ 3 คน

        \App\Models\Job::factory(25)->create(); // สร้างข้อมูล job 25 รายการ
    }
}