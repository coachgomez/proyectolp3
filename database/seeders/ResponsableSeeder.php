<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Responsable;

class ResponsableSeeder extends Seeder
{
    public function run()
    {
        Responsable::factory()->count(10)->create();
    }
}
