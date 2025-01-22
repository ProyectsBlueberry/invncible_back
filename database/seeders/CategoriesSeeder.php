<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Categories::create([
            'id' => 1,
            'name' => 'Vehiculos',
            'status'=> 'Active',
            'id_service' => 2,
        ]);
        Categories::create([
            'id' => 2,
            'name' => 'Supermercados',
            'status'=> 'Active',
            'id_service' => 1,
        ]);
        Categories::create([
            'id' => 3,
            'name' => 'Tecnologia',
            'status'=> 'Active',
            'id_service' => 1,
        ]);
        Categories::create([
            'id' => 4,
            'name' => 'Electrodomesticos',
            'status'=> 'Active',
            'id_service' => 1,
        ]);

    }
}
