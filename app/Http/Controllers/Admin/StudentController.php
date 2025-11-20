<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // 🔹 Tampilkan semua data siswa
    public function index()
    {
        $students = Student::all();
        return view('admin.students.index', compact('students'));
    }

    // 🔹 Tampilkan form tambah siswa
    public function create()
    {
        return view('admin.students.create');
    }

    // 🔹 Simpan data siswa baru
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'nisn' => 'required',
        ]);

        Student::create($request->all());
        return redirect()->route('students.index')->with('success', 'Data siswa berhasil ditambahkan!');
    }

    // 🔹 Tampilkan form edit siswa
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('admin.students.edit', compact('student'));
    }

    // 🔹 Update data siswa
    public function update(Request $request, $id)
    {
        $request->validate([
            'nis' => 'required',
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'nisn' => 'required',
        ]);

        $student = Student::findOrFail($id);
        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Data siswa berhasil diperbarui!');
    }

    // 🔹 Hapus data siswa
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Data siswa berhasil dihapus!');
    }
}
