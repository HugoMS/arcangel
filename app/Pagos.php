<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagos extends Model
{
    protected $table = 'pago';
    public $timestamp = false;

    public function viaje()
    {
        return $this->belongsTo('App\Viaje', 'viaje_id');
    }

}
