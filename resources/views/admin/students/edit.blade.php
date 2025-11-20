@extends('layouts.admin')

@section('title', 'Edit Data Siswa')

@section('content')
<div class="container mt-4">
    <h2>Edit Data Siswa</h2>

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nis" class="form-label">NIS</label>
            <input type="text" name="nis" class="form-control" value="{{ $student->nis }}" required>
        </div>

        <div class="mb-3">
            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form-control" value="{{ $student->nama_lengkap }}" required>
        </div>

        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-select" required>
                <option value="Laki-laki" {{ $student->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ $student->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="nisn" class="form-label">NISN</label>
            <input type="text" name="nisn" class="form-control" value="{{ $student->nisn }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
