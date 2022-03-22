<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome', 'dataNascimento', 'telefone', 'email', 'cpf', 'endereco'];
}
