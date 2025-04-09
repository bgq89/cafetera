function msgBienvenida() {
	var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange=function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("cabecera").innerHTML = this.responseText;
		}
	};
	xhttp.open("get","msgBienvenida.php",true);
	xhttp.send();
	return false;
}