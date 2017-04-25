<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTBLVIDetalleFactura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('TBLVI_DetalleFactura', function (Blueprint $table) {
      	$table->integer('idFactura');
      	$table->string('descripcion',100);
      	$table->double('precio_unitario');
      	$table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('TBLVI_DetalleFactura');
    }
}
