<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestisseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investisseurs', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('Raison_sociale',150);
            $table->string('email',150);
            $table->string('pays',150);
            $table->string('ville',150);
            $table->string('adresse',150);
            $table->string('phone',150);
            $table->text('motivation')->nullable();
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
        Schema::dropIfExists('investisseurs');
    }
}
