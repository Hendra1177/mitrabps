<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MitraBaru extends Model
{
    use HasFactory;
    protected $table = 'mitrabaru';
    protected $fillable = [
        'nama_mitra',
        'email',
        'kecamatan_id',
        'desa_id',
        'alamat',
        'tanggal_lahir',
        'jenis_kelamin_id',
        'no_hp',
        'pekerjaan',
        'rekening_bri' 
    ];

    public function kegiatan_mitra(){
        return $this->belongsToMany(KegiatanMitra::class, 'kegiatan_mitra_id');
    }

    public function kecamatan(){
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id');
    }

    public function desa(){
        return $this->belongsTo(Desa::class, 'desa_id');
    }

    public function jeniskelamin(){
        return $this->belongsTo(JenisKelamin::class, 'jeniskelamin_id');
    }

    // public function kegiatan(){
    //     return $this->belongsToMany(Kegiatan::class, 'kegiatan_mitra', 'kegiatan.id', 'mitra.id')->withPivot('nilai_perjanjian', 'target');
    // }
}
