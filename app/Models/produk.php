<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    public $fillable = ['code_produk', 'nama_produk','jenis_produk','image','deskripsi'];
    public $timestamps = true;

    public function jadwal()
    {

        return $this->hasMany(jadwal::class);
    }
     public function image()
    {
        if ($this->image && file_exists(public_path('images/produk/'
            . $this->image))) {
            return asset('images/produk/' . $this->image);
        } else {
            return asset('images/no_image.jpg');
        }
    }
    // mengahupus image(image) di storage(penyimpanan) public
    public function deleteImage()
    {
        if ($this->image && file_exists(public_path('images/produk/'
            . $this->image))) {
            return unlink(public_path('images/produk/' . $this->image));
        }
    }
}
