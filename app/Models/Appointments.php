<?php

namespace App\Models;

use App\Models\Doctor;
use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointments extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


     // Relasi ke model Doctor
     public function doctor()
     {
         return $this->belongsTo(Doctor::class);
     }
 
     // Relasi ke model Department
     public function department()
     {
         return $this->belongsTo(Department::class);
     }

     // Pada model Appointments.php
    public function time()
    {
        return $this->belongsTo(Time::class);
    }

}
