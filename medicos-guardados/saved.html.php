<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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

				<?php if (!empty($medicoguardados)): ?>
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
								
								<?php foreach ($medicoguardados as $save) :  ?>
								<tr>
								<td> <?=$save['nombre']?></td>
								<td> <?=$save['apellidos']?></td>
								<td> <?=$save['direccion']?></td>
								<td> <?=$save['telefono']?></td>
								<td> <?=$save['centroMedico']?></td>
								<td> <?=$save['especialidad']?></td>
								</tr>

								<?php endforeach; ?>

							</tbody>

					</table>
				<?php endif ?>
			</div>
		</div>
	</div>
</div>
</body>
</html>