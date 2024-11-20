<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DoctorController extends Controller
{
    /**
     * Tampilkan form untuk menambah dokter baru.
     */
    public function create()
    {
        $departments = Department::all();
        return view('adminPage.doctor.CreateDoctor', ['departments' => $departments]);
    }

    /**
     * Simpan data dokter baru.
     */
    public function store(Request $request)
    {
        //  dd($request->all());
        // Validasi input
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:doctors,email',
                'department_id' => 'required|exists:departments,id',
                'specialization' => 'required|string|max:255',
                'phone' => 'nullable|string|max:20',
            ]);

            // Simpan ke database
            $Doctor = Doctor::create([
                'name' => $request->name,
                'email' => $request->email,
                'department_id' => $request->department_id,
                'specialization' => $request->specialization,
                'phone' => $request->phone,
            ]);
            if ($Doctor) {
                return redirect()->back()->with('success', 'Doctor berhasil disimpan.');
            }

            return redirect()->back()->with('error', 'Gagal menyimpan appointment. Silakan coba lagi.');
        } catch (\Exception $e) {
            // Menangkap error dan mencatatnya
            Log::error('Error saat menyimpan appointment: ' . $e->getMessage(), [
                'request_data' => $request->all(),
                'exception' => $e
            ]);

            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan appointment. Silakan coba lagi.');
        }
        
    }
}
