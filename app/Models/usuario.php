<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{

    protected $fillable = [
        'nome',
        'cpf',
        'senha',
        'telefone',
        'data_nascimento'
        ];
    /*use HasFactory;*/
}
