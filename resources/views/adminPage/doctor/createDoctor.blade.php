<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Dokter Baru</title>
    <!-- Tambahkan Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
     <!-- Pesan Sukses -->
     @if (session('success'))
     <div class="alert alert-success">
         {{ session('success') }}
     </div>
    @endif

    @if (session('error'))
     <div class="alert alert-danger">
         {{ session('error') }}
     </div>
    @endif
    <h2 class="mb-4">Tambah Dokter Baru</h2>
    <form action="{{ route('doctors.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Dokter</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="department_id" class="form-label">Department</label>
            <select class="form-select" id="department_id" name="department_id" required>
                <option selected disabled>Choose a doctor</option>
                @foreach ($departments as $d)
                    <option value="{{ $d->id }}">{{ $d->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="specialization" class="form-label">Spesialisasi</label>
            <input type="text" class="form-control" id="specialization" name="specialization" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
</body>
</html>
