<?php 
	$nombre = $_POST['nombre'];
	$remitente = $_POST["email"];
	$mensaje_completo =  "De: " . $nombre . " (" . $remitente. "). Texto: " . $_POST["texto"];
	$exito = mail("nmpiovanoo@hotmail.com", $remitente, $mensaje_completo);


	if ($exito) { 
		header("location: confirmacionMail.php");
	} else {
		echo "Error NOT FOUND 404";
	}

 ?>
