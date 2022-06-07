<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
   <div style="width:465px; position:relative; left:460px;">
       <a href="../index.html">
          <img class="logo" style="height:240px;" src="../images/eskai_logo.png">
       </a>
   </div>
   <?php
   $nombre = htmlspecialchars($_POST['nombre']);
   $direccion = htmlspecialchars($_POST['direccion']);
   $email = htmlspecialchars($_POST['email']);
   $mensaje = htmlspecialchars($_POST['mensaje']);
   echo"<br>";
   echo "<br>";
   echo "Nombre: ", $nombre;
   echo "Direccion: ", $direccion;
   echo "Correo: ", $email;
   echo "Mensaje: ", $mensaje;
   echo "<br>";
   echo "<br>";
   echo "<br>";
   echo "Gracias por contactarnos, usted recibira un mensaje en su correo por parte del personal del establecimiento.";
   echo "<br>";
   echo "<br>";
   echo "Para volver a la pantalla principal, de clic en el logotipo.";
   ?>
</body>
</html>