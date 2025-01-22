<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategories extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'id_subcategory'
    ];

    protected $table = 'subcategories';
    //relation to subcategories to products
    public function products()
    {
        return $this->hasmany(Products::class, 'id_subcategory', 'id');
    }
    //relation return to categories
    public function categories()
    {

        return $this->belongsTo(Categories::class, 'id_category', 'id');
    }

}
