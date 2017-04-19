@extends('admin.plantilla.main')

@section('content')
	<section class="container">
		<div class="col-sm-10 col-sm-offset-2">
			<div class="page-header">
				<h3>Modificar Publicacion</h3>
			</div>
			{!! Form::open(['route' => ['admin.publicaciones.update', $public], 'method' => 'PUT', 'files' => true, 'class' => 'form-horizontal']) !!}
				<div class="form-group">
					{!! Form::label('titulo','Titulo')!!}
					{!! Form::text('titulo', $public->titulo, ['class' => 'form-control', 'placeholder' => 'Titulo', 'require'])!!}
				</div>
				<div class="form-group">
					{!! Form::label('categoria','Categoria')!!}
					{!! Form::select('categoria_id', $categoria, null, ['class' => 'form-control','placeholder' => 'Seleccione una Categoria'])!!}
				</div>
				<div class="form-group">
					{!! Form::label('contenido','Contenido')!!}
					{!! Form::textarea('contenido', $public->contenido, ['class' => 'form-control', 'placeholder' => 'Contenido', 'require'])!!}
				</div>
				<div class="form-group">
					{!! Form::label('imagen','Imagen')!!}
					{!! Form::file('imagen')!!}
				</div>
				<br>
				<div class="form-group">
					{!! Form::submit('Modificar',['class' => 'btn btn-success'])!!}
				</div>
			{!! Form::close() !!}
			
		</div>
	</section>
@endsection