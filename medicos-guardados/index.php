<?php

require_once '.././db/connectdb.php';

try {

	$sql = 'SELECT * FROM medicos ';
	$ps = $pdo->prepare($sql);
	$ps->execute();

	while ($row = $ps->fetch(PDO::FETCH_ASSOC)) {

		$medicosguardados[] = $row;
		
	}
	
} catch (PDOException $e) {
	
	echo $e->getMessage();

}


require_once 'saved.html.php';


