<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropostasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propostas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->bigInteger('edital_id')->unsigned();
            $table->foreign('edital_id')->references('id')->on('editais');
            $table->integer('status')->comment('1 = Enviado/Aguardando avaliação; 2 = Aprovado; 3 = Reprovado');
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
        Schema::dropIfExists('propostas');
    }
}
