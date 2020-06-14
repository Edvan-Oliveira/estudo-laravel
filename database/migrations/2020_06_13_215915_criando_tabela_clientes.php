<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriandoTabelaClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 20);
            $table->string('sobrenome', 20);
            $table->string('cpf', 14);
            $table->string('email', 30);
            $table->string('telefone', 16);
            $table->date('data_nascimento');
            $table->string('senha', 50); // 50 por causa do código hash
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
        Schema::dropIfExists('clientes');
    }
}
