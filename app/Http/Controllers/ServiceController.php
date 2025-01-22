<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Categories;

class ServiceController extends Controller
{

    public function allservices( )
    {
        try {
            //code..
            $Servicesall = Service::first();
            $categories = $Servicesall->categories()->where('name','Vehiculos')->first();
            return response()->json($categories);

        } 
        catch (\Throwable $th) {
            //throw $th;
            return response()->json('Usuario no encontrado');
        }

    }

}
