<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VtexValores extends Model
{
    protected $connection = 'old_mysql'; // Use o nome da sua conexão no .env

    protected $fillable = [
        'peso_inicial',
        'peso_final',
        'valor',
        'cep_inicio',
        'cep_final',
        'transportadora_id', // Supondo que você tenha uma coluna que relaciona com transportadoras
    ];
}
