<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Validator;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /* Login Api */
    public function login(Request $request)
    {
        $status = 401;
        $response = ['error' => 'Unauthorized'];

        if (Auth::attempt($request->only(['name', 'password']) , true)) {
            $status = 200;
            $response = [
                'user' => Auth::user(),
                'token' => Auth::user()->createToken('userToken')->accessToken,
                ];


            return view('admin.home');
                
        }

        return response()->json($status , $response);    
    }

    /* Register Api */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'password' => 'required|min:6',
            'c_password' => 'required|same:password',
            ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $data = $request->only(['name','password']);
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);    
        response()->json([
            'user' => $user,
            'token' => $user->createToken('userToken')->accessToken,
            ]);
        return view('admin.home');
    }

    public function userarea()
    {
        
        return view('user.userarea');
    }

}
