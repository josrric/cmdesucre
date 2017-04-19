@extends('admin.plantilla.main')

@section('content')
	<div class="container">
		<div class="col-sm-10 col-sm-offset-2">
			<div class="page-header">
				<h3>Noticias</h3>
			</div>
			<div class="table-responsive">
				<table class="table table-striped table-hover"">
					<thead>
						<th>Titulo</th>
						<th>Fecha</th>
						<th>Acciones</th>
					</thead>
					<tbody >
						@foreach($public as $p)
						<tr>
							<td>{{ $p->titulo }}</td>
							<td>{{ $p->created_at }}</td>
							<td>
								<a href="{{ route('admin.publicaciones.edit', $p->id) }}" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"> Modificar</span></a> 
								<a href="{{ route('admin.publicaciones.destroy', $p->id) }}" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"> Eliminar</span></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="row">
				 
				 {{ $public->render() }}
				<br>
				<a href="{{ route('admin.publicaciones.create')}}" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus"></span> Agregar Publicacion </a>
			</div>
		</div>
	</div>
@endsection