<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSavsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('savs', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('titre',150)->nullable();
            $table->string('titre_en',150)->nullable();
            $table->text('libelle')->nullable();
            $table->text('libelle_en')->nullable();
            $table->string('image',150)->nullable();
            
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
        Schema::dropIfExists('savs');
    }
}
