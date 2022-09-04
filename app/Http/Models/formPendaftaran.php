<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class formPendaftaran extends Model
{
    protected $guarded = [];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'jurusan_id');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function status()
    {
        return $this->belongsTo(status::class, 'status_id');
    }
}
