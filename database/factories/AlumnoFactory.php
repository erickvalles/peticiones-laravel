<?php

namespace Database\Factories;

use App\Models\Alumno;
use App\Models\Carrera;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Alumno::class;

    public function definition()
    {
        $genero = $this->faker->randomElement(["H","M"]);
        return [
            "codigo"=>$this->faker->bothify('??-####'),
            "nombre"=>$this->faker->name(),
            "am"=>$this->faker->lastName(),
            "correo"=>$this->faker->safeEmail(),
            "ap"=>$this->faker->lastName(),
            "genero"=>$genero,
            "estatus"=>$this->faker->randomElement(["ACTIVO","INACTIVO","BAJA"]),
            "carrera_id"=>Carrera::all()->random()->id,
        ];
    }
}
