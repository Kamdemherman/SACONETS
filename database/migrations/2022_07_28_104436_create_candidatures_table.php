<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidatures', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('name',150);
            $table->string('email',150);
            $table->string('ville',150);
            $table->string('adresse',150);
            $table->text('motivation')->nullable();
            $table->string('cv',150)->nullable();
            $table->string('lettre',150)->nullable();
            $table->integer('emploi_id')->unsigned();
            $table->date('dates');
            $table->foreign('emploi_id')->references('id')->on('emplois')->onDelete('restrict');
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
        Schema::dropIfExists('candidatures');
    }
}
