<?php

class Controlador {

    public static function reponer() {
        Modelo::reponer();
    }

    public static function comprobarCafe() {
        Modelo::cafe();
    }


}



// Se ha pulsado el botón preparar
if (isset($_GET["preparar"])) {
	if (($_GET["cafe"]+$_GET["leche"]+$_GET["agua"]+$_GET["limon"]+$_GET["alcohol"])>3) {
		$_SESSION["mensaje"] = "Se ha excedido el número de unidades del café";
		$_SESSION["desvanece"]= "desvanece(5); ";
	} elseif ($_GET['cafe'] == 1) {
        $cafe = 
    }
	
}
// Se ha pulsado el botón reponer
else if (isset($_GET["reponer"])) {
	Controlador::reponer();
    $_SESSION["mensaje"] = "Se han repuesto todos los ingredientes de la máquina";
	$_SESSION["desvanece"]= "desvanece(10); ";
}

else {
	$_SESSION = null;
}

// El switch para gestionar los cafés

print_r($_GET);
?>