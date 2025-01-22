<?php

namespace Database\Seeders;

use App\Models\Filters;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FiltersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Filters::create([
            'id' => 1,
            'type' => 'red color',
            'label' => '...',
        ]);
        Filters::create([
            'id' => 2,
            'type' => 'Black Color',
            'label' => '...',
        ]);
    }
}
