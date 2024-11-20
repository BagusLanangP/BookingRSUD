<?php

namespace App\Models;

use App\Models\Doctor;
use App\Models\Appointments;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }

    // Relasi ke model Appointment (One-to-Many)
    public function appointments()
    {
        return $this->hasMany(Appointments::class);
    }

    
}
