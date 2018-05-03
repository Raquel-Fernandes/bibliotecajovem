<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requisitante extends Model
{
   protected $fillable = ['nome', 'email', 'telefone', 'celular'];
}
