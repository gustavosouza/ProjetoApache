@extends('master')

@section('conteudo')
 <div id="wrapper">

        @section('menu')
          <?php include(base_path('resources/views/menu.blade.php')); ?>
        @stop
      <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Clientes</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info panel-collapse">
                        <div class="panel-heading">
                            <i class="fa fa-user fa-fw"></i> (<?= count($lista); ?>)
                            <a href="/Cliente/novo"><i class="btn btn-success btn-sm fa fa-plus navbar-right"></i></a>
                        </div>

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>CPF</th>
                                            <th>Telefone</th>
                                            <th>Celular</th>
                                            <th style="width:15%;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($lista as $item)
                                        <tr>
                                            <td>{{$item->nome}}</td>
                                            <td>{{$item->cpf}}</td>
                                            <td>{{$item->telefone}}</td>
                                            <td>{{$item->celular}}</td>
                                            <td align="center">
                                                <a href="/Cliente/detalhar/{{$item->id}}" class="btn btn-primary btn-sm"><i class="fa fa-search"></i></a>
                                                <a href="/Cliente/editar/{{$item->id}}" class="btn btn-primary btn-sm"><i class="fa fa-gear"></i></a>
                                                <a href="/Cliente/excluir/{{$item->id}}" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                      @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
@stop
