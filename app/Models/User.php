<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'username',
        'password',
        'nama',
        'nip',
        'jabatan',
        'pangkat',
        'golongan',
        'email_verified_at',
        'role',
        'remember_token',
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];
}
