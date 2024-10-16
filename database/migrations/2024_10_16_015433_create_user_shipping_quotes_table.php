<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserShippingQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_shipping_quotes', function (Blueprint $table) {
            $table->id(); // Chave primária
            $table->decimal('quote_value', 10, 2); // Valor da cotação
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Chave estrangeira para usuários
            $table->foreignId('shipping_method_id')->constrained()->onDelete('cascade'); // Chave estrangeira para métodos de envio
            $table->timestamps(); // Created_at e Updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_shipping_quotes');
    }
}
