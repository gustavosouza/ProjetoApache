<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use Validator;
use App\Cliente;
use App\Endereco;
use App\Http\Requests\ClienteValidator;

class ClienteController extends Controller
{

  public function detalhar($id) {
    $obj = Cliente::find($id);
    return view('/pages/cliente/edit')->with('obj', $obj);
  }

  public function salvar(ClienteValidator $validator) {
    $id = Request::input('id');
    $params = $validator->all();

      if($id > 0) {
        $obj = Cliente::find($id);
        $obj->nome = Request::input('nome');
        $obj->cpf = Request::input('cpf');
        $obj->rg = Request::input('rg');
        $obj->email = Request::input('email');
        $obj->telefone = Request::input('telefone');
        $obj->celular = Request::input('celular');
        $obj->data_atualizacao = 'now()';
      } else {
        $obj = new Cliente($params);
        $obj->data_cadastro = 'now()';
        $obj->data_atualizacao = 'now()';
      }

    $obj->save();
    return view('/pages/cliente/sucesso')->with('nome', $obj->nome);
  }

  public function lista() {
    $obj = Cliente::orderBy('nome')->get();
    return view('/pages/cliente/lista')->with(
    	array(
    		'lista' => $obj
    	)
    );
  }

  public function novo() {
    return view('/pages/cliente/novo');
  }

  public function editar($id) {
    $obj = Cliente::find($id);
    $obj->data_cadastro = date('d/m/Y - H:i:s', strtotime($obj->data_cadastro));
    $obj->data_atualizacao = date('d/m/Y - H:i:s', strtotime($obj->data_atualizacao));
    return view('/pages/cliente/edit')->with('obj', $obj);
  }

  public function excluir($id) {
    $obj = Cliente::find($id);
    $obj->delete();
    return redirect()->action('ClienteController@lista');
  }
}
