<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccessToken extends Model
{

    // Defina a tabela associada, se necessário
    protected $table = 'access_tokens';

    // Defina os campos que podem ser preenchidos em massa
    protected $fillable = [
        'access_token',
        'user_id',
        'expires_in',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
