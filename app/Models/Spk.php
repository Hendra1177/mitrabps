<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spk extends Model
{
    use HasFactory;
    protected $table = 'spk';
    protected $fillable = [
        'hari',
        'tanggal',
        'bulan',
        'tahun',
        'ppk',
        'kegiatan_id',
        'mitrabaru_id'
        
    ];

    public function kegiatan_mitra(){
        return $this->belongsToMany(KegiatanMitra::class, 'kegiatan_mitra_id');
    }
}
