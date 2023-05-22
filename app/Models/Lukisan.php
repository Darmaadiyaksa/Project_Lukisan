<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lukisan extends Model
{
    use HasFactory;

    protected $primaryKey = 'kode_lukisan';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'kode_lukisan',
        'judul_lukisan',
        'nama_pelukis',
        'uk_panjang',
        'uk_lebar',
        'material',
        'tahun_dibuat',
        'deskripsi',
        'gambar',
        'status_lukisan',
        'status_pelelangan',
        'keterangan',
    ];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'kode_lukisan', 'kode_lukisan');
    }
}
