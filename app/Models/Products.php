<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sku',
        'filter_value',
        'storage_type',
        'status',
        'id_filter',
        'id_subcategory'
    ];
    protected $table = 'products';

    //relation Belongsto subcategories
    public function subcategories()
    {
        return $this->BelongsTo(Subcategories::class, 'id_subcategory', 'id');
    }
    //relation to subcategories
    public function filters()
    {
        return $this->BelongsTo(Filters::class, 'id_filter', 'id');
    }
    
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
