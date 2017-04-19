<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Administrador - CMS</title>

	<link rel="stylesheet" href="{{ asset ('bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset ('css/styleamd.css') }}">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-9 col-sm-3 centered">
				<h2 class="text-center"><strong>ADMINISTRADOR</strong></h2>
				<form action="{{ route ('acceso') }}" method="get">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Usuario">
						<input type="text" class="form-control" placeholder="Contraseña">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success btn-block">ACCEDER</button>
					</div>
				</form>
				<hr>
			</div>
		</div>
	</div>

	
	<script src="{{ asset('bootstrap/js/jquery.js') }}"></script>
	<script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>