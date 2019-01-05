<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AaaController extends Controller
{

    public function aaa(Request $request)
    {
        if ($request->isMethod('post')) {
            $username = $request->input('username');
            $password = $request->input('password');
            $res = array(
                'status' => 1,
                'username' => $username,
                'password' => $password,
            );
            return $res;
        }else{
            return View('aaa');
        }

    }

}
