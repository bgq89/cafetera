<?php

class Controlador {

    public static function reponer() {
        Modelo::reponer();
    }

    public static function comprobarCafe() {
        Modelo::cafe();
    }

    public static function prepararCafe() {
        
    }


}

// Aquí voy controlando todas las situaciones

// Se ha pulsado el botón preparar
if (isset($_GET["preparar"])) {
	if (($_GET["cafe"]+$_GET["leche"]+$_GET["agua"]+$_GET["limon"]+$_GET["alcohol"])>3) {
		$_SESSION["mensaje"] = "Se ha excedido el número de unidades del café";
		$_SESSION["desvanece"]= "desvanece(5)";
	} elseif ($_GET['cafe'] == 1 && $_GET['leche'] == 0 && $_GET['agua'] == false && $_GET['limon'] == false && $_GET['alcohol'] == false) {
        $cafe = comprobarCafe();
        if ($cafe >= 1) {
            $_SESSION['mensaje'] = "Ha pedido un Espresso";
            $_SESSION['desvanece'] = "desvanece(5)";
            $cafe -= 1;
            Modelo::quitarCafe($cafe); 
        }
    }
	
}
// Se ha pulsado el botón reponer
elseif (isset($_GET["reponer"])) {
	Controlador::reponer();
    $_SESSION["mensaje"] = "Se han repuesto todos los ingredientes de la máquina";
	$_SESSION["desvanece"]= "desvanece(10); ";
}

else {
	$_SESSION["mensaje"] = "no pasan cosas";
    $_SESSION['desvanece'] = "desvanece(5)";
}

// El switch para gestionar los cafés

// print_r($_GET);
?>