<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThurayaAccessoiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thuraya_accessoires', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('titre',250)->nullable();
            $table->string('titre_en',250)->nullable();
            $table->string('paragraphe',200)->nullable();
            $table->text('paragraphe_en')->nullable();
            $table->integer('prod_id')->unsigned();
            $table->string('image',250)->nullable();
            $table->foreign('prod_id')->references('id')->on('produit_turayas')->onDelete('restrict');
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
        Schema::dropIfExists('thuraya_accessoires');
    }
}
