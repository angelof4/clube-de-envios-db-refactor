<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVtexShippingRatesTable extends Migration
{
    public function up()
    {
        Schema::create('vtex_shipping_rates', function (Blueprint $table) {
            $table->id(); // id
            $table->foreignId('shipping_method_id')->constrained('shipping_methods')->onDelete('cascade'); // id_serviço
            $table->integer('delivery_time'); // prazo_entrega
            $table->decimal('initial_weight', 8, 2); // peso_inicial
            $table->decimal('final_weight', 8, 2); // peso_final
            $table->decimal('value', 10, 2); // valor
            $table->string('start_zipcode'); // cep_inicio
            $table->string('end_zipcode'); // cep_final
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vtex_shipping_rates');
    }
}
