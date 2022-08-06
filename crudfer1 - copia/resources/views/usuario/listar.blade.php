@extends('plantilla')
<div class="container">
	<div class="row">
		<div class="col-xs-12">
		<h2 align="center">CRUD CON PHP-laravel</h2>
			<a href="{{ url('/nuevo') }}" class="btn btn-primary"> nuevo usuario</a>
			<a href="https://www.youtube.com/watch?v=F_9vyZHVdss&list=PLz8JVd0sHx7p32tjRwV_WFV1X0KoPFSv-&index=4" class="btn btn-primary"> VIDEO</a>
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Nº</th>
							<th>Nombres</th>
							<th>EMAIL</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php $con=1; foreach ($listar_usuario as $item) { ?>
						<tr>
							<td><?php echo $con++ ?></td>
							<td><?php echo $item->nombre ?></td>
							<td><?php echo $item->email ?></td>
							<td>
								<a href="<?php echo url('/editar',$item->id); ?>" class="btn btn-primary">editar</a>
								<button onclick="eliminar_usuario('<?php echo $item->id ?>')" class="btn btn-danger">eliminar</button>
							</td>
						</tr>
						<?php } ?>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
function eliminar_usuario(id){
	$.get("{{ url('/eliminar') }}", {id}, function() {
		window.location='';
	});
}
</script>