<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Database\Seeders\DoctorSeeder;
use Database\Seeders\DepartmentSeeder;
use Database\Seeders\TimeSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            DepartmentSeeder::class,
            DoctorSeeder::class,
            TimeSeeder::class
        ]);
    }

}
