<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Mensaje;
use App\Models\Team;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
      Categoria::Factory(7)->create();
      Mensaje::Factory(50)->create();
      User::Factory(50)->create();
      Team::Factory(25)->create();
    }
}
