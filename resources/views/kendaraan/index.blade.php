@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h3>Antrean Kendaraan</h3>
        <a href="{{ route('kendaraan.create') }}" class="btn btn-primary">Tambah Kendaraan</a>
    </div>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Plat Nomor</th>
                <th>Pemilik</th>
                <th>Merk</th>
                <th>Keluhan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kendaraans as $k)
            <tr>
                <td>{{ $k->plat_nomor }}</td>
                <td>{{ $k->nama_pemilik }}</td>
                <td>{{ $k->merk_kendaraan }}</td>
                <td>{{ $k->keluhan }}</td>
                <td>
                    <a href="{{ route('kendaraan.edit', $k->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('kendaraan.destroy', $k->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus kendaraan dari antrean?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection