<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $guarded = [];

    public function formPendaftaran()
    {
        return $this->hasMany(Jurusan::class, 'jurusan_id', 'id');
    }

    public function kelas() {
        return $this->hasMany(kelas::class, 'jurusan_id', 'id');
    }
}
