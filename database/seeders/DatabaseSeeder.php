<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\PlantSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Use factories for multiple users
        User::factory(10)->create();

        // Seed plants
        $this->call([
            PlantSeeder::class,
        ]);
    }
}

