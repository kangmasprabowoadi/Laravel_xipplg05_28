@extends('layouts.admin')

@section('title', 'Data Siswa')

@section('content')
<div class="content-wrapper p-4">
    <section class="content-header mb-4">
        <h1 class="mb-3">📘 Data Siswa</h1>
        <a href="{{ route('students.create') }}" class="btn btn-primary">+ Tambah Siswa</a>
    </section>

    <section class="content">
        <div class="container-fluid">

            {{-- Notifikasi Sukses --}}
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            {{-- Tabel Data Siswa --}}
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th style="width: 5%">No</th>
                                <th style="width: 15%">NIS</th>
                                <th style="width: 25%">Nama Lengkap</th>
                                <th style="width: 15%">Jenis Kelamin</th>
                                <th style="width: 20%">NISN</th>
                                <th style="width: 20%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($students as $student)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $student->nis }}</td>
                                    <td>{{ $student->nama_lengkap }}</td>
                                    <td>{{ $student->jenis_kelamin }}</td>
                                    <td>{{ $student->nisn }}</td>
                                    <td>
                                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>

                                        <form action="{{ route('students.destroy', $student->id) }}" 
                                                method="POST" 
                                                style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Yakin ingin menghapus data ini?')">
                                                <i class="fas fa-trash"></i> Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Belum ada data siswa</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>
</div>
@endsection
