<?php

namespace Database\Factories;

use App\Models\Alumno;
use App\Models\Expediente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expediente>
 */
class ExpedienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Expediente::class;

    public function definition()
    {
        return [
            "ciclo_ingreso"=>$this->faker->randomElement(["2019B","2020A","2020B"]),
            "semestre"=>$this->faker->numberBetween(1,12),
            "prom_ingreso"=>$this->faker->randomFloat(2,60,100),
            "alumno_id"=>Alumno::inRandomOrder()->first()->id,
        ];
    }
}
