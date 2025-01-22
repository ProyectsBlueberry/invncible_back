<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filters;

class FiltersController extends Controller
{
    
    public function allfilters()
    {
        try {
            //code...
            $allfilters = Filters::all();
            return response()->json($allfilters);

        } 
        catch (\Throwable $th) {
            //throw $th;
            return response()->json('Usuario no encontrado');
        }

    }
}
