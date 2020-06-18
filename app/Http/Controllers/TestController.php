<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function controllerMethod(){
        // return view ('welcome');
        return response()->json([
            'msg'=>'only returns json'
        ]);
    }

    public function test(){
        // return view ('welcome');
        return response()->json([
            'msg'=>'some random error message'
        ], 422);
    }
}
