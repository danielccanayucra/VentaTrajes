<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Client;
use App\Models\Suit;
use App\Models\Supplier;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(UserSeeder::class);
        Client::factory(50)->create();
        $this->call(CategorySeeder::class);
        Supplier::factory(10)->create();
        Suit::factory(20)->create();




    }
}
