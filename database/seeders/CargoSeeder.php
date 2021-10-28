<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cargo;


class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cargo = new Cargo();
        $cargo->cargo = "Administrador";
        $cargo->descripcion = "Descripción de administrador";
        $cargo->save();


         $cargo = Cargo::create([
            'cargo' => "Supervisor",
            'descripcion' => "Descripción de supervisor",
        ]);



    }
}
