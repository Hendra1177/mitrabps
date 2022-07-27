<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Auth extends Model
{
    protected $table='user';

    protected $fillable =[
        'name',
        'email',
        'password',
        'is_admin'
        
    ];

    public function user () {
        return $this->hasMany(User::class);
    }
    use HasFactory;
}
