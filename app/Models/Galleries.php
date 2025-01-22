<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galleries extends Model
{   
    
    protected $fillable = [
        'id_product',
        'type',
        'image',
        '',
    ] ;
    protected $table = 'galleries';

    public function Product()
    {
        return $this->belongsTo(Products::class,'id_product','id');
    }
}
