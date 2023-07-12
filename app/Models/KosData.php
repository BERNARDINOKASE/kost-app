<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KosData extends Model
{
    use HasFactory;
    protected $guard = [];
    protected $fillable = [
        'nama_kos',
        'tipe_kamar',
        'deskripsi',
        'nama_pengelola',
        'no_hp_pengelola',
        'peraturan',
        'foto_bgnan_tampak_depan',
        'foto_bgnan_dalam',
        'foto_bgnan_dari_jalan',
        'foto_km_depan',
        'foto_km_dalam',
        'foto_km_mandi',
        'fasilitas_kamar',
        'fasilitas_kamar_mandi',
        'fasilitas_umum',
        'alamat',
        'p_kamar',
        'l_kamar',
        'jlh_kamar',
        'harga',
        'created_at',
        'updated_at'
    ];


    // public function user()
    // {
    //     return $this->belongsTo(User::class,);
    // }
}
