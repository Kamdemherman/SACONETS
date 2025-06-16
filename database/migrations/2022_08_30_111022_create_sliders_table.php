<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('titre',250)->nullable();
            $table->string('titre_en',250)->nullable();
            $table->string('paragraphe',200)->nullable();
            $table->text('paragraphe_en')->nullable();
            $table->text('lien')->nullable();
            $table->string('video',100);
            $table->string('image',100);
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
        Schema::dropIfExists('sliders');
    }
}
