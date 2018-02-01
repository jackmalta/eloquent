<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    //Criando relação entre livro e editora
    public function editora()
    {
      return $this->belongsTo(Editora::class);
    }
}
