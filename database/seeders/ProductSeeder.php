<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Products::create([
            'id' => 1,
            'name' => 'Camisa',
            'sku' => '12345',
            'filter_value' => '#FFFFF',
            'storage_type' => 'size',
            'status' => 'active',
        ]);
        Products::create([
            'id' => 2,
            'name' => 'prework',
            'sku' => 'asdfg',
            'filter_value' => '#cherry',
            'storage_type' => 'gramos',
            'status' => 'inactive',
        ]);
        Products::create([
            'id' => 3,
            'name' => 'jogher',
            'sku' => 'ASDXC',
            'filter_value' => '#5ad85',
            'storage_type' => 'size',
            'status' => 'active',
        ]);
        Products::create([
            'id' => 4,
            'name' => 'sueter',
            'sku' => '98754',
            'filter_value' => '#456f4',
            'storage_type' => 'size',
            'status' => 'active',
        ]);
    }
}
