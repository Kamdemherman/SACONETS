<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommendesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commendes', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('payment_intent_id',200)->unique();
            $table->integer('montant');
            $table->datetime('payment_created_at');
            $table->text('produits');
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('commendes');
    }
}
