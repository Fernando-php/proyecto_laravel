<?php

namespace Database\Factories;

use App\Models\Mensaje;
use App\Models\Categoria;
use App\Models\User;
use illuminate\Support\str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mensaje>
 */
class MensajeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Mensaje::class;
    public function definition()
    {
        return [
            'titulo'=>$this->faker->sentence(),
            'descripcion'=>$this->faker->paragraph(),
            'categoria_id'=>Categoria::inRandomOrder()->first()->id,
            'user_id'=>User::inRandomOrder()->first()->id,
        ];
    }
}
