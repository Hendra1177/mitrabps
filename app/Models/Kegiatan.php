<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;
    protected $table = 'kegiatan';
    protected $fillable = [
        'nama_kegiatan',
        'bulan',
        'tanggal_mulai',
        'tanggal_akhir',
        'beban_anggaran',
        'volume_total',
        'satuan',
        'harga_satuan' 
    ];

    public function mitra(){
        return $this->belongsToMany(Mitra::class)->withPivot('nilai_perjanjian');
    }
}
