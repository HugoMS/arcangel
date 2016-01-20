<?php
/**
 * Created by PhpStorm.
 * User: hugo
 * Date: 20/01/16
 * Time: 10:42 AM
 */

namespace App\Http\Controllers;


class LoginController  extends Controller
{


    public function getIndex()
    {
        return view('public.user.login', array());
    }
}