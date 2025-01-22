<?php

namespace Database\Seeders;

use App\Models\LinkTo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LinkToSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       LinkTo ::create([
            'id' => 1,
            'id_product' => '1',
            'id_product_ref' => '2',
        ]);
        LinkTo ::create([
            'id' => 2,
            'id_product' => '2',
            'id_product_ref' => '3',
        ]);
        LinkTo ::create([
            'id' => 3,
            'id_product' => '3',
            'id_product_ref' => '4',
        ]);
        LinkTo ::create([
            'id' => 4,
            'id_product' => '4',
            'id_product_ref' => '2',
        ]);
    }
}
