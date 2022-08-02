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
        'target',
        'pekerjaan',
        'alamat',
        'kecamatan',
        'no_hp',
        'rekening_bri' 
    ];

    public function kegiatan(){
        return $this->belongsToMany(Kegiatan::class)->withPivot('nilai_perjanjian');
    }
}
