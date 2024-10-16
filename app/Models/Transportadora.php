<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transportadora extends Model
{
    // Defina o nome da tabela legado
    protected $table = 'transportadoras';

    // Defina os campos que podem ser preenchidos em massa
    protected $fillable = [
        'nm_transportadora',
    ];

    public $timestamps = false;

    protected $connection = 'old_mysql'; // Use o nome da sua conexão no .env

}
