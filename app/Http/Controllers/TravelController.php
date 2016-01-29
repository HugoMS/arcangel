<?php

namespace App\Http\Controllers;

use App\ViajeCliente;
use App\Viaje;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TravelController extends Controller
{
    //

    public function getIndex()
    {
        $data = [];
        $viajesCliente = ViajeCliente::where('cliente_id', Auth::user()->id)->get();

        foreach ($viajesCliente as $viaje) {
            $travel = array($viaje->viaje);
            array_push ($data,$travel);
        }
        return view('public.cliente.travel.list')->with(array('data'=>$data, 'page_title'=> 'Mis Viajes'));
    }

    public function getTravel($code){
        $viaje = Viaje::where('cod', $code)->get();

        return view('public.cliente.travel.travel-description')->with(array('data'=>$viaje[0], 'page_title'=> $viaje[0]->titulo));

    }
}
