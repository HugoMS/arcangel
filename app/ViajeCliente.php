<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViajeCliente extends Model
{
    //

    protected $table = 'viaje_cliente';
    public $timestamp = false;

    public function cliente()
    {
        return $this->belongsTo('App\User', 'cliente_id');
    }

    public function viaje()
    {
        return $this->belongsTo('App\Viaje', 'viaje_id');
    }
}
