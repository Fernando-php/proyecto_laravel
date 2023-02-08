<?php

namespace Database\Factories;

use App\Models\Tema;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tema>
 */
class TemaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
 
    public function definition()
    {
        return [
            'titulo'=>$this->faker->randomElement(['Vivienda','Economia','Sociedad','Cultura','Deporte','Politica','Belleza','Novelas','Peliculas','Educacion,curso'])
        ];
    }
}
