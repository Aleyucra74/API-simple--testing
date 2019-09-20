<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //
    protected $table = 'produtos';
    //campos preenchiveis
    protected $fillable = ['nome', 'descricao', 'valor', 'url_imagem'];
}
