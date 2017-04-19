<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Panel Administrador - CMS</title>

	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('css/styleamdacc.css') }}">
</head>
<body>
	@include('admin.plantilla.partials.nav')
	<div class="col-sm-10 col-sm-offset-2">
		@include('flash::message')
	</div>
	@yield('content')
	
	<script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>