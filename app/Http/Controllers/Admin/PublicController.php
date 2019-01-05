<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublicController extends Controller
{

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $res = array(
            'data'=>array('token' => 123),
            'code' => 20000,
            'username' => $username,
            'password' => $password,
        );
        return $res;
    }

    public function info(Request $request)
    {
        $token = $request->input('token');
        $res = array(
            'data'=>array('token' => 123,'roles'=>'admin'),
            'code' => 20000,
            'token' => $token,
        );
        return $res;
    }

    public function logout(Request $request)
    {
        $res = array(
            'data'=>array('token' => 123),
            'code' => 20000,
        );
        return $res;
    }

}
