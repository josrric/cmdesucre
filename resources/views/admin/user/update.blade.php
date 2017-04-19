@extends('admin.plantilla.main')

@section('content')
	<div class="container">
		<div class="col-sm-10 col-sm-offset-2">
			<div class="page-header">
				<h3>Editando {{ $user->name }}</h3>
			</div>
			{!! Form::open(['route' => ['admin.users.update', $user], 'method' => 'PUT', 'class' => 'form-vertical']) !!}
				<div class="form-group">
					{!! Form::label('name','Nombre del Usuario') !!}
					{!! Form::text('name', $user->name, ['class'=>'form-control', 'placeholder'=>'Usuario','require'])!!}
				</div>
				<div class="form-group">
					{!! Form::label('password','Contraseña') !!}
					{!! Form::text('password', $user->password, ['class'=>'form-control', 'placeholder'=>'********************','require'])!!}
				</div>
				<div class="form-group">
					{!! Form::label('email','Email') !!}
					{!! Form::text('email', $user->email, ['class'=>'form-control', 'placeholder'=>'example@example.com','require'])!!}
				</div>
				<div class="form-group">
					{!! Form::label('type','Tipo de Usuario') !!}
					{!! Form::select('type', ['admin'=>'Administrador','miembro'=>'Miembro'], null, ['class'=>'form-control','require'])!!}
				</div>
				<br>
				<div class="form-group">
					<button type='submit' class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Actualizar</button>
					<a href="{{ route('admin.users.index')}}" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Cancelar</a>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
@endsection