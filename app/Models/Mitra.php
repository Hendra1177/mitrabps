<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;
    protected $table = 'mitra';
    protected $fillable = [
        'nama_mitra',
        'pekerjaan',
        'alamat',
        'desa',
        'kecamatan',
        'no_hp',
        'rekening_bri' 
    ];

    public function kegiatan(){
        return $this->belongsToMany(Kegiatan::class, 'kegiatan_mitra', 'kegiatan.id', 'mitra.id')->withPivot('nilai_perjanjian', 'target');
    }
}
