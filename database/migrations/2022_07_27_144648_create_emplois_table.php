<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emplois', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('titre',150);
            $table->string('titre_en',150);
            $table->text('type')->nullable();
            $table->text('lieu')->nullable();
            $table->text('description')->nullable();
            $table->text('description_en')->nullable();
            $table->string('image',150)->nullable();
            $table->date('dates');
            $table->date('expire_date');
            $table->string('slug',255);
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
        Schema::dropIfExists('emplois');
    }
}
