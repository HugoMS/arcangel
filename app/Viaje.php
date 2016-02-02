<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    //

    protected $table = 'viaje';
    public $timestamp = false;

    public function cliente()
    {
        return $this->belongsTo('App\User', 'cliente_id');
    }

    public function paquete()
    {
        return $this->belongsTo('App\Paquete', 'paquete_id');
    }

}
