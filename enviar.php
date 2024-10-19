<html>
    <head>
        <meta charset="UTF-8">
        <?php
        
        //llamo a name=email y name=pass con $_POST, desingnandole una variable $email/$password 
        //para poder utilizarlo.
        $nombre=$_POST['nombre'];
        $email=$_POST['email'];
        $telefono=$_POST['tel'];
        $mensaje=$_POST['mensaje'];
        //creo un contenido, esto se mostrara destro del archivo
          $contenido="
          nombre:  $nombre
          Email: $email
          tel:  $telefono
          mensaje: $mensaje
          ";
        //listo, ya enlace html name.. y coloque lo que quiero que aparesca en el archivo.
        //ahora le doy una variable al archivo que quiero crear,
        //$archivo se llamara al proceso de... crear.. dentro de carpeta perro.. un archivo txt con
        //el nombre del email ingresado, para poder separar todas las cuentas y estar organziado.
          //$email.txt creara un archivo txt por cada susuario, y se llamara ej: 
        //Noel2020@gmail.com.txt
        //sasha1212@outlook.com.txt
        //si reemplazo $email.txt por usuarios.txt guardara todos los usuarios en un solo archivo txt
          $archivo=fopen("$email.txt","a");
          //luego Escribe en el archivo abierto el contenido que de esto dependera si se guardan 
          //los emails y passwords
          fwrite($archivo,$contenido);
          //se realizo y sin darnos cuenta redigige el php a link de coloquemos con el header...
          header("location: index.html");
        ?>

</head>
<body>
 
</body>
</html>
