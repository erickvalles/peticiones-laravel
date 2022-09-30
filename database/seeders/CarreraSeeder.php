<?php

namespace Database\Seeders;


use App\Models\Carrera;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Carrera::factory()->count(18)->create();
    }
}
