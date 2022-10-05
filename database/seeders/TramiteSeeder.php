<?php

namespace Database\Seeders;

use App\Models\Tramite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TramiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tramite::factory()->count(5)->create();
    }
}
