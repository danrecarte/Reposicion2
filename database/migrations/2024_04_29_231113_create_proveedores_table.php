<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {


            $table->id('idproveedor');
            $table->string('nombre');
            $table->timestamp('fecharegistro');
            $table->string('telefono');
            $table->string('correo');


            /*
            Proveedores
            Id proveedor – int
            nombre – varchar
            fechaRegistro – date
            teléfono – varchar
            correo - varchar
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
        Schema::dropIfExists('proveedores');
    }
}
