<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;
    public $fillable = ['code_project', 'tanggal','nama_project','jenis_project','deadline'];
    public $timestamps = true;

    public function jadwal()
    {

        return $this->hasMany(jadwal::class);
    }
}
