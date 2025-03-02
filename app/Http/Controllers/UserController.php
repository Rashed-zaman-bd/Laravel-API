<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;

class UserController extends Controller
{
    function UserRegistration(Request $request){

        try {
            
            $name=$request->input('name');
            $email=$request->input('email');
            $password=$request->input('password');
            User::create([
                'name'=>$name,
                'email'=>$email,
                'password'=>$password
            ]);
            return response()->json([
                'status' => 'success',
                'message' => 'User Registration Successfully'
            ],200);
        }

        catch (Exception $e) {
            return response()->json(['status' => 'failed', 'message' => $e->getMessage()],200);
        }

    }


    function UserByID(Request $request){

        $id = $request->input('id');
        return User::where('id',$id)->first();
    }
}
