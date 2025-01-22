<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesController extends Controller
{
    public function allcategories()
    {
        try {
            //code...
            $allcategories = Categories::all();
            return response()->json($allcategories);

        } 
        catch (\Throwable $th) {
            //throw $th;
            return response()->json('Usuario no encontrado');
        }

    }
}
