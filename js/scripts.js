// Recibe el botón pulsado por el usuario para variar los ingredientes del café
function aniade(x) {
	if (x == "cafe") {
		if (document.getElementById("cafe").value == 3) {
			document.getElementById("cafe").value=0;
		}
		else {
			document.getElementById("cafe").value++;
		}
	}

	else if (x == "leche") {
		if (document.getElementById("leche").value == 3) {
			document.getElementById("leche").value=0;
		}
		else {
			document.getElementById("leche").value++;
		}
	}

	else if (x == "agua") {
		if (document.getElementById("aguasi").checked == true) {
			document.getElementById("aguasi").checked=false;
			document.getElementById("aguano").checked=true;
		}
		else {
			document.getElementById("aguasi").checked=true;
			document.getElementById("aguano").checked=false;
		}
	}

	else if (x == "limon") {
		if (document.getElementById("limonsi").checked == true) {
			document.getElementById("limonsi").checked=false;
			document.getElementById("limonno").checked=true;
		}
		else {
			document.getElementById("limonsi").checked=true;
			document.getElementById("limonno").checked=false;
		}
	}

	else if (x == "alcohol") {
		if (document.getElementById("alcoholsi").checked == true) {
			document.getElementById("alcoholsi").checked=false;
			document.getElementById("alcoholno").checked=true;
		}
		else {
			document.getElementById("alcoholsi").checked=true;
			document.getElementById("alcoholno").checked=false;
		}
	}

	else {
		alert ("¡Se ha producido un error en el interfaz de la aplicación!");
	}
}

// Recibe el tiempo en segundos para que los mensajes de la cafetera desaparezcan
function desvanece(segundos) {
	setTimeout(function() {document.getElementById("mensaje").innerHTML = "";}, segundos*1000);
}
