<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //
    public function register (request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required'

        ]);
         if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'succes' => true,
            'data' => $user,
            'access_token' => $token,
            'token_type' => 'Bearer'
        ]);
    }
    public function login(Request $request){
        if(! Auth::attempt($request->only('email','password'))) {
            return response()->json([
               'succes' => false,
                'message' => 'Unauthorized'
            ], 401);
        }

        $user = User::where('email', $request->email)->first();
        $token = $user->createToken('auth_token')->plainTextToken;

         return response()->json([
            'succes' => true,
            'message' => 'Login succes',
            'access_token' => $token,
            'token_type' => 'Bearer'
        ]);

    }
    public function logout(){

        Auth::user()->tokens()->delete();
        return response()->json([
        'succes' => true,
        'message' => 'logout success'
        ]);
    }
}

// "succes": true,
//     "data": {
//         "name": "rafeyfa",
//         "email": "rafeyfa@gmail.com",
//         "updated_at": "2023-01-19T10:06:12.000000Z",
//         "created_at": "2023-01-19T10:06:12.000000Z",
//         "id": 3
//     },
//     "access_token": "1|9E8AdFmotPObi1xT1aESwfwN1yDgBKzNCEYiAfiY",
//     "token_type": "Bearer"
// }
