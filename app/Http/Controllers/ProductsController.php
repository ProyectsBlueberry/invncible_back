<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function allproducts()
    {
        try {
            //code...
            $allproducts = Products::all();
            return response()->json($allproducts);

        } 
        catch (\Throwable $th) {
            //throw $th;
            return response()->json('Usuario no encontrado');
        }

    }
}
