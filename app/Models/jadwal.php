<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    use HasFactory;

    public $fillable = ['id_perusahaan', 'id_produk','id_project','id_activity'];
    public $timestamps = true;

    public function perusahaan()
    {

        return $this->belongsTo(perusahaan::class, 'id_perusahaan');
    }
    public function produk()
    {

        return $this->belongsTo(produk::class, 'id_produk');
    }
    public function project()
    {

        return $this->belongsTo(project::class, 'id_project');
    }
    public function activity()
    {

        return $this->belongsTo(activity::class, 'id_activity');
    }
}
