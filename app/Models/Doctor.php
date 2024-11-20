<?php

namespace App\Models;

use App\Models\Department;
use App\Models\Appointments;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function appointments()
    {
        return $this->hasMany(Appointments::class);
    }

    // Relasi ke model Department (Many-to-One)
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
