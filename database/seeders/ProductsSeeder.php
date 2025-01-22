<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Products::create([
            'id' => 1,
            'name' => 'Explorer 2015',
            'id_filter' => 1,
            'id_subcategory' => 1,
            'sku'=> '..',
            'filter value'=> '..',
            'storage type'=> '..',
            'status'=> 'Active',
            
        ]);
        Products::create([
            'id' => 2,
            'name' => 'Camaro 2024',
            'id_filter' => 2,
            'id_subcategory' => 1,
            'sku'=> '..',
            'filter value'=> '..',
            'storage type'=> '..',
            'status'=> 'Active',
            
        ]);
    }
}
