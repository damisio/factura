<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTBLMfactura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('TBLMAfactura', function (Blueprint $table) {
      	$table->increments('idFactura');
      	$table->string('descripcion',100);
      	$table->integer('precio');
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
        Schema::drop('TBLMfactura');
    }
}
