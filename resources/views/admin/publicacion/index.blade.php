@extends('admin.plantilla.main')

@section('content')
	<div class="container">
		<div class="col-sm-10 col-sm-offset-2">
			<div class="page-header">
				<h3>Publicaciones</h3>
			</div>
			<div class="table-responsive">
				<table class="table table-striped table-hover"">
					<thead>
						<th>Titulo</th>
						<th>Acciones</th>
					</thead>
					<tbody >
						@foreach($publicacion as $publicacion)
						<tr>
							<td>{{ $publicacion->titulo }}</td>
							<td>
								<a href="" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span> Editar</a> 
								<a href="" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Eliminar</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="row">
				
				{!! $publicacion->render() !!}
					
				<a href="{{ route('admin.users.create')}}" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus"></span> Registrar </a>
			</div>
		</div>
	</div>
@endsection