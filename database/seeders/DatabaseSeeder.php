<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET FOREIGN_KEY_CHECKS = 0;");
        DB::table('categoria')->truncate();
        DB::table('carrera')->truncate();
        DB::table('preguntas_frec')->truncate();
        DB::table('expediente')->truncate();
        DB::table('alumno')->truncate();
        DB::statement("SET FOREIGN_KEY_CHECKS = 1;");

        $this->call([
            CategoriaSeeder::class,
            CarreraSeeder::class,
            PreguntaFrecSeeder::class,
            AlumnoSeeder::class,
        ]);
    }
}
