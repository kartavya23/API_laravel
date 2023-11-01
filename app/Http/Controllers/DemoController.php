<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index(){
        $array = [
            [
                'name' => 'jhon does',
                'email' => 'jhon@gmail.com',
            ],
            [
                'name' => 'mark does',
                'email' => 'mark@gmail.com',
            ]
            ];
            return response()->json([
                'message' => '2 users not found',
                'data' => $array,
                'status' => true,
            ], 200);
    }
}
