<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBackupJsonToVtexShippingRatesTable extends Migration
{
    public function up()
    {
        Schema::table('vtex_shipping_rates', function (Blueprint $table) {
            $table->text('backup_json')->nullable(); // Coluna para armazenar o backup em JSON
        });
    }

    public function down()
    {
        Schema::table('vtex_shipping_rates', function (Blueprint $table) {
            $table->dropColumn('backup_json'); // Remove a coluna ao reverter a migração
        });
    }
}

