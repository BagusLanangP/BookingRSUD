<?php


namespace App\Http\Controllers;

use App\Models\Appointments;
use App\Models\Time;  // Import model Time
use App\Models\Doctor;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;  // Import Log untuk pencatatan error

class AppointmentsController extends Controller
{
    /**
     * Simpan booking appointment baru.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Debugging: Menampilkan semua data request untuk memeriksa data yang diterima
        // dd($request->all());

        // Validasi input
        try {
            $request->validate([
                'patient_name' => 'required|string|max:255',
                'email' => 'required|string|max:255',
                'phone' => 'nullable|string|max:20',
                'doctor_id' => 'required|exists:doctors,id',
                'department_id' => 'required|exists:departments,id',
                'gender' => 'required|in:Laki-Laki,Perempuan',  // Validasi gender
                'date' => 'required|date',
                'time_id' => 'required|exists:times,id', // Validasi id waktu
            ]);

            // Ambil ID waktu berdasarkan time_slot yang dipilih
            $time = Time::where('id', $request->time_id)->first();

            // Cek apakah waktu valid
            if (!$time) {
                return redirect()->back()->with('error', 'Waktu tidak valid.');
            }

            // Simpan data appointment
            $appointment = Appointments::create([
                'patient_name' => $request->patient_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'doctor_id' => $request->doctor_id,
                'department_id' => $request->department_id,
                'date' => $request->date,
                'time_id' => $request->time_id, // Menyimpan ID waktu
                'gender' => $request->gender
            ]);

            // Cek apakah appointment berhasil disimpan
            if ($appointment) {
                return redirect()->back()->with('success', 'Appointment berhasil disimpan.');
            }

            // Jika gagal simpan appointment
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

    public function destroy($id)
    {
        try {
            // Cari appointment berdasarkan ID
            $appointment = Appointments::findOrFail($id);

            // Hapus appointment
            $appointment->delete();

            return redirect()->back()->with('success', 'Appointment berhasil dihapus.');
        } catch (\Exception $e) {
            // Catat error jika terjadi kesalahan
            Log::error('Error saat menghapus appointment: ' . $e->getMessage(), [
                'appointment_id' => $id,
                'exception' => $e
            ]);

            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus appointment.');
        }
    }
}
