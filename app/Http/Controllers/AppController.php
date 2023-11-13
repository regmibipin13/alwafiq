<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function login(Request $request)
    {
        $sanitized = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('email', $sanitized['email'])->first();
        if ($user) {
            $token = $user->createToken('Alwafiq')->accessToken;
            return response()->json(['token' => $token, 'user' => $user], 200);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }
}
