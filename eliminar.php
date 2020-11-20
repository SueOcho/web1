<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Modulo de Eliminación</title>
</head>
<body style=" background-image:url(fondo.jpg); background-size: 100%; background-repeat: no-repeat;">
  <h1>Resultados de la Operación Realizada</h1>
  <hr>
  <?php
	include("conexion.php");
	$cn=fnconexion();
	$codigo=$_POST["txtcodigo"];
	$sqleliminar="delete from producto where codigo ='$codigo'";
	$rs=mysqli_query($cn,$sqleliminar);
    if($rs>0){  
		echo "<br>" ;
		mysqli_query($cn,"commit");
		echo "Se elimino el registro";
	}else{
		echo(mysqli_error());
	}
	echo "<br>" ;
	echo "<a href=formulario1.html>Verificar</a>"
   ?>
</body>
</html>