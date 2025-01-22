<?php

namespace App\Http\Controllers;
 
use App\Models\User;

 
class UserController extends Controller
{
    public function ShowSerchbyID(string $id)
    {
        
        try {
            $user = User::findOrFail($id);
        return response()->json($user);
        } catch (\Throwable $th) {
            return response()->json('Usuario no Encontrado');
        }
    }
    public function ShowSerchActived()
    {
        $Status = User::where('status', 'active')->get();
       return response()->json($Status);
    }
    
    public function ShowSerchEmail($email)
    {
         $user =  User::where('email', $email)->first();
         return response()->json($user);
    }
       
}