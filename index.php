<?php 
require_once 'app/info.php';
require_once 'db/connectdb.php';


if ( isset($_GET['addmedico']) ) {
	$nombre = htmlspecialchars($_POST['nombre'], ENT_QUOTES, 'UTF-8');
	$apellidos = htmlspecialchars($_POST['apellidos'], ENT_QUOTES, 'UTF-8');
	$direccion = htmlspecialchars($_POST['direccion'], ENT_QUOTES, 'UTF-8');
	$telefono = htmlspecialchars($_POST['telefono'], ENT_QUOTES, 'UTF-8');
	$centroMedico = htmlspecialchars($_POST['centroMedico'], ENT_QUOTES, 'UTF-8');
	$especialidad = htmlspecialchars($_POST['especialidad'], ENT_QUOTES, 'UTF-8');
	$errores = [];

	if ( $nombre == "" ) {
		$errores['nombre'] = 'Debes indicar un nombre.';
	}

	if( $apellidos == "" ) {
		$errores['apellidos'] = 'Debes indicar unos apellidos.';
	}

	if( $direccion == "" ) {
		$errores['direccion'] = 'Debes indicar una dirección.';
	}

	if( $telefono == "" ) {
		$errores['telefono'] = 'Debes indicar un teléfono.';
	}

	if( $centroMedico == "" ) {
		$errores['centroMedico'] = 'Debes indicar un centro médico.';
	}

	if( $especialidad == "" ) {
		$errores['especialidad'] = 'Debes indicar una especialidad.';
	}


	if ( empty($errores) ) {
		try{
			$sql = "INSERT INTO medicos (nombre,apellidos,direccion,telefono,centroMedico,especialidad) VALUES (:nombre,:apellidos,:direccion,:telefono,:centroMedico,:especialidad)";

			$ps = $pdo->prepare($sql);
			$ps->bindValue(':nombre', 		$nombre);
			$ps->bindValue(':apellidos',	$apellidos);
			$ps->bindValue(':direccion',	$direccion);
			$ps->bindValue(':telefono', 	$telefono);
			$ps->bindValue(':centroMedico', $centroMedico);
			$ps->bindValue(':especialidad', $especialidad);
			$ps->execute();

		}catch (PDOException $e){

			die("No se ha podido guardar los datos del médico en la base de datos:". $e->getMessage());
		}

		header("Location: .");
		exit();
	}
	
}



	$sql = 'SELECT * FROM medicos ';
	$ps = $pdo->prepare($sql);
	$ps->execute();

	while ($row = $ps->fetch(PDO::FETCH_ASSOC)) {
		$medico[] = $row;
	}




require_once 'view.html.php';