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
            'data' => array(
                'avatar' => 'https://wpimg.wallstcn.com/f778738c-e4f8-4870-b634-56703b4acafe.gif',
                'introduction' => '我是超级管理员',
                'name' => 'Super Admin',
                'roles' => array('admin'),
                'token' => 'admin',
            ),
            'code' => 20000,
        );
        return $res;
    }

    public function info(Request $request)
    {
        $res = array(
            'data' => array(
                'avatar' => 'https://wpimg.wallstcn.com/f778738c-e4f8-4870-b634-56703b4acafe.gif',
                'introduction' => '我是超级管理员',
                'name' => 'Super Admin',
                'roles' => array('admin'),
                'token' => 'admin',
            ),
            'code' => 20000,
        );
        return $res;
    }

    public function logout(Request $request)
    {
        $res = array(
            'code' => 20000,
        );
        return $res;
    }

}
