<?php
include("conexion.php");
 $id = $_REQUEST['id'];

 $juego = $_POST['dulce'];
 $marca = $_POST['marca'];
 $cantidad = $_POST['cantidad'];
 $precio = $_POST['precio'];
 $direccion = $_POST['direccion'];

 $query = "UPDATE pedido SET juego='$dulce', marca='$marca', cantidad='$cantidad', precio='$precio', Direccion='$direccion' WHERE id = '$id'";
 $envio = $conexion->query($query);

 header("Location: pagina.php");
 ?>
