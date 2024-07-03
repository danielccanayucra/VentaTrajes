<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        User::create([
            'name'=>'Humberto Ccollqque Hanccoccallo',
            'email'=>'christopher@gmail.com',
            'password'=>bcrypt('123456789')
        ]);
        User::create([
            'name'=>'Josué Daniel Ccana Yucra',
            'email'=>'daniel@gmail.com',
            'password'=>bcrypt('123456789')
        ]);
        User::create([
            'name'=>'José Armando Mamani Poccohuanca',
            'email'=>'jose@gmail.com',
            'password'=>bcrypt('123456789')
        ]);
        User::create([
            'name'=>'Mijael Yurin Coaquira Justo',
            'email'=>'mijael@gmail.com',
            'password'=>bcrypt('123456789')
        ]);

    }
}

