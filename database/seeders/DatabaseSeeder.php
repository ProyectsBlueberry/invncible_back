<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(SubcategoriesSeeder::class);
        $this->call(FiltersSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(LinkToSeeder::class);
        $this->call(DetailsSeeder::class);
        $this->call(InventoriesSeeder::class);
        $this->call(GalleriesSeeder::class);
        $this->call(CharacteristicsSeeder::class);
    }
}
