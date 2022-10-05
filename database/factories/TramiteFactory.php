<?php

namespace Database\Factories;

use App\Models\Tramite;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tramite>
 */
class TramiteFactory extends Factory
{
    protected $model = Tramite::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition()
    {
        return [
            "nombre"=>$this->faker->word(),
            "notas"=>$this->faker->paragraph(1),
            "requisitos"=>$this->faker->paragraph()
        ];
    }
}
