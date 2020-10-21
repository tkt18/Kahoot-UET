<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
class AuthController extends Controller
{
    public function signup(Request $request){
        $validator = Validator::make($request->all(),[ 
            'organization' =>'required',
            'email' => 'required|email|unique:users', 
            'password' => 'required|min:6', 
            'name' => 'required',
            ]);
        if ($validator->fails()) { 
            return response()->json([
                'message'=>'Registration failed',
                'error'=>$validator->errors()], 401);            
        }
        $user = new User([
            'organization' => $request->organization,
            'email' => $request->email,
            'name' => $request->name,
            'password' => bcrypt($request->password) 
           
        ]);
        $user->save();
        return response()->json([

            'message'=> 'registered successfully'
        ],201);
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);
        $credentials = request(['email', 'password']);
        $remember = $request->input('remember_me');
        //dd($remember);
        if(!Auth::attempt($credentials,$remember))
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        $token->save();
        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            ],201);
    }
    public function logout(Request $request){
        $request->user()->token()->revoke();
        return response()->json([
            'message'=>'Successfully logged out!'
        ]);
    }
    public function uploadImage(Request $request)
        {
        $validator = Validator::make($request->all(), [
            'image' => 'required|image:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        if ($validator->fails()) {
            return response()->json([
                "message"=>"can not upload image",
                'error'=>$validator->errors()
            ],401);
        }
        $uploadFolder = 'users';
        $image = $request->file('image');
        $image_uploaded_path = $image->store($uploadFolder, 'public');
        $url = url('/storage/'.$image_uploaded_path);
        $user = $request->user();
        $user->avatar_url = $url;
        $user->save();
        return response()->json([
            "message" => "Image uploaded successfully",
            "image_url" =>$url
        ],201);
    }
    public function getUser(Request $request){
        return response()->json([
            Auth::user()
        ]);
    }
    public function rename(Request $request){
        $name = $request->input('name');
        $user = $request->user();
        $user->name = $name;
        $user->save();
        return response()->json([
            "renamed successfully"
        ],201);
    }
    public function getUser_id(Request $request){
        return response()->json([
            $request->user()->only('id')
        ],200);
    }
}
