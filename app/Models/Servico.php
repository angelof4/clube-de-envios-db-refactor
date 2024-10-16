<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{

    // Especifica a conexão com o banco de dados legado
    protected $connection = 'old_mysql'; // Use o nome da sua conexão no .env

    // Nome da tabela no banco de dados legado
    protected $table = 'servicos'; // Nome da tabela existente

    protected $primaryKey = 'id';


}
