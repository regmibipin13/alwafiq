<?php

namespace App\Http\Controllers;

use App\Models\Admin\Driver;
use App\Models\AssetObject;
use App\Models\Reading;
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
            return response()->json(['token' => $token, 'data' => $user], 200);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

    public function objects(Request $request)
    {
        $sanitized = $request->validate(['user_id' => 'required']);
        $user = User::find($sanitized['user_id']);
        $objects = AssetObject::where('rider_id', $user->driver->id)->orderBy('id', 'desc')->paginate(20);
        return response()->json(['data' => $objects], 200);
    }

    public function objectShow(Request $request)
    {
        $sanitized = $request->validate(['object_id' => 'required']);
        $object = AssetObject::find($sanitized['object_id']);
        return response()->json(['data' => $object], 200);
    }

    public function objectReadings(Request $request)
    {
        $sanitized = $request->validate(['object_id' => 'required']);
        $readings = Reading::where('object_id', $sanitized['object_id'])->orderBy('id', 'desc')->paginate(20);
        return response()->json(['data' => $readings], 200);
    }
}
