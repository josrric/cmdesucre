<nav class="row">
	<div class="container dropdown">
		<ul class="nav nav-pills nav-justified">
			<li>
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Inf. Institucional</a>
				<ul class="dropdown-menu">
					<li><a href="{{ route ('inf.institucional.historia') }}">Historia</a></li>
					<li><a href="{{ route ('inf.institucional.misionyvision') }}">Misión y visión</a></li>
					<li><a href="{{ route ('inf.institucional.objetivos') }}">Objetivos</a></li>
				</ul>
			</li>
			<li>
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Comisiones Permanentes</a>
				<ul class="dropdown-menu">
					<li class="dropdown-submenu">
						<a class="test" href="#">Permanentes</a>
						<ul class="dropdown-menu">
							<li><a href="{{ route('contraloria.presupuesto')}}">Contraloría, Presupuesto</a></li>
							<li><a href="{{ route('asuntoslegislativos')}}">Asuntos Legislativos</a></li>
							<li><a href="{{ route('transporte.vialidad')}}">Transporte, viabilidad y Comunicaciones</a></li>
							<li><a href="{{ route('ejido.terreno')}}">Ejido, Terreno Municipales</a></li>
							<li><a href="{{ route('arquitectura.urbanismo')}}">Arquitectura, Urbanismo y Construcción</a></li>
							<li><a href="{{ route('serviciospublicos.salud')}}">Servicios Públicos, Salud y Ambiente</a></li>
							<li><a href="{{ route('participacioncomunitaria')}}">Participación Comunitaria</a></li>
							<li><a href="{{ route('infraestructura.educacion')}}">Infraestructura Educación y Cultura</a></li>
							<li><a href="{{ route('deporte.recreacion')}}">Deporte, Recreación y Turismo</a></li>
						</ul>
					</li>
					<li><a href="{{ route('ordinaria.especial')}}">Ordinaria y especial</a></li>
				</ul>
			</li>
			<li><a href="#">Ordenanzas</a></li>
			<!--<li>
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Servicios</a>
				<ul class="dropdown-menu">
					<li><a href="#">Horarios</a></li>
					<li><a href="#">Enlaces web</a></li>
				</ul>
			</li>-->
			<li><a href="#">Noticias y Eventos</a></li>
		</ul>	
	</div>
</nav>