<?php

namespace App\Http\Controllers;

use App\Models\Inventories;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function ShowProducts()
    {
        
         $all_products = Products::get(['id', 'name']);
         return response()->json( $all_products);
        
    } 
    public function DetailsProducts(Request $request)
    {
        try {
            $detailsproduct = Products::first();
            $details_p= $detailsproduct->detail()->get();
        return response()->json($details_p);
        } catch (\Throwable $th) {
            return response()->json('Detalles del Producto no encontrado'); 
        }
    }
    public function InventoriesProducts(Request $request)
    {
        try {
            $inventoriesproduct = Products::first();
            $inventories_p= $inventoriesproduct->inventories()->where('stock', true)->get();
        return response()->json($inventories_p);
        } catch (\Throwable $th) {
            return response()->json('El producto no se encontro en el inventario');
        }
    }
    public function GalleriesProducts(Request $request)
    {
        try {
            $galleriesproduct = Products::get();
            $galleries_p= $galleriesproduct->galleries()->where('type','main')->get();
        return response()->json($galleries_p);
        } catch (\Throwable $th) {
            return response()->json('El producto no se encontro en la galeria como main');
        }
    }

}
