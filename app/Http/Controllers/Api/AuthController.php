<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api',['except' => ['login','register']]);
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(),[
            'email'=>'required|email|min:3|max:60',
            'password'=>'required|string|min:4|max:60',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(),422);
        }
        if(! $token  = auth('api')->attempt($validator->validated()) ){
            return response()->json(['error'=>'unauthorized'],401);
        }
        // auth('api')
        return $this->createNewToken($token);
        // return $this->token_name;
    }
    public function logout(){
        auth('api')->logout();
        return response()->json(['message'=>'User Successfully Logout.']);
    }
    public function refresh(){
        return $this->createNewToken(auth('api')->refresh());
    }
    protected function createNewToken($token){
        return response()->json([
            'access_token'  => $token,
            'token_type'    => 'bearer',
            // 'expires_in'    => auth('api')->factory()->getTTL() * 60,
            'user'          => auth('api')->user(),
        ]);
    }
}
