<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatureSpontaneesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidature_spontanees', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('name',150);
            $table->string('email',150);
            $table->string('ville',150);
            $table->string('adresse',150);
            $table->text('objet')->nullable();
            $table->string('cv',150)->nullable();
            $table->string('lettre',150)->nullable();
            $table->date('dates');
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
        Schema::dropIfExists('candidature_spontanees');
    }
}
