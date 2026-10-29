<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->enum('categoria', [ 'racoes', 'medicamentos', 'brinquedos', 'acessorios' , 'higiene']);
            $table->string('marca');
            $table->string('descricao');
            $table->decimal('preco_custo', 6, 2);
            $table->decimal('preco_venda', 6, 2);
            $table->bigInteger('quantidade_disponivel');
            $table->bigInteger('estoque_minimo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
