<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelukis extends Model
{
    use HasFactory;

    protected $table = 'pelukis';
    protected $fillable = ['nama_pelukis', 'tgl_lahir', 'created_at', 'updated_at'];

    public function lukisan()
    {
        return $this->hasMany(Lukisan::class);
    }
}
