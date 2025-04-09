<?php
	$mensaje="";
	if (date("H") >= 21) {
		$mensaje.="Buenas noches, hoy es ";
	}
	else if (date("H") >= 13) {
		$mensaje.="Buenas tardes, hoy es ";
	}
	else {
		$mensaje.="Buenos días, hoy es ";
	};

	echo $mensaje.date("d/m/Y - H:i");
?>