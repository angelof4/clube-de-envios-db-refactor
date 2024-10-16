<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShippingMethod extends Model
{

    // Caso a tabela tenha um nome diferente do pluralizado
    protected $table = 'shipping_methods';

    // Caso você tenha colunas que não são incrementais
    protected $fillable = ['method_name'];
}
