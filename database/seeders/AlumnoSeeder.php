<?php

namespace Database\Seeders;

use App\Models\Alumno;
use App\Models\Expediente;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alumno::factory()
            ->has(
                Expediente::factory()->count(1))
                ->count(200)->create();
    }
}
