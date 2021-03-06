<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfertasIdiomasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofertasIdiomas', function (Blueprint $table) {
            $table->integer('oferta')->references('id')->on('ofertas');
            $table->string('idioma',45)->references('idioma')->on('idiomas');
            $table->primary(['oferta','idioma']);
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
        Schema::dropIfExists('ofertasIdiomas');
    }
}
