<?php
$destino = "cumiquirdavid@gmail.com";
$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$telefono = $_POST['tel'];
$mensaje = $_POST['mensaje'];

$contenido = "nombre: " .$nombre . "\nCorreo: " . $correo . "\ntelefono: " . $telefono . "\nMensaje: " .$mensaje;
mail($destino,"Contacto", $contenido);
header("location:index.html");
?>