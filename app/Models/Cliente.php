<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome', 'sobrenome', 'cpf', 'email', 'telefone', 'data_nascimento', 'senha'];
}
