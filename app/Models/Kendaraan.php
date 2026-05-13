<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    /**
     * Nama tabel yang terkait dengan model.
     * Secara default Laravel akan menganggap tabelnya bernama 'kendaraans'.
     */
    protected $table = 'kendaraans';

    /**
     * Atribut yang dapat diisi melalui Mass Assignment.
     * Sesuai instruksi poin nomor 2 pada soal.
     */
    protected $fillable = [
        'plat_nomor',
        'nama_pemilik',
        'merk_kendaraan',
        'keluhan',
    ];
}