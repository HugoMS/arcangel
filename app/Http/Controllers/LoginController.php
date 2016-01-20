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


class LoginController extends Controller
{
    public function getIndex()
    {
        return view('public.user.login', array());
    }

    public function postIndex(Request $request)
    {

//        $validator = \Validator::make($request->all(),
//            [
//                'email' => 'required|email',
//                'password' => 'required'
//            ]
//        );
//        if ($validator->fails()) {
//            return redirect()->back()->withErrors($validator->errors());
//        }

        $cliente = Cliente::all();
        echo '<pre>';
        print_r($cliente);
        echo '</pre>';
        exit();
        return view('public.user.login', array('a'=>$cliente));

    }

}