<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurriculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome',100);
            $table->string('nome_mae', 100);
            $table->string('nome_pai', 100);
            $table->string('cpf', 20);
            $table->dateTime('date_nascimento');
            $table->string('telefone', 20);
            $table->string('cep', 20);
            $table->string('cidade', 50);
            $table->string('bairro', 50);
            $table->string('logradouro', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curriculos');
    }
}
