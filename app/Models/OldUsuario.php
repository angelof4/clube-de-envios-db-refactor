<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OldUsuario extends Model
{
    protected $connection = 'old_base'; // Conexão com o banco de dados antigo
    protected $table = 'usuarios';      // Nome da tabela antiga

    // Definir os campos que a model pode manipular
    protected $fillable = ['id', 'nome', 'login', 'senha'];

    public $timestamps = false; // Se a tabela não tiver campos de timestamps (created_at, updated_at)
}

