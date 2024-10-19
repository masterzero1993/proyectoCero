<?php
$para      = 'cumiquirdavid@gmail.com';
$titulo    = $_POST['nombre'];
$mensaje   = $_POST['mensaje'];
$cabeceras = 'From: laveronica_01@hotmail.com' . "\r\n" .
    'Reply-To: laveronica_01@hotmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);
?>
