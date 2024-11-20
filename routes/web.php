<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Models\Time;
use App\Models\Doctor;
use App\Models\Department;
use App\Models\Appointments;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentsController;

Route::get('/', function () {
    // Ambil data dokter dan departemen dari database
    $doctors = Doctor::all();
    $departments = Department::all();
    $times = Time::all();
     // Ambil semua data appointment
    $appointments = Appointments::with(['doctor', 'department', 'time'])->get();

    // Kirim data ke view
    return view('dashboard', [
        'doctors' => $doctors,
        'departments' => $departments,
        'times' => $times,
        'appointments' => $appointments,
    ]);
});



Route::post('/appointments', [AppointmentsController::class, 'store'])->name('appointments.store');


// Route untuk form tambah dokter
Route::get('/doctors/create', [DoctorController::class, 'create'])->name('doctors.create');

Route::post('/doctors/store', [DoctorController::class, 'store'])->name('doctors.store');

Route::delete('/appointments/{id}', [AppointmentsController::class, 'destroy'])->name('appointments.destroy');