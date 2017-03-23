@extends('master')

@section('conteudo')
 <div id="wrapper">

   @section('menu')
     <?php include(base_path('resources/views/menu.blade.php')); ?>
   @stop

        <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Editar Cliente</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                  <form class="form-horizontal" action="/Cliente/salvar" method="POST">
                    <input type="hidden" value="{{csrf_token()}}" name="_token">
                    <input type="hidden" value="{{$obj->id}}" name="id">

                    <div class="form-group">
                      <label class="col-md-2 control-label">Data Cadastro:</label>
                      <div class="col-md-3"><input type="text" class="form-control datahora" name="data_cadastro" value="{{$obj->data_cadastro}}" disabled></div>
                      <label class="col-md-2 control-label">Data Atualização:</label>
                      <div class="col-md-3"><input type="text" class="form-control datahora" name="data_atualizacao" value="{{$obj->data_atualizacao}}" disabled></div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Nome:</label>
                        <div class="col-md-8"><input class="form-control" name="nome" value="{{$obj->nome}}"></div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Email:</label>
                        <div class="col-md-8"><input class="form-control" name="email" value="{{$obj->email}}"></div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">CPF:</label>
                        <div class="col-md-8"><input class="form-control cpf" name="cpf" value="{{$obj->cpf}}"></div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">RG:</label>
                        <div class="col-md-8"><input class="form-control rg" name="rg" value="{{$obj->rg}}"></div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Telefone:</label>
                        <div class="col-md-8"><input class="form-control telefone" name="telefone" value="{{$obj->telefone}}"></div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Celular:</label>
                        <div class="col-md-8"><input class="form-control celular" name="celular" value="{{$obj->celular}}"></div>
                    </div>

                      <div class="panel panel-collapse">
                          <div class="panel-heading">
                              <i class="fa fa-tag fa-fw"></i> Endere�o(s)
                              <hr/>
                              <a href="/Endereco/novo/{{$obj->id}}"><i class="btn btn-success btn-sm fa fa-plus navbar-right"></i></a>
                          </div>

                          <div class="panel-body">
                              <div class="table-responsive">
                                  <table class="table table-striped table-bordered table-hover">
                                      <thead>
                                          <tr>
                                              <th>Rua</th>
                                              <th>CEP</th>
                                              <th>Bairro</th>
                                              <th style="width:15%;"></th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($obj->endereco as $item)
                                          <tr>
                                              <td>{{$item->rua}}</td>
                                              <td>{{$item->cep}}</td>
                                              <td>{{$item->bairro}}</td>
                                              <td align="center">
                                                  <a href="/Endereco/editar/{{$item->id}}" class="btn btn-primary btn-sm"><i class="fa fa-gear"></i></a>
                                                  <a href="/Endereco/excluir/{{$item->id}}" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                                              </td>
                                          </tr>
                                        @endforeach
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>

                    <div class="form-group">
                      <label class="col-md-2 control-label"></label>
                      <div class="col-md-3"><button class="btn btn-md btn-primary btn-block" type="submit">Salvar</button></div>
                      <div class="col-md-3 "><a href="/Cliente/lista" class="btn btn-md btn-danger btn-block">Cancelar</a></div>
                    </div>
                </div>
            </div>

          </div>
          <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
@stop
