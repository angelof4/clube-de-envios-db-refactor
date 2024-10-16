<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccessTokensTable extends Migration
{
    public function up()
    {
        Schema::create('access_tokens', function (Blueprint $table) {
            $table->id(); // Coluna ID
            $table->string('access_token'); // access_token
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // id_usuario relacionado à tabela users
            $table->integer('expires_in'); // expires_in
            $table->timestamps(); // created_at e updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('access_tokens');
    }
}

