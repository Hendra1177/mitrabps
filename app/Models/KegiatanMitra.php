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
        'mitra_id',
        'nilai_perjanjian',
    ];

    public function mitra(){
        return $this->belongsToMany(Mitra::class)->withPivot('nilai_perjanjian');
    }
}
