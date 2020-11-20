<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conexión al Servidor y a la base de datos</title>
</head>
<body>
	<?php

function fnconexion(){

 $cn=mysqli_connect('localhost', 'root','');
 $bd=mysqli_select_db($cn,'bdproducto2');
 if(($cn==true) && ($bd==true)) {
          echo("");
 }else{
          echo("error".mysqli_error());
           mysqli_close($cn);
     }
     return $cn;
     
 }

?>
    
</body>
</html>