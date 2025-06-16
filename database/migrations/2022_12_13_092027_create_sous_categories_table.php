<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSousCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sous_categories', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('libelle',100);
            $table->string('libelle_en',100);
            $table->string('slug',255);
            $table->integer('cat_id')->unsigned();
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
        Schema::dropIfExists('sous_categories');
    }
}
