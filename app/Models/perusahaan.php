<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perusahaan extends Model
{
    use HasFactory;
    public $fillable = ['nama_perusahaan', 'alamat','detail'];
    public $timestamps = true;

    public function jadwal()
    {

        return $this->hasMany(jadwal::class);
    }
}
