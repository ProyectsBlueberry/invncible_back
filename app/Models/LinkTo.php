<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LinkTo extends Model
{
    protected $fillable = [
        'id_product',
        'id_product_ref',
        '',
    ] ;
    protected $table = 'link_to';

    public function ProductRef()
    {
        return $this->belongsTo(Products::class,'id_product_ref','id');
    }
    public function Product()
    {
        return $this->belongsTo(Products::class,'id_product','id');
    }
}
