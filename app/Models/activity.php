<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activity extends Model
{
    use HasFactory;
    public $fillable = ['tanggal','kegiatan','status'];
    public $timestamps = true;

    public function jadwal()
    {

        return $this->hasMany(jadwal::class);
    }
}
