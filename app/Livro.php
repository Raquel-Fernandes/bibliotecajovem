<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
   protected $fillable = ['autor', 'titulo', 'editora', 'origem', 'disponivel'];
}
