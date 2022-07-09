<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Konsep extends Model
{
    protected $table = 'konsep';

    protected $fillable = [
        'judul',
        'deskripsi',
        'file',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
