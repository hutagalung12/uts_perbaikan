<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan; // Import model Kendaraan
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    /**
     * Menampilkan daftar antrean kendaraan ke dalam tabel.
     */
    public function index()
    {
        $kendaraans = Kendaraan::all(); // Mengambil seluruh data
        return view('kendaraan.index', compact('kendaraans')); // Sesuai poin 4 soal
    }

    /**
     * Menampilkan form untuk menambah kendaraan baru.
     */
    public function create()
    {
        return view('kendaraan.create');
    }

    /**
     * Menyimpan data kendaraan baru ke database.
     */
    public function store(Request $request)
    {
        // Validasi sederhana (Opsional namun disarankan)
        $request->validate([
            'nama_pemilik' => 'required',
        ]);

        // Menggunakan Mass Assignment sesuai poin 2 soal
        Kendaraan::create($request->all());

        // Redirect kembali ke halaman daftar servis sesuai poin 4 soal
        return redirect()->route('kendaraan.index');
    }

    /**
     * Display the specified resource (Tidak wajib untuk UTS ini).
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Menampilkan form edit yang sudah terisi data lama.
     */
    public function edit(string $id)
    {
        $kendaraan = Kendaraan::findOrFail($id); // Mencari data berdasarkan ID
        return view('kendaraan.edit', compact('kendaraan')); // Sesuai poin 5 soal
    }

    /**
     * Memperbarui data kendaraan di database.
     */
    public function update(Request $request, string $id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->update($request->all());

        return redirect()->route('kendaraan.index');
    }

    /**
     * Menghapus data kendaraan dari database.
     */
    public function destroy(string $id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->delete();

        // Redirect setelah proses hapus sesuai poin 5 soal
        return redirect()->route('kendaraan.index');
    }
}