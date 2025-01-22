<?php

namespace Database\Seeders;

use App\Models\Characteristics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharacteristicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Characteristics::create([
            'id' => 1,
            'id_product' => '1',
            'title' => 'Titulo1',
            'description'=> 'Descripcion1',
        ]);
        Characteristics::create([
            'id' => 2,
            'id_product' => '2',
            'title' => 'Titulo2',
            'description'=> 'Descripcion2',
        ]);
        Characteristics::create([
            'id' => 3,
            'id_product' => '3',
            'title' => 'Titulo3',
            'description'=> 'Descripcion3',
        ]);
        Characteristics::create([
            'id' => 4,
            'id_product' => '4',
            'title' => 'Titulo4',
            'description'=> 'Descripcion4',
        ]);
    }
}
