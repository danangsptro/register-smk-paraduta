<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class jenisBiaya extends Model
{
    protected $guarded = [];

    public function invoice()
    {
        return $this->hasMany(invoice::class, 'jenis_biaya_id', 'id');
    }
}
