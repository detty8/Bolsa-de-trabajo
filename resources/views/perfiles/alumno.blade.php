@extends('layouts.app')

@section('content')
<div id="wrapper">
	<main>
		<div class="container contenido">
			<div class="row">
				<div class="Principal">
					<div class="imagen">
						<!--Foto de prefil-->
						<img src="/img/user.jpg">
					</div>

					<div class="datosPrincipales"> 
						<h1>Nombre y apellidos</h1><!--Aqui cargariamos el nombre y los apellidos del usuario Alumno-->
						<br/>
						<label>Domicilio: c/calle nº0 0 A</label>
						<br/>
						<label>Localidad: Localidad</label>
						<br/>
						<label>Email: email@gmail.com</label>
						<br/>
						<label>Telefono: 666666666</label>
						<br/><br/><br/><br/><br/><br/><br/>
					</div>

					<div class="ciclosCursados">
						<h2>Ciclos cursados:</h2>
						<!--Div en el que cargamos los ciclos que ha marcado el alumno como que los ha cursado-->
						<h3>Ciclo_x</h3>
						<label>Fecha finalizacion: 00/00/00</label>
						<br/>
						<label>Nota ciclo: 00</label>
						<br/>
						<label>Empresa de las FCT: empresa</label>
						<br/>
						<hr>
					</div>

					<div class="datosSecundarios">
						<!--Div de los idiomas, opcion de trabajar fuera y CV-->
						<span>Selecciona los idiomas con sus niveles</span><br/>
						<label>Idiomas:</label>
							<ul>
								<li>idioma1 nivel</li>
								<li>idioma2 nivel</li>
								<li>idioma3 nivel</li>
							</ul>
						<br/>
						<label>Valenciano : Si/No <!--Segun la opcion que tenga guardada aparecera si o no--></label>
						<label>Nivel: nivel</label>
						<br/>
						<label>Con opción a trabajar fuera: Si/No <!--Segun la opcion que tenga guardada aparecera si o no--></label>
						<br/>
						<label>Enlaza tu CV: enlaceCV</label>
						<br/>
					</div>
					<br/><br/><br/>	
				</div>
			</div>	
		</div>
	</main>
</div>	
@endsection		