<?php  

// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$telefono = $_POST['tel'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "laveronica_01@hotmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:index.html');

?>
