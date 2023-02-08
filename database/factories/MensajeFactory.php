<?php

namespace Database\Factories;
use App\Models\Mensaje;
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
    protected $model = Mensaje::class;
    public function definition()
    {
        return [
          'titulo'=>$this->faker->sentence(),
          'descripcion'=>$this->faker->paragraph()
        ];
    }
}
