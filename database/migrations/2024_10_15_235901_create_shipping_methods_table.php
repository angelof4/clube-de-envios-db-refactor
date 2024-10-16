<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('shipping_methods', function (Blueprint $table) {
            $table->id(); // Cria a coluna 'id' com incremento automático
            $table->string('method_name'); // Cria a coluna 'method_name'
            $table->timestamps(); // Cria as colunas 'created_at' e 'updated_at'
        });
    }

    public function down()
    {
        Schema::dropIfExists('shipping_methods'); // Remove a tabela se a migration for revertida
    }
};
