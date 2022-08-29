<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKelamin extends Model
{
    use HasFactory;
    protected $table = 'jeniskelamin';
    protected $fillable = [
        'kelamin',
    ];

    public function mitrabaru(){
        return $this->hasOne(MitraBaru::class, 'mitrabaru_id');
    }
}
