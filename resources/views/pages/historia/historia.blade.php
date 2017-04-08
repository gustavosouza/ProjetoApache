@extends('master')

@section('conteudo')

		@section('menu')
			<?php include(base_path('resources/views/menu.blade.php')); ?>
		@stop
		
		
			<div class="row">
				<div class="col-md-12">
	            	<div class="page-header">
						<h2>História</h2>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<p>Lorem Ipsum</p>
					<p>Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum</p>
					<p>Lorem IpsumLorem IpsumLorem IpsumLorem Ipsum</p>
					<p>Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum</p>
					<p>Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum</p>
				</div>
			</div>
                
            
		@section('footer')
			<?php include(base_path('resources/views/footer.blade.php')); ?>
		@stop
@stop
