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
        
     // Categoria::Factory(7)->create();
     $categoria= new Categoria;
     $categoria->nombre="Vivienda";
     $categoria->save();
     $categoria1= new Categoria;
     $categoria1->nombre="Politica";
     $categoria1->save();
     $categoria2= new Categoria;
     $categoria2->nombre="Servicios";
     $categoria2->save();
     $categoria3= new Categoria;
     $categoria3->nombre="Economia";
     $categoria3->save();
     $categoria4= new Categoria;
     $categoria4->nombre="Belleza";
     $categoria4->save();
     $categoria5= new Categoria;
     $categoria5->nombre="Education";
     $categoria5->save();
     $categoria6= new Categoria;
     $categoria6->nombre="Cultura";
     $categoria6->save();
     User::Factory(50)->create();
     Mensaje::Factory(50)->create();
    Team::Factory(25)->create();
    }
}
