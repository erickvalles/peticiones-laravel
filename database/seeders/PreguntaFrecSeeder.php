<?php

namespace Database\Seeders;

use App\Models\PreguntaFrec;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PreguntaFrecSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PreguntaFrec::factory()->count(20)->create();
    }
}
