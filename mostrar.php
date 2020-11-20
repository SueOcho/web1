<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de productos</title>
</head>
<body style=" background-image:url(fondo.jpg); background-size: 100%; background-repeat: no-repeat;">
    <h1>Listado de productos</h1>
    <hr>
    <?php
    include("conexion.php");
    $cn=fnconexion();
    $sqlselect="select codigo,producto,precio,stock,fabricacion from producto ";

    $rs= mysqli_query($cn,$sqlselect);
    echo "<b>"."codigo "." producto "." precio "." stock "." fabricacion"."<br>"."</b>";

        while($row=mysqli_fetch_row($rs)){

            echo $row[0]."  ".$row[1]."  ".$row[2]."  ".$row[3]."  ".$row[4]."<br>";
        }
        echo "<br>";
        echo "<a href=formulario2.html>Agregar un producto</a>";
        echo "<br>";
        echo "<a href=formulario3.html>Eliminar un producto</a>";
        echo "<br>";
        echo "<a href=formulario1.html>Volver</a>";
        echo "<br>";
    ?>
</body>
</html>