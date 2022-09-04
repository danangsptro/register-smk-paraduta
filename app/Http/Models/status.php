<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    protected $guarded = [];

    public function invoice()
    {
        return $this->hasMany(invoice::class, 'status_id', 'id');
    }

    public function formPendaftaran(){
        return $this->hasMany(formPendaftaran::class, 'status_id', 'id');
    }

    public function uploadInvoice()
    {
        return $this->hasMany(uploadInvoice::class, 'invoice', 'id');
    }
}
