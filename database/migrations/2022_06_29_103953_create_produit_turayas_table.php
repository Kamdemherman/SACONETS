<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitTurayasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produit_turayas', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('libelle',150);
            $table->string('libelle_en',150);
            $table->text('short')->nullable();
            $table->text('short_en')->nullable();
            $table->text('caracteristique')->nullable();
            $table->text('description')->nullable();
            $table->text('description_en')->nullable();
            $table->string('image',150)->nullable();
            $table->string('image2',150)->nullable();
            $table->string('image3',150)->nullable();

            $table->string('slug',255);

            $table->integer('cat_id')->unsigned();
            $table->string('cat_name',255);
            $table->foreign('cat_id')->references('id')->on('categorie_shops')->onDelete('restrict');

            $table->integer('sous_id')->unsigned();
            $table->string('sous_name',255);
            $table->foreign('sous_id')->references('id')->on('sous_categories')->onDelete('restrict');
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
        Schema::dropIfExists('produit_turayas');
    }
}
