<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Establecimiento;

class EstablecimientoSeeder extends Seeder
{
    public function run()
{
    Establecimiento::factory()->count(10)->create();
}

}

