<?php

namespace Database\Factories;

use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empleado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cargo_id' => rand(1,5),
            'nombre' => $this->faker->name(),
            'apellidos' => $this->faker->lastname(),
            'dni' => rand(10000000, 99999999),
            'sexo' => 'M',
            'fecha_cont' => $this->faker->date(),
            'salario'=> rand(1000, 2000)
        ];
    }
}
