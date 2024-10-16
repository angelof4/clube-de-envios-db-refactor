<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCarriersIdToShippingMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shipping_methods', function (Blueprint $table) {

            $table->unsignedBigInteger('carriers_id')->nullable()->after('id');


            $table->foreign('carriers_id')->references('id')->on('carriers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shipping_methods', function (Blueprint $table) {
            // Remove a chave estrangeira e a coluna
            $table->dropForeign(['carriers_id']);
            $table->dropColumn('carriers_id');
        });
    }
}

