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
            'status' => 1,
            'username' => $username,
            'password' => $password,
        );
        return $res;
    }

}
