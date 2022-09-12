<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanMitra extends Model
{
    use HasFactory;
    protected $table = 'kegiatan_mitra';
    protected $fillable = [
        'kegiatan_id',
        'mitrabaru_id',
        // 'nilai_pernjanjian',
        'target',
        'bertugas_sebagai',
    ];

    public function mitra(){
        return $this->belongsToMany(Mitra::class, 'mitra_id');
    }

    public function kegiatan(){
        return $this->belongsToMany(Kegiatan::class, 'kegiatan_id');
    }

    public function mitrabaru(){
        return $this->belongsToMany(MitraBaru::class, 'mitrabaru_id');
    }

    public function spk(){
        return $this->belongsToMany(Spk::class);
    }

    // public function getKegiatanMitra(){
        
    // }
}
