<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    public $fillable = ['code_produk', 'nama_produk','jenis_produk'];
    public $timestamps = true;

    public function jadwal()
    {

        return $this->hasMany(jadwal::class);
    }
}
