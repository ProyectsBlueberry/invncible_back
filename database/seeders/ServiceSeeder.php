<?php

namespace Database\Seeders;


use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'id' => 1,
            'name' => 'Tienda en linea',
        ]);
        Service::create([
            'id' => 2,
            'name' => 'Tienda Fisica',
        ]);
    }
}
