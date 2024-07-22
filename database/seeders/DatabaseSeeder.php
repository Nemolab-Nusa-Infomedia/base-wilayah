<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ProvinsiSeeder;
use Database\Seeders\KabupatenSeeder;
use Database\Seeders\KecamatanSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([ProvinsiSeeder::class, KabupatenSeeder::class, KecamatanSeeder::class]);
    }
}
