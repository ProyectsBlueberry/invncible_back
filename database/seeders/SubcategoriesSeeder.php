<?php

namespace Database\Seeders;

use App\Models\Subcategories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubcategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

                //
        Subcategories::create([
            'id' => 1,
            'name' => 'Autos Usados',
            'status'=> 'Active',
            'id_category' => 1,
        ]);
        Subcategories::create([
            'id' => 2,
            'name' => 'Autos Seminuevos',
            'status'=> 'Active',
            'id_category' => 1,
        ]);
        Subcategories::create([
            'id' => 3,
            'name' => 'Autos nuevos',
            'status'=> 'Active',
            'id_category' => 1,
            
        ]);
        Subcategories::create([
            'id' => 4,
            'name' => 'Autos Deportivos',
            'status'=> 'Active',
            'id_category' => 1,
        ]);
        Subcategories::create([
            'id' => 5,
            'name' => 'Autos clasicos',
            'status'=> 'Active',
            'id_category' => 1,
        ]);
        Subcategories::create([
            'id' => 6,
            'name' => 'Despensa',
            'status'=> 'Active',
            'id_category' => 2,
        ]);
        Subcategories::create([
            'id' => 7,
            'name' => 'Bebidas Alcholicas',
            'status'=> 'Active',
            'id_category' => 2,
        ]);
        Subcategories::create([
            'id' => 8,
            'name' => 'Higiene y bellesa',
            'status'=> 'Active',
            'id_category' => 2,
        ]);
        Subcategories::create([
            'id' => 9,
            'name' => 'Farmacia',
            'status'=> 'Active',
            'id_category' => 2,
        ]);


    }
}
