<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    protected $fillable = [
        'id_product',
        'first_title',
        'second_title',
        'subtitle',
        'description',
        '',
    ] ;
    protected $table = 'details';

    public function Product()
    {
        return $this->belongsTo(Products::class,'id_product','id');
    }
}
