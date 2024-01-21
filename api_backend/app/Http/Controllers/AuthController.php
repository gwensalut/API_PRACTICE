<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(Request $request){
        $credentials = $request->only(['email','password']);
        if (Auth::attempt($credentials)){
            return response([
                'message'=>'Authentication Success',
                'token'=>Auth::user()->createToken('email')->plainTextToken
            ]);
        }else{
            return response([
                'message'=>'Authentication Failed'
            ],401);
        }
    }
}
