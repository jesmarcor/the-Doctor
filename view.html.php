<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>The Doctor</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css">
	<style>
		h1 a:hover {
			text-decoration: none;
		}
		.listicon {
			text-align: right;
			width: 20px;
		}
		.listiconbutton {
			margin: 0px;
			padding: 0px;
		}
		.orderbutton {
			display: inline-block;
		}
		.orderbutton button {
			margin: 0px;
			padding: 6px 10px;
		}
		.orderbuttons {
			margin-top: 25px;
		}

		.footer {
			text-align: right;
		}
	</style>
</head>
<body>
		<div class="container">
			<div class="row">
				<div class="col-lg-offset-3 col-lg-6">
					<div class="row">
						<div class="col-lg-8">
							<h1><a href="<?=$base_url?>">Médicos</a></h1>
						</div>
						
						<?php if (!empty($medico)): ?>
	

						<table class="table table-stripped">
							
							<thead>
								<th>Nombre</th>
								<th>Apellidos</th>
								<th>Dirección</th>
								<th>Teléfono</th>
								<th>Centro Médico</th>
								<th>Especialidad</th>
							</thead>

							<tbody>
								
								<?php foreach ($medico as $me) :  ?>
								
								<th> <?=$me['nombre']?></th>
								<th> <?=$me['apellidos']?></th>
								<th> <?=$me['direccion']?></th>
								<th> <?=$me['telefono']?></th>
								<th> <?=$me['centroMedico']?></th>
								<th> <?=$me['especialidad']?></th>
								<tr></tr>
								<?php endforeach; ?>

							</tbody>

						</table>

						<?php endif ?>

						<form action="?addmedico" method="POST">

							<div class="form-group col-xs-12 col-lg-8">
					   			<input type="text" class="form-control col-lg-8" name="nombre" placeholder="Introducir Nombre" value="<?php if (isset($nombre)) echo $nombre; ?>">
					   		</div>
							<div class="form-group col-xs-12 col-lg-8">
					    		<input type="text" class="form-control col-lg-8" name="apellidos" placeholder="Introducir Apellidos" value="<?php if (isset($apellidos)) echo $apellidos; ?>">
							</div>
							<div class="form-group col-xs-12 col-lg-8">
						    	<input type="text" class="form-control col-lg-8" name="direccion" placeholder="Introducir Dirección" value="<?php if (isset($direccion)) echo $direccion; ?>">
							</div>
							<div class="form-group col-xs-12 col-lg-8">
						    	<input type="text" class="form-control col-lg-8" name="telefono" placeholder="Introducir Telefóno" value="<?php if (isset($telefono)) echo $telefono; ?>">
							</div>
							<div class="form-group col-xs-12 col-lg-8">
						    	<input type="text" class="form-control col-lg-8" name="centroMedico" placeholder="Introducir Centro Médico" value="<?php if (isset($centroMedico)) echo $centroMedico; ?>">
							</div>
							<div class="form-group col-xs-12 col-lg-8">
						    	<input type="text" class="form-control col-lg-8" name="especialidad" placeholder="Introducir Especialidad" value="<?php if (isset($especialidad)) echo $especialidad; ?>">
							</div>
							<div class="form-group col-xs-12 col-lg-8">
								<button type="submit" class="btn btn-primary">Guardar</button>
							</div>

						</form>

							<a href="<?=$base_url?>/medicos-guardados" role="button">Ver Medicos</a>
							
					</div>
				</div>
			</div>
		</div>			
</body>
</html>