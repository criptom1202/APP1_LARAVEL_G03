<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();//primary key
            $table->string('nombre', 50);
            $table->string('apellidos', 60);
            $table->string('dni', 8)->unique();
            $table->enum('sexo', ['M','F']);
            $table->date('fecha_cont');
            $table->decimal('salario', $precision = 8, $scale = 2);
            $table->timestamps();

            //php artisan migrate:rollback
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
