<?php

namespace Database\Seeders;

use App\Models\Details;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Details::create([
            'id' => 1,
            'id_product' => '1',
            'first_title' => 'primertitulo1',
            'second_title' => 'segundotitulo1',
            'subtitle' => 'subtitulo1',
            'description' => 'descripcion1',
        ]);
        Details::create([
            'id' => 2,
            'id_product' => '2',
            'first_title' => 'primertitulo2',
            'second_title' => 'segundotitulo2',
            'subtitle' => 'subtitulo2',
            'description' => 'descripcion2',
        ]);
        Details::create([
            'id' => 3,
            'id_product' => '3',
            'first_title' => 'primertitulo3',
            'second_title' => 'segundotitulo3',
            'subtitle' => 'subtitulo3',
            'description' => 'descripcion3',
        ]);
        Details::create([
            'id' => 4,
            'id_product' => '4',
            'first_title' => 'primertitulo4',
            'second_title' => 'segundotitulo4',
            'subtitle' => 'subtitulo4',
            'description' => 'descripcion4',
        ]);
    }
}
