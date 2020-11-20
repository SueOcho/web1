<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registrar Dron</title>
</head>
<body style=" background-image:url(fondo.jpg); background-size: 100%; background-repeat: no-repeat;">
  <h1>Registrar los datos del producto en la bd</h1>
  <hr>
  <?php
	  include("conexion.php");
	  $cn=fnconexion();
	  $codigo=$_POST["txtcodigo"];
	  $producto=$_POST["txtproducto"];	  
	  $precio=$_POST["txtprecio"];
	  $stock=$_POST["txtstock"];
	  $fabricacion=$_POST["txtfabricacion"];
	  $foto=$_POST["txtfoto"]; 
	  $sqlinsert="insert into producto(codigo,producto,precio,stock,fabricacion,foto)
	  values('$codigo','$producto','$precio',$stock,'$fabricacion','$foto')";

	  $rs=mysqli_query($cn,$sqlinsert);
	  echo "<br>" ;
	  mysqli_query($cn,"commit");
      echo "Se agrego un nuevo registro";
      echo "<br>";
	  echo "<br>";
	  echo "<a href=formulario1.html>Consultar</a>"; 
  ?>
</body>
</html>

