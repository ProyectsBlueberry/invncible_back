<?php

namespace Database\Seeders;

use App\Models\Inventories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Inventories::create([
            'id' => 1,
            'id_product' => '2',
            'storage_mode' => '30Oz',
            'strip_id'=> '',
            'promotional_code'=> 'CodigoP',
            'stock'=> false,
        ]);
        Inventories::create([
            'id' => 2,
            'id_product' => '1',
            'storage_mode' => 'XL',
            'strip_id'=> '',
            'promotional_code'=> '',
            'stock'=> true,
        ]);
        Inventories::create([
            'id' => 3,
            'id_product' => '3',
            'storage_mode' => 'L',
            'strip_id'=> '',
            'promotional_code'=> 'CodigoP',
            'stock'=> true,
        ]);
        Inventories::create([
            'id' => 4,
            'id_product' => '4',
            'storage_mode' => 'S',
            'strip_id'=> '',
            'promotional_code'=> 'CodigoP',
            'stock'=> false,
        ]);
    }
}
