<?php

namespace App\Http\Controllers;

use App\Pagos;
use App\Viaje;
use App\Paquete;
use Validator;
use Carbon\Carbon;
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
        $viajes = Viaje::where('cliente_id', Auth::user()->id)->get();
        foreach ($viajes as $viaje) {
            $travel = array($viaje);
            array_push ($data,$travel);
        }
        return view('public.cliente.travel.list')->with(array('data'=>$data, 'page_title'=> 'Mis Viajes'));
    }

    public function getTravel($code){
        $viaje = Paquete::where('cod', $code)->get();

        return view('public.cliente.travel.travel-description')->with(array('data'=>$viaje[0], 'page_title'=> $viaje[0]->titulo));

    }

    public function getTravelPay($code){
        return View('public.cliente.travel.travel-pay')->with(array('data'=>$code, 'listabancos'=> config('bancos.listabancos')));
    }


    public function postTravelPay(Request $request){
        $rules = ['pay-adj' => 'required|image|max:1024*1024*1',
        'numReferencia' => 'required|numeric',
        'fechapago' => 'required|date',
        'montopago' => 'required|numeric',
            ];
        $messages = [

            'pay-adj.required' => 'El archivo es requerido',
            'pay-adj.image' => 'Formato no permitido',
            'pay-adj.max' => 'El máximo permitido es 1 MB',
            'numReferencia.required' => 'El número de referencia es obligatorio',
            'numReferencia.numeric' => 'Sólo se aceptan números',
            'fechapago.required' => 'La fecha del pago  es requerida',
            'montopago.required' => 'El monto es obligatorio',
            'montopago.numeric' => 'Sólo se aceptan números',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()){
            return redirect('travels/pay/'.$request->codtravel)->withErrors($validator);
        }
        else{
            $name = Carbon::now(). '-' .$request->codtravel. '-' . Auth::user()->id . '-' . $request->file('pay-adj')->getClientOriginalName();
            $request->file('pay-adj')->move('pagos', $name);
            $new_pay = new Pagos();
            print_r($new_pay);
            $new_pay->monto($request->montopago);
            $new_pay->fecha($request->fechapago);
            $paquete = Paquete::where('cod', $request->cod)->get();
            print_r($paquete);
            //$new_pay->viaje_id(Viaje::where('cliente_id',Auth::user()->id)->where('paquete_id', ));
            //$new_pay->save();

           // return redirect('user')->with('status', 'Su imagen de perfil ha sido cambiada con éxito');
        }
    }
}
