<?php
 include("conexion.php");

 $juego = $_POST['dulce'];
 $marca = $_POST['marca'];
 $cantidad = $_POST['cantidad'];
 $precio = $_POST['precio'];
 $direccion = $_POST['direccion'];

$consulta_slq = "INSERT INTO pedido(juego,consola,precio,direccion) VALUES ('$dulce','$marca','$cantidad','$precio','$direccion')";

$envio_consulta = $conexion->query($consulta_sql);

header("Location: pagina.php");
 ?>
