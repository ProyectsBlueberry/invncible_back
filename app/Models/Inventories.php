<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventories extends Model
{ 
    protected $fillable = [
        'id_product',
        'storage_mode',
        'strip_id',
        'promotional_code',
        'stock',
        '',
    ] ;
    protected $table = 'inventories';

    public function product()
    {
        return $this->belongsTo(Products::class,'id_producto','id');
    }
}
