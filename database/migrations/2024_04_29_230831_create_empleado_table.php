<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado', function (Blueprint $table) {


            $table->id('idprestamo');
            $table->string('nombre');
            $table->string('apellido');
            $table->timestamp('fechaingreso');
            $table->double('salario');

            /*
             Id préstamo – int
            nombre – varchar
            apellido – varchar
            fechaIngreso – date
            salario – double 
             
             
             */





        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleado');
    }
}
