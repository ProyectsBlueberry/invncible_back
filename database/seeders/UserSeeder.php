<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => 1,
            'name' => 'test user',
            'last_name' => 'admin',
            'status' => 'Inactive',
            'email' => 'test@gmail.com',
            'password' => Hash::make('pa$$w0rd'),
        ]);

        User::create([
            'id' => 2,
            'name' => 'Ignacio',
            'last_name' => 'Hernandez',
            'status' => 'Active',
            'email' => 'testting@gmail.com',
            'password' => Hash::make('12345'),
        ]);

        User::create([
            'id' => 3,
            'name' => 'Gilberto',
            'last_name' => 'Montes',
            'status' => 'Active',
            'email' => 'Gilbertomontes@gmail.com',
            'password' => Hash::make('12345'),
        ]);

        User::create([
            'id' => 4,
            'name' => 'Carlos',
            'last_name' => 'Hernandez',
            'status' => 'Inactive',
            'email' => 'CarlosEdu@gmail.com',
            'password' => Hash::make('12345'),
        ]);

        User::create([
            'id' => 5,
            'name' => 'Maria',
            'last_name' => 'Villela',
            'status' => 'Active',
            'email' => 'MaryVillela@gmail.com',
            'password' => Hash::make('12345'),
        ]);

        User::create([
            'id' => 6,
            'name' => 'Laura',
            'last_name' => 'Bozo',
            'status' => 'Active',
            'email' => 'LauraEnAmerica@gmail.com',
            'password' => Hash::make('12345'),
        ]);
    }
}