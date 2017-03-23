@extends('master')

@section('conteudo')
 <div id="wrapper">

   @section('menu')
     <?php include(base_path('resources/views/menu.blade.php')); ?>
   @stop

        <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Novo Cliente</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                  <div class="panel panel-default panel-collapse">
                    <div class="panel-body">
                        <form class="form-horizontal" action="/Cliente/salvar" method="POST">

                          <input type="hidden" value="{{csrf_token()}}" name="_token">
                          <input type="hidden" name="data_cadastro">
                          <input type="hidden" name="data_atualizacao">

                          <div class="form-group">
                              <label class="col-md-2 control-label">Nome:</label>
                              <div class="col-md-8"><input class="form-control" name="nome" placeholder="Nome"></div>
                          </div>

                          <div class="form-group">
                              <label class="col-md-2 control-label">Email:</label>
                              <div class="col-md-8"><input class="form-control" name="email" placeholder="Email"></div>
                          </div>

                          <div class="form-group">
                              <label class="col-md-2 control-label">CPF:</label>
                              <div class="col-md-8"><input class="form-control cpf" name="cpf" placeholder="CPF"></div>
                          </div>

                          <div class="form-group">
                              <label class="col-md-2 control-label">RG:</label>
                              <div class="col-md-8"><input class="form-control rg" name="rg" placeholder="RG"></div>
                          </div>

                          <div class="form-group">
                              <label class="col-md-2 control-label">Telefone:</label>
                              <div class="col-md-8"><input class="form-control telefone" name="telefone" placeholder="Telefone"></div>
                          </div>

                          <div class="form-group">
                              <label class="col-md-2 control-label">Celular:</label>
                              <div class="col-md-8"><input class="form-control celular" name="celular" placeholder="Celular"></div>
                          </div>

                          <div class="form-group">
                            <label class="col-md-2 control-label"></label>
                            <div class="col-md-3"><button class="btn btn-md btn-primary btn-block" type="submit">Salvar</button></div>
                            <div class="col-md-3 "><a href="/Cliente/lista" class="btn btn-md btn-danger btn-block">Cancelar</a></div>
                          </div>
                        </form>
                      </div>
                  </div>
                </div>
            </div>

          </div>
          <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
@stop
