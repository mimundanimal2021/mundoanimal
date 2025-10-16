<?php

$destino="mariomaiolo58@gmail.com";
$Nombre= $_POST["Nombre"];
$Apellido= $_POST["Apellido"];
$Correo= $_POST["Correo"];
$Telefono= $_POST["Telefono"];
$mensaje= $_POST["mensaje"];
$contenido= "Nombre:" . $nombre ."\nApellido: ". $Apellido ."\nCorreo:" .$Correo. "\nTelefono:" . $Telefono "\nmensaje:" . $mensaje;
mail($destino,"contacto", $contenido );
header("Location: gracias.html");
?>