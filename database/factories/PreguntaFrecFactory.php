<?php

namespace Database\Factories;

use App\Models\Carrera;
use App\Models\Categoria;
use App\Models\PreguntaFrec;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PreguntaFrec>
 */
class PreguntaFrecFactory extends Factory
{
    protected $model = PreguntaFrec::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "pregunta"=>$this->faker->sentence(5),
            "respuesta"=>$this->faker->sentence(10),
            "categoria_id"=>Categoria::all()->random()->id,
            "carrera_id"=>Carrera::all()->random()->id,
        ];
    }
}
