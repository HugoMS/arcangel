<?php
/**
 * Created by PhpStorm.
 * User: hugo
 * Date: 20/01/16
 * Time: 10:42 AM
 */

namespace App\Http\Controllers;


use App\Cliente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;



class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('SessionCliente', ['except' => ['getIndex', 'postIndex']]);
    }

    public function getIndex()
    {
        return view('public.cliente.login', array());
    }

    public function postIndex(Request $request)
    {
//        $validator = \Validator::make($request->all(),
//            [
//                'email' => 'required|email',
//                'pass' => 'required'
//            ]
//        );
//        if ($validator->fails()) {
//            return redirect()->back()->withErrors($validator->errors());
//        }

        $cliente = Cliente::where('email', $request['email'])->get();

        if (isset($cliente[0]->id) && $cliente[0]->id != " ") {

            \Session::put('cliente_token', $cliente[0]->id);
            \Session::put('clienteId', $cliente[0]->id);
            \Session::put('clienteName', $cliente[0]->name);
            \Session::put('clienteEmial', $cliente[0]->email);
            \Session::put('clienteAvatar', "");
            // dd( \Session::all());
            return redirect('home');
        }
        // return view('public.admin', array());
    }

    public function getLogout()
    {
        \Session::forget('cliente_token');
        \Session::forget('clienteId');
        \Session::forget('clienteName');
        \Session::forget('clienteEmial');
        return redirect('/');
    }

    public function getSocialAuth($provider = null)
    {
        if (!config("services.$provider")) abort('404');
        return Socialite::driver($provider)->redirect();
    }

    public function getSocialAuthCallback($provider = null)
    {
        if ($user = Socialite::driver($provider)->user()) {
            dd($user);
        } else {
            return '¡¡¡Algo fue mal!!!';
        }
    }


}