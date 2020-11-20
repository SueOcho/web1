<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Modulo de Consulta</title>
</head>
<body style=" background-image:url(fondo.jpg); background-size: 100%; background-repeat: no-repeat;">
	<h1>Resultados de la consulta de productos</h1>
    <hr>
	<?php
	  include("conexion.php");
	  $cn=fnconexion();
	  $codigo=$_POST["txtcodigo"];
      $rs=mysqli_query($cn,"select * from producto where codigo='$codigo'");
	  $numero_filas=mysqli_num_rows($rs);
	  mysqli_data_seek ($rs, 0);
      $resultado=mysqli_fetch_array($rs);	
	  if($numero_filas==0){
		 echo " No existe el codigo del dron <br>";

		 echo "<a href=formulario1.html>Volver</a>"; 
	  }else{
		 echo "<br>" ;
         echo "Codigo  :" .$resultado['codigo']."<br/>";
		 echo "Producto :" .$resultado['producto']."<br/>"; 
		 echo "Precio  :" .$resultado['precio']."<br/>";  
		 echo "Stock :" .$resultado['stock']."<br/>";   
		 echo "Fabricacion  :" .$resultado['fabricacion']."<br/>";    
         echo "Foto:<br>";
         echo "<img src='".$resultado['foto']."'/>";  
         echo "<br>";
		 echo "<a href=formulario1.html>Volver</a>"; 
      }
      echo  "<br>";
      echo "<a href=formulario2.html>Agregar Dron</a><br>";

	?>
</body>
</html>



