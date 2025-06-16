<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nouses', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('libelle',150);
            $table->string('libelle_en',150);
            $table->text('description')->nullable();
            $table->text('description_en')->nullable();
            $table->string('image',150)->nullable();
            $table->string('image2',150)->nullable();
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
        Schema::dropIfExists('nouses');
    }
}
