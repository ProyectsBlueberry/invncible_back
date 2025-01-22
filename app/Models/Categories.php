<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subcategories;

class Categories extends Model
{
    
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'id_service'

    ];
    protected $table = 'categories';

    public function subcategories()
    {
        return $this->hasOne(Subcategories::class, 'id_subcategory', 'id');
    }
    
    public function service()
    {

        return $this->belongsTo(Service::class, 'id_service', 'id');
    }
}
