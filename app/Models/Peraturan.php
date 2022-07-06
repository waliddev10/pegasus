<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peraturan extends Model
{
    protected $table = 'peraturan';

    protected $fillable = [
        'kategori',
        'jenis',
        'nomor',
        'tahun',
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
