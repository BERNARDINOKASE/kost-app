<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiSewa extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = [
        'id',
        'nama_penyewa',
        'jenis_kelamin',
        'pekerjaan',
        'tanggal_lahir',
        'nama_kampus',
        'status',
        'no_hp',
        'asal_kota',
        'created_at',
        'updated_at'
    ];
}
