<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    use HasFactory;
    protected $table = 'desa';
    protected $fillable = [
        'nama_desa',
    ];
    public function mitra_baru(){
        return $this->hasMany(MitraBaru::class, 'mitra_baru_id');
    }
}
