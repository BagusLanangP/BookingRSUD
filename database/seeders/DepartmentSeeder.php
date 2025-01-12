<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            ['name' => 'Cardiology'],
            ['name' => 'Neurology'],
            ['name' => 'Pediatrics'],
            ['name' => 'Orthopedics'],
            ['name' => 'Gynecology']
        ];

        foreach ($departments as $department) {
            Department::create($department);
        }
    }
}
