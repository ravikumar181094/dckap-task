<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends ResponseController
{
    public function login(LoginRequest $request)
    {
        $credentials = request(['email', 'password']);
        if(!Auth::attempt($credentials)){
            $error = "Invalid Email or Password";
            return $this->sendError($error, 401);
        }
        // Create Token
        $user = $request->user();
        $token =  $user->createToken('token')->accessToken;

        $data = User::where('email', $request->email)->first();
        $data['access_token'] = $token;
        return $this->sendResponse($data, 'Login Successfully', 200, 'send-data');
    }
}
