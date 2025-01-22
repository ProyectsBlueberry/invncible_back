<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;

class Service extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'name',    
    ];
    protected $table = 'service';

    //relation to categories 
    public function categories()
    {
        
        return $this->hasmany(Categories::class, 'id_service', 'id');
    }

}
