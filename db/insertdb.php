<?php 

require_once 'connectdb.php';

try{
	$sql = "INSERT INTO `theDoctor`.`medicos` (`id`, `nombre`, `apellidos`, `direccion`, `telefono`, `centroMedico`, 
		`especialidad`, `medicoGuardado`, `fechaHora`) VALUES (NULL, '$nombre', '$apellidos', '$direccion', '$telefono','$centroMedico','$especialidad', '0', '0', CURRENT_TIMESTAMP)";
		

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$pdo->exec($sql);

}catch(PDOException $e){
		die("No se ha podido crear la tabla 'medicos':". $e->getMessage());
}