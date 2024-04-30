<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {


            /*
            Producto:
            Id – int - identity - Primary Key
            descripcion – varchar
            precio – double
            stock – int
            pagaIsv – boolean
            */ 

            $table->id();
            $table->string('descripcion');
            $table->double('precio');
            $table->integer('stock');
            $table->boolean('pagaisv');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}
