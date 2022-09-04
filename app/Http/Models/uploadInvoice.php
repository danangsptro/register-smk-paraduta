<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class uploadInvoice extends Model
{
    protected $guarded = [];

    public function status ()
    {
        return $this->belongsTo(status::class, 'status_id');
    }

}
