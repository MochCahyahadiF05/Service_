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
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'no_telepon' => ['required','min:11'],
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'no_telepon' => $request->no_telepon
        ]);
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'success'=>true,
            'data' => $user,
            'access_token' => $token,
            'token_type' => 'bearer'
        ]);
    }
    public function login(Request $request)
    {
        if(! Auth::attempt($request->only('email','password'))){
            return response()->json([
                'message' => 'Unauthorized'
            ],400);
        }
        
        // $user = User::where('email',$request->email)->firstOrFail();
        $user = User::where('email',$request->email)->first();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'success'=>true,
            'message' => 'Login success',
            'access_token' => $token,
            'token_type' => 'Bearer'
        ]);
    }
    public function logout()
    {
        Auth::user()->tokens()->delete();
        return response()->json([
            'success' => true,
            'message' => 'logout success'
        ]);
    }
}
