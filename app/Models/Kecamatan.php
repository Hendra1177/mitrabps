<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;
    protected $table = 'kecamatan';
    protected $fillable = [
        'nama_kecamatan',
    ];

    public function mitra_baru(){
        return $this->hasMany(mitra_baru::class, 'mitra_baru_id');
    }
}
