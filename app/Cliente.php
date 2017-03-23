<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
  protected $table = 'cliente';
  public $timestamps = false;
  protected $fillable = array('nome','email','cpf','rg','telefone','celular');

  public function endereco() {
    return $this->hasMany('App\Endereco');
  }
  
}
