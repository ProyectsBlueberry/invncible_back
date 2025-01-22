<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategories;

class SubcategoriesController extends Controller
{
    public function allsubcategories()
    {
        try {
            //code...
            $allsubcategories = Subcategories::all();
            return response()->json($allsubcategories);

        } 
        catch (\Throwable $th) {
            //throw $th;
            return response()->json('Usuario no encontrado');
        }

    }
}
