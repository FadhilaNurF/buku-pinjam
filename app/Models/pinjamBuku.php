<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pinjamBuku extends Model
{
    protected $table = 'pinjam_bukus';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_peminjam',
        'nama_buku',
        'jumlah_buku',
        'tanggal_pinjam',
        'tanggal_kembali',
        'denda'
    ];
}
