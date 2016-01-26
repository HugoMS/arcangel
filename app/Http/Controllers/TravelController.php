<?php

namespace App\Http\Controllers;

use App\ViajeCliente;
use App\Viaje;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TravelController extends Controller
{
    //

    public function getIndex()
    {
        $data = [];
        $viajesCliente = ViajeCliente::where('cliente_id', \Session::get('clienteId'))->get();

        foreach ($viajesCliente as $viaje) {
            $travel = array($viaje->viaje);
            array_push ($data,$travel);
        }
        return view('public.cliente.travels')->with(array('data'=>$data, 'page_title'=> 'Mis Viajes'));
    }

    public function getTravel($code){
        $viaje = Viaje::where('cod', $code)->get();


    }
}
