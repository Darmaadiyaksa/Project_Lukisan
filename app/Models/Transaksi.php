<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksis';

    protected $fillable = [
        'kode_lukisan',
        'id_pegawai',
        'tanggal_transaksi',
        'total',
        'keterangan',
    ];

    // Relationship dengan model Lukisan
    public function lukisan()
    {
        return $this->belongsTo(Lukisan::class, 'kode_lukisan', 'kode_lukisan');
    }
}
