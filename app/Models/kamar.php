<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $fillable = ['kode_kamar', 'nama_kamar', 'harga_kamar'];
    use HasFactory;
    
    public function pasien()
    {
        return $this->hasMany(pasien::class);
    }
}