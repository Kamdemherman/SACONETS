<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('titre',50);
            $table->string('titre_en',50);
            $table->string('description',200)->nullable();
            $table->string('description_en',200)->nullable();
            $table->integer('prix');
            $table->integer('ancien_prix')->nullable();
            $table->integer('qte_min');
            $table->date('dates');
            $table->integer('cat_id')->unsigned();
            $table->string('image',150);
            $table->string('slug',255);
            $table->integer('nb_like')->default(0);
            $table->foreign('cat_id')->references('id')->on('categorie_shops')->onDelete('restrict');
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
        Schema::dropIfExists('shops');
    }
}
