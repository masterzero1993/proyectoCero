 <?php

          $nombre=$_POST['nombre'];
          $email=$_POST['email'];
          $telefono=$_POST['tel'];
          $mensaje=$_POST['mensaje'];
        
          $contenido="
          Nombre: $nombre
          Email: $email
          Tel: $telefono
          Mensaje: $mensaje
          ";

          $archivo=fopen("recibido/$email.txt","w");
          fwrite($archivo,$contenido);
        ?>
