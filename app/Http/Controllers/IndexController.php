<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
  public function inicia() {
    return view('index');
  }

  public function redirecionaAudiencia() {
    return view('/pages/redirecionamento/redaudiencia');
  }
}
