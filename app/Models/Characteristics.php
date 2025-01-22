<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Characteristics extends Model
{
    protected $fillable = [
        'id_product',
        'title',
        'description',
        '',
    ] ;
    protected $table = 'characteristics';

    public function Product()
    {
        return $this->belongsTo(Products::class,'id_product','id');
    }
}
