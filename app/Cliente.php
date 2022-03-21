<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PharIo\Manifest\Email;

class Cliente extends Model
{
    protected $fillable = ['nome', 'dataNascimento', 'telefone', 'email', 'cpf', 'endereco'];

}
