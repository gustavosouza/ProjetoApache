@extends('master')

@section('conteudo')
 <div id="wrapper">

        @section('menu')
          <?php include(base_path('resources/views/menu.blade.php')); ?>
        @stop

        <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header"></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                  <div class="panel panel-success panel-collapse">
                    <div class="panel-heading">
                        <i class="fa fa-user fa-fw"></i>Cliente salvo com sucesso!
                    </div>
                    <div class="panel-heading">
                        <a href="/Cliente/lista" class="btn btn-success">OK</a>
                    </div>
                  </div>
                </div>
            </div>
          </div>
@stop
