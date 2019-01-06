<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AuthAdmins;
use Illuminate\Http\Request;

class AuthAdminsController extends Controller
{

    public function index(Request $request)
    {
        $dataList = AuthAdmins::where('status', 1)->get();
        $res = array(
            'data' => array(
                'items' => $dataList,
                'total' => 1,
            ),
            'code' => 20000,
        );
        return $res;
    }

}
