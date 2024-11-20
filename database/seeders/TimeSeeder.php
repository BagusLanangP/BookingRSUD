<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Time;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class TimeSeeder extends Seeder
{
    public function run()
    {
        // Buat array untuk waktu dari jam 7-8 pagi hingga 13-14
        $timeSlots = [
            '07:00 - 08:00',
            '08:00 - 09:00',
            '09:00 - 10:00',
            '10:00 - 11:00',
            '11:00 - 12:00',
            '12:00 - 13:00',
            '13:00 - 14:00',
        ];

        // Loop dan masukkan data ke tabel
        foreach ($timeSlots as $slot) {
            Time::create(['time_slot' => $slot]);
        }
    }
}
