<div class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">
					<img src="" alt="Brand">
				</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="./index.php">Salir</a></li>
			</ul>
			
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-3 col-md-2 sidebar">
						<ul class="nav nav-sidebar">
							<li class="active">
								<a href="{{ route('admin.users.index') }}">Usuarios</a>
							</li>
							<li class="">
								<a href="{{ route('admin.publicaciones.index') }}">Noticia</a>
							</li>
							<li class="">
								<a href="#">Ordenanza</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>