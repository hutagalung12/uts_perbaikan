@extends('layouts.app')
@section('content')
    <h3>Tambah Kendaraan Baru</h3>
    <form action="{{ route('kendaraan.store') }}" method="POST">
        @csrf
        <div class="mb-3"><label>Plat Nomor</label><input type="text" name="plat_nomor" class="form-control" required></div>
        <div class="mb-3"><label>Nama Pemilik</label><input type="text" name="nama_pemilik" class="form-control" required></div>
        <div class="mb-3"><label>Merk Kendaraan</label><input type="text" name="merk_kendaraan" class="form-control" required></div>
        <div class="mb-3"><label>Keluhan</label><textarea name="keluhan" class="form-control" required></textarea></div>
        <button type="submit" class="btn btn-success">Simpan Data</button>
    </form>
@endsection