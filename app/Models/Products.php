<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'name',
        'sku',
        'filter_value',
        'storage_type',
        'status',
        '',
    ] ;
    protected $table = 'products';
    
    public function detail ()
    {
        return $this->hasOne(Details::class,'id_product','id');
    }
    public function link_to ()
    {
        return $this->hasMany(LinkTo::class,'id_product','id');
    }
    public function galleries ()
    {
        return $this->hasMany(Galleries::class,'id_product','id');
    }
    public function inventories ()
    {
        return $this->hasMany(Inventories::class, 'id_product','id');
    }
    public function characteristics ()
    {
        return $this->hasMany(Characteristics::class,'id_product','id');
    }
}
