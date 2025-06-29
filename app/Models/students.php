<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class students extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'id',
        'firstname',
        'lastname',
        'email',
        'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
