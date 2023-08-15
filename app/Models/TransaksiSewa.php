<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiSewa extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = [
        'user_id',
        'kos_id',
        'id',
        'nama_penyewa',
        'jenis_kelamin',
        'pekerjaan',
        'tanggal_lahir',
        'nama_kampus',
        'status',
        'no_hp',
        'asal_kota',
        'no_rek',
        'nama_rek',
        'jumlah_tf',
        'created_at',
        'updated_at'
    ];

    public function kos_data()
    {
        return $this->belongsTo(KosData::class, 'kos_id', 'id');
    }
}
