@extends('admin.plantilla.main')

@section('content')
	<div class="container">
		<div class="col-sm-10 col-sm-offset-2">
			<div class="page-header">
				<h3>Lista de Usuarios</h3>
			</div>
			<div class="table-responsive">
				<table class="table table-striped table-hover"">
					<thead>
						<th>Nombre</th>
						<th>Correo</th>
						<th>Tipo</th>
						<th>Acciones</th>
					</thead>
					<tbody >
						@foreach($users as $u)
						<tr>
							<td>{{ $u->name }}</td>
							<td>{{ $u->email}}</td>
							<td>{{ $u->type }}</td>
							<td>
								<a href="{{ route('admin.users.edit', $u->id) }}" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span> Editar</a> 
								<a href="{{ route('admin.users.destroy', $u->id) }}" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Eliminar</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="row">
				
				{!! $users->render() !!}
					
				<a href="{{ route('admin.users.create')}}" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus"></span> Registrar </a>
			</div>
		</div>
	</div>
@endsection