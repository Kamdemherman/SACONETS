<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marques', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('raison_sociale',150)->nullable();
            $table->string('site',150)->nullable();
            $table->integer('service_id')->unsigned();
            $table->string('logo',150)->nullable();
            $table->foreign('service_id')->references('id')->on('telecoms')->onDelete('restrict');
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
        Schema::dropIfExists('marques');
    }
}
