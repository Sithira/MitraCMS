<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    public function login(Request $request)
    {

        $attempt = Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);

        if ($attempt)
        {
            $user = Auth::user();

            $success['token'] = $user->createToken('mitra')->accessToken;

            return response()->json(['status' => $success], 200);
        }
        else
        {
            return response()->json(['status' => 'UnAuthenticated'], 401);
        }

    }

    public function logout(Request $request)
    {

        $request->user()->token()->revoke();

        $json = [
            'status' => 'success',
            'message' => 'You are Logged out.',
        ];

        return response()->json($json, 200);

    }

    public function getDetails()
    {

        $user = Auth::user();

        return response()->json(['status' => 'success', 'data' =>  $user], 200);

    }
}
