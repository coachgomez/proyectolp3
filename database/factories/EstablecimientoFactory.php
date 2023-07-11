<?php

namespace Database\Factories;

use App\Models\Establecimiento;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstablecimientoFactory extends Factory
{
    protected $model = Establecimiento::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->company,
            'direccion' => $this->faker->address,
            'Horario_atencion' => $this->faker->time,
            'tipo_negocio' => $this->faker->randomElement(['Restaurante', 'Hotel', 'Tienda']),
            'servicios_ofrecidos' => $this->faker->sentence,
        ];
    }
}
