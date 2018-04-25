<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cadastro extends Model
{
    protected $fillable = ['nome', 'email', 'telefone', 'mesa', 'convite', 'sexo', 'calcado'];


}
