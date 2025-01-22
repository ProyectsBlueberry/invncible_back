<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    
    public function show( string $id)
    {
        try {
            $user = user::findOrfail($id);
            return response()->json($user);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json('Usuario no encontrado');
        }

    
    }
    public function CallMail(string $email)
    {
        try {
            //code...
            
            $mailCall = User::where('email', $email)->where('status', '!=', 'Inactive')->first();
            return response()->json($mailCall);

        } 
        catch (\Throwable $th) {
            //throw $th;
            return response()->json('Usuario no encontrado');
        }
    }
    public function allUsers()
    {
        try {
            //code...
            $alluser = User::all();
            return response()->json($alluser);

        } 
        catch (\Throwable $th) {
            //throw $th;
            return response()->json('Usuario no encontrado');
        }

    }

    public function mail()
    {
        try {
            
            $allmails = User::get('email');
            return response()->json($allmails);

        } 
        catch (\Throwable $th) {
            return response()->json('Usuario no encontrado');
            //throw $th;
        }

    }


}
