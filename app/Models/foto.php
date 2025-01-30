<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class foto extends Model
{
    protected $table = "fotos";
    protected $fillable = ['judul','deskripsi','lokasifile','album_id', 'user_id'] ;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function komentar()
    {
        return $this->hasMany(komen::class, 'foto_id');
    }
}
