<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filters extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'label',
    ];
    protected $table = 'filters';

    //relation to subcategories to products
    public function products()
    {
        return $this->hasmany(Products::class, 'id_filter', 'id');
    }
    
}
