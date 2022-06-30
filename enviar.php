<?php
 $destino="axelxyz132@gmail.com";
 $nombre = $_POST["nombre"];
 $telefono = $_POST["telefono"];
 $mensaja =$_POST["mensaje"];
 $contenido = "Nombre:".$nombre."\nCorreo: ".$correo."\nTeléfono: ".$telefono."\nMensaje:".$mensaje;
  mail($destino,"Contacto",$contenido);
  header("Location:gracias.html");

?>