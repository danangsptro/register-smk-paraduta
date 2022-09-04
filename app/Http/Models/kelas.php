<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $guarded = [];

    public function formPendaftaran()
    {
        return $this->hasMany(formPendaftaran::class, 'kelas_id', 'id');
    }

    public function jurusan ()
    {
        return $this->belongsTo(Jurusan::class, 'jurusan_id', 'id');
    }
}
