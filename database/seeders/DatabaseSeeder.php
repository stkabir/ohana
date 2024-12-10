<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tarifa;
class DatabaseSeeder extends Seeder
{
    
    use WithoutModelEvents;
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ZonaSeeder::class,
            LugaresSeeders::class,
            UnidadesSeeders::class
        ]);
    }
}
