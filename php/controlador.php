<?php

class Controlador {

    public static function reponer() {
        Modelo::reponer();
        $_SESSION["mensaje"] = "Se han repuesto todos los ingredientes de la máquina";
	    $_SESSION["desvanece"]= "desvanece(10); ";
    }

    public static function prepararCafe() {
        
    }





}

// Aquí voy controlando todas las situaciones

// Se ha pulsado el botón preparar
if (isset($_POST["preparar"])) {
	if (($_GET["cafe"]+$_POST["leche"]+$_POST["agua"]+$_POST["limon"]+$_POST["alcohol"])>3) {
		$_SESSION["mensaje"] = "Se ha excedido el número de unidades del café";
		$_SESSION["desvanece"]= "desvanece(5)";
	} elseif ($_POST['cafe'] == 1 && $_POST['leche'] == 0 && $_POST['agua'] == false && $_POST['limon'] == false && $_POST['alcohol'] == false) {
        $cafe = Modelo::cafe();
        /* if ($cafe >= 1) { */
            $_SESSION['mensaje'] = "Ha pedido un Espresso";
            $_SESSION['desvanece'] = "desvanece(5)";
            $cafe -= 1;
            Modelo::quitarCafe($cafe); 
        /* } */
    }
	
}
// Se ha pulsado el botón reponer
elseif (isset($_POST["reponer"]))  {
	Controlador::reponer();
}

else {
    Vista::mostrarCafetera();
	$_SESSION["mensaje"] = "no pasan cosas";
    $_SESSION['desvanece'] = "desvanece(5)";
}




?>