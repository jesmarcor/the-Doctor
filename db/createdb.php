<?php
require_once(dirname(dirname(__FILE__)).'/app/info.php');
require_once(__ROOT__.'/db/connectdb.php'); 

try{
	$sql = "CREATE TABLE medicos (
		id				INT AUTO_INCREMENT PRIMARY KEY,
		nombre			VARCHAR(20) NOT NULL,
		apellidos		VARCHAR(20) NOT NULL,
		direccion		VARCHAR(50) NOT NULL,
		telefono		INT 		 NOT NULL,
		centroMedico	VARCHAR(30) NOT NULL,
		especialidad	VARCHAR(30) NOT NULL,
		createdate		TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
		donedate		TIMESTAMP NULL DEFAULT NULL,
		deletedate		TIMESTAMP NULL DEFAULT NULL
	) DEFAULT CHARACTER SET UTF8 ENGINE=InnoDB";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$pdo->exec($sql);

}catch(PDOException $e){
		die("No se ha podido crear la tabla 'medicos':". $e->getMessage());
}