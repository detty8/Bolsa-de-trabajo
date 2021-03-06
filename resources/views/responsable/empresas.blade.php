@extends('layouts.app')

@section('content')

<div class="container contenido">
    <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
            <div class="col-xs-12 panel panel-default"> 
                <div class="col-xs-12  col-md-12  panel-heading" >
					<h1>Listado de empresas</h1>
				</div>
			</div>
			<div class="panel-body col-xs-12 col-md-10 col-md-offset-1 ">
				<div class="listado">

				 @foreach( $empresas as $empresa )
				<a href="/empresa/{{$empresa->email}}">
					<div class="empresa">

						<h2>{{$empresa->nombre}}</h2>

					</div>
				</a>
					@endforeach	
				</div>
				<br/>
				<a href="/" class="col-md-2 col-md-offset-5 botonDefecto"> Volver </a>
			</div>
		</div>
	</div>
</div>						
@endsection
