<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThurayaDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thuraya_documents', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('video',100)->nullable();
            $table->string('titre',100);
            $table->string('titre_en',100);
            $table->string('document',100)->nullable();
            $table->string('document_en',100)->nullable();
            $table->integer('prod_id')->unsigned();
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
        Schema::dropIfExists('thuraya_documents');
    }
}
