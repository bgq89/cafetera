<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>uCafetera</title>
	<script src="./js/scripts.js"></script>
	<link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
	
	<!-- CABECERA -->
	<div class="cabecera">
		<span id="cabecera"> <!-- [Buenos d�as / Buenas tardes / Buenas noches], hoy es XX/XX/XXXX - hh:mm --> </span>
	</div>
	<!-- /CABECERA -->
	
	<!-- MENSAJES -->
	<div class="mensajes">
		
		<img src="./img/cup.png" id="tazacafe" height="32" width="32">
		<span id="mensaje"> <?php if (isset($_SESSION["mensaje"])) echo $_SESSION["mensaje"] ; ?> <!-- Aqu� aparecer�n los mensajes de estado... --> </span>
		<img src="./img/cup.png" id="tazacafe" height="32" width="32">
		
	</div>
	<!-- /MENSAJES -->
	
	<!-- MENU -->
	<form action="index.php" method="get">
	<div class="contenedor-grid" id="menu">
		<!-- CONTADORES -->
		<div class="elemento-grid">
			<input type="text" id="cafe" name="cafe" size="1" value="0" readonly>
		</div>
		<div class="elemento-grid">
			<input type="text" id="leche" name="leche" size="1" value="0" readonly>
		</div>

		<div class="elemento-grid">
			No: <input type="radio" id="aguano" name="agua" value="0" checked onclick="return false;"> S&iacute;:<input type="radio" id="aguasi" name="agua" value="1" onclick="return false;">
		</div>
		<div class="elemento-grid">
			No: <input type="radio" id="limonno" name="limon" value="0" checked onclick="return false;"> S&iacute;:<input type="radio" id="limonsi" name="limon" value="1" onclick="return false;">
		</div>
		<div class="elemento-grid">
			No: <input type="radio" id="alcoholno" name="alcohol" value="0" checked onclick="return false;"> S&iacute;:<input type="radio" id="alcoholsi" name="alcohol" value="1" onclick="return false;">
		</div>
		<!-- /CONTADORES -->
		<!-- BOTONES -->
		<div class="elemento-grid">
			<img name="aniadecafe" src="./img/granos.png" alt="A�adir caf�" onclick="aniade('cafe');" height="64" width="64">
		</div>
		<div class="elemento-grid">
			<img name="aniadeleche" src="./img/leche.png" alt="A�adir leche" onclick="aniade('leche');" height="64" width="64">
		</div>
		<div class="elemento-grid">
			<img name="aniadeagua" src="./img/agua.png" alt="A�adir agua" onclick="aniade('agua');" height="64" width="64">
		</div>
		<div class="elemento-grid">
			<img name="aniadelimon" src="./img/limon.png" alt="A�adir lim�n" onclick="aniade('limon');" height="64" width="64">
		</div>
		<div class="elemento-grid">
			<img name="aniadealcohol" src="./img/alcohol.png" alt="A�adir alcohol" onclick="aniade('alcohol');" height="64" width="64">
		</div>
		<div class="elemento-grid" id="dpreparar">
			<input type="submit" name="preparar" id="preparar"  value="s" style="display:none;">
			<input src="./img/preparar.png" alt="Preparar caf�" type="image" height="64" width="64" onclick="document.getElementById('preparar').click()">
		</div>
		<div class="elemento-grid" id="dreponer">
			<input type="submit" name="reponer" id="reponer" value="s" style="display:none;">
			<input src="./img/recargar.png" alt="Reponer cafetera" type="image" height="64" width="64" onclick="document.getElementById('reponer').click()">
		</div>
		<div class="elemento-grid" id="dborrar">
			<input type="submit" type="reset" id="borrar" value="s" style="display:none;">
			<img src="./img/borrar.png" alt="Borrar selecci�n" type="image" height="64" width="64" onclick="document.getElementById('borrar').click()">
		</div>
		<!-- /BOTONES -->
	</div>
	</form>
	<!-- /MENU -->
	
	<!-- PIE -->
	<!-- <div class="pie">
		<img src="./img/cafetera.png" id="cafetera" alt="cafetera" width="300" height="350">
	</div> -->
	<!-- /PIE -->
	
	<script src="./js/ajax.js"></script>
	<script>
		msgBienvenida();		
		setInterval(msgBienvenida,60000);
		<?php if (isset($_SESSION["desvanece"])) echo $_SESSION["desvanece"]; ?>
	</script>
</body>
</html>