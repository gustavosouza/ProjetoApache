@extends('master')

@section('conteudo')
 <div id="wrapper">

        @section('menu')
          <?php include(base_path('resources/views/menu.blade.php')); ?>
        @stop

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header">SysJur</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">


                  <div class="panel-body">
                    <div class="alert alert-info">
                        Bem Vindo(a) ao Sistema Jurídico da Empresa XPTO!
                    </div>
                  </div>

                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
@stop
