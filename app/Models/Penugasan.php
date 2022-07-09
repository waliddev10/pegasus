<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penugasan extends Model
{
    protected $table = 'penugasan';

    protected $fillable = [
        'judul',
        'keterangan',
        'skpd',
        'tgl_mulai',
        'tgl_selesai',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
