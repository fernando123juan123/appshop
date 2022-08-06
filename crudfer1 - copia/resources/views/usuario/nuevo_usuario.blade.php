@extends('plantilla')
<div class="container">
	<div class="row">
	<h2>Formularios</h2>

		<div class="col-md-8">
			<div class="panel panel-success">
				<div class="panel-heading">
					<label>Formulario horizontal</label>
				</div>
				<div class="panel-body">
					<form action="{{ url('/guardarUsuario') }}" method="post" class="form-horizontal" role="form">
					@csrf
						<div class="form-group">
							<label class="control-label col-sm-3" for="pwd">NOMBRE:</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="nombre" id="pwd" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3" for="email">Correo electronico</label>
							<div class="col-sm-9">
								<input type="email" class="form-control" name="email" id="email" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<button type="submit" class="btn btn-success">GUARDAR DATOS</button>
								<a href="{{ url('/') }}" class="btn btn-success">SALIR</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>