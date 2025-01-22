<?php

namespace Database\Seeders;

use App\Models\Galleries;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GalleriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Galleries::create([
            'id' => 1,
            'id_product' => '1',
            'type' => 'main',
            'image'=> 'imagen1',
        ]);
        Galleries::create([
            'id' => 2,
            'id_product' => '2',
            'type' => 'gallery',
            'image'=> 'imagen2',
        ]);
        Galleries::create([
            'id' => 3,
            'id_product' => '3',
            'type' => 'gallery',
            'image'=> 'imagen3',
        ]);
        Galleries::create([
            'id' => 4,
            'id_product' => '4',
            'type' => 'main',
            'image'=> 'imagen4',
        ]);
    }
}
