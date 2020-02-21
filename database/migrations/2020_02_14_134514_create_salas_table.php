<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salas', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('nome')->nullable(); // nullable -> permite valor nulo padrão NULL
            $table->integer('ativo')->default(1)->comment('0 = desativado e 1 = ativado'); // default -> define valor inicial
            $table->integer('qtdAlunos')->nullable();

            $table->integer('projetor')->nullable(0); // nullable -> permite valor nulo mas o padrão será 0

            /** pega o ID do responsável pela sala*/
            $table->bigInteger('responsavel_id')->unsigned()->nullable();
            $table->foreign('responsavel_id')->references('id')->on('users');

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
        Schema::dropIfExists('salas');
    }
}
