<?php

namespace App\Http\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{

    protected $guarded = [];

    public function status ()
    {
        return $this->belongsTo(status::class, 'status_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function jenisBiaya()
    {
        return $this->belongsTo(jenisBiaya::class, 'jenis_biaya_id');
    }

}
