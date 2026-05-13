@extends('layouts.app')
@section('content')
    <h3>Edit Data Kendaraan</h3>
    <form action="{{ route('kendaraan.update', $kendaraan->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3"><label>Plat Nomor</label><input type="text" name="plat_nomor" value="{{ $kendaraan->plat_nomor }}" class="form-control"></div>
        <div class="mb-3"><label>Nama Pemilik</label><input type="text" name="nama_pemilik" value="{{ $kendaraan->nama_pemilik }}" class="form-control"></div>
        <div class="mb-3"><label>Merk Kendaraan</label><input type="text" name="merk_kendaraan" value="{{ $kendaraan->merk_kendaraan }}" class="form-control"></div>
        <div class="mb-3"><label>Keluhan</label><textarea name="keluhan" class="form-control">{{ $kendaraan->keluhan }}</textarea></div>
        <button type="submit" class="btn btn-primary">Update Data</button>
    </form>
@endsection