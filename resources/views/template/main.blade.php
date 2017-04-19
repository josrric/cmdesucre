<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Concejo Municipal de Sucre</title>

	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" >
	
</head>
<body>

	@include('template.partials.header')

	@include('template.partials.nav')
	<br>
	<div class="container">
		<section class="col-xs-8 col-sm-9 content">
	@yield('content')
		</section>
	@include('template.partials.aside')
	<div>

	@include('template.partials.footer')

	<script src="{{ asset('js/jquery/jquery.js') }}"></script>
	<script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
	<script>
		$(document).ready(function(){
		  $('.dropdown-submenu a.test').on("click", function(e){
		    $(this).next('ul').toggle();
		    e.stopPropagation();
		    e.preventDefault();
		  });
		});
		@yield('script')
	</script>
	
</body>
</html>

