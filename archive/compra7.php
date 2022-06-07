<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Comprar Art&iacute;culo | ESKAI</title>
<link rel="shortcut icon" href="../favicon.PNG">
</head>

<body>
   <div style="width:465px; position:relative; left:460px;">
       <a href="../index.html">
          <img class="logo" style="height:240px;" src="../images/eskai_logo.png">
       </a>
   </div>
   <div>
   <?php
   echo "Usted acaba de elegir el producto";
   echo"<br>";
   
   $total=0;
   $precio=980;
   
   if(isset($_POST['cantidad']))
   {
      if(!empty($_POST['cantidad']))
      {
         echo "<br/>";
         $cantidad=$_POST['cantidad'];
         echo "Cantidad a comprar: " . $cantidad;
      }

      else
      {
        echo "<br/>";
        echo "Error: Debe de seleccionar la cantidad a comprar.";
        echo "<br>";
        echo "<a href='smash.html'> Volver </a>";
       }
     }
  
   if (isset($precio) && isset($_POST['cantidad']))
   {
	   $total=$cantidad * $precio;
   echo "<br/>";

   echo "Total a pagar: $".$total;
   echo"<br/>";
   echo"<br/>";
   echo"<br/>";
   echo "Muchas gracias por su compra!";
   echo"<br/>";
   echo"<br/>";
   echo"<br/>";
   echo"<br/>";
   echo"Haga clic en el logotipo para volver a la pagina principal.";
   }
  
   ?>
   </div>
</body>
</html>