<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $doctors = [
            ['name' => 'Dr. John Doe', 'specialization' => 'Cardiologist', 'email' => 'john.doe@example.com', 'phone' => '123456789', 'department_id' => 1],
            ['name' => 'Dr. Sarah Smith', 'specialization' => 'Neurologist', 'email' => 'sarah.smith@example.com', 'phone' => '987654321', 'department_id' => 2],
            ['name' => 'Dr. Emily Johnson', 'specialization' => 'Pediatrician', 'email' => 'emily.johnson@example.com', 'phone' => '555123456', 'department_id' => 3],
            ['name' => 'Dr. Michael Brown', 'specialization' => 'Orthopedic Surgeon', 'email' => 'michael.brown@example.com', 'phone' => '444123456', 'department_id' => 4],
            ['name' => 'Dr. Lisa Wilson', 'specialization' => 'Gynecologist', 'email' => 'lisa.wilson@example.com', 'phone' => '333123456', 'department_id' => 5],
        ];

        foreach ($doctors as $doctor) {
            Doctor::create($doctor);
        }
    }
}
