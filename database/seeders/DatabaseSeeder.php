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
         \App\Models\Category::factory()->create(['name'=>'Tecnologia']);
         \App\Models\Category::factory()->create(['name'=>'Auto']);
         \App\Models\Category::factory()->create(['name'=>'Arredamento']);
         \App\Models\Category::factory()->create(['name'=>'Lavoro']);
         \App\Models\Category::factory()->create(['name'=>'Immobili']);
         \App\Models\Category::factory()->create(['name'=>'Musica']);
         \App\Models\Category::factory()->create(['name'=>'Accessori']);
         \App\Models\Category::factory()->create(['name'=>'Da collezione']);
         \App\Models\Category::factory()->create(['name'=>'Sport']);
         \App\Models\Category::factory()->create(['name'=>'Make-up']);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
