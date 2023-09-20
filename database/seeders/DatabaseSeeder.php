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
        // \App\Models\User::factory(10)->create();

         \App\Models\DeliveryService::factory()->create([
             'name' => 'TransCompany',
             'path_name' => 'App\DeliveryServices\TransCompany',
         ]);
         \App\Models\DeliveryService::factory()->create([
             'name' => 'PackGroup',
             'path_name' => 'App\DeliveryServices\PackGroup',
         ]);
    }
}
