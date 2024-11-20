<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) { 
            $table->id();
            $table->string('patient_name'); // Nama pasien
            $table->string('email')->unique(); // Email unik
            $table->string('phone')->nullable(); // Nomor telepon opsional
            $table->foreignId('doctor_id')->constrained('doctors')->onDelete('cascade'); // Relasi ke tabel dokter
            $table->foreignId('department_id')->constrained('departments')->onDelete('cascade'); // Relasi ke tabel departemen
            $table->date('date'); // Tanggal appointment
            $table->foreignId('time_id')->constrained('times')->onDelete('cascade'); // Relasi ke tabel waktu
            $table->enum('gender', ['Laki-Laki', 'Perempuan']);
            $table->timestamps(); // Timestamp untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
