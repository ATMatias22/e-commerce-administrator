<?php
require_once('../../conexion.php');
$con = Conexion::getConexion();

//../../../TimeZone/public/assets/img/products/product1/

//AGREGAR PRODUCTO


$nombre = $_POST['nombreProducto'];
$precio = $_POST['precioProducto'];
$popular = isset($_POST['popularProducto']) ? 1 : 0;
$nuevo = isset($_POST['nuevoProducto']) ? 1 : 0;
$descripcion = $_POST['descripcionProducto'];


$pStmt = $con->prepare('INSERT INTO Producto (nombre,precio,descripcion,nuevo,popular) VALUES (:nombre,:precio,:descripcion,:nuevo,:popular)');
$pStmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
$pStmt->bindParam(':precio', $precio, PDO::PARAM_INT);
$pStmt->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
$pStmt->bindParam(':nuevo', $nuevo, PDO::PARAM_INT);
$pStmt->bindParam(':popular', $popular, PDO::PARAM_INT);
$pStmt->execute();
$resultado = $pStmt->rowCount();
$id = $con->lastInsertId();
$pStmt = null;

$archivo = $_FILES['imagenProducto']['name'];
$tipo = stristr($archivo, '.');
$_FILES['imagenProducto']['name'] = "product{$id}-1{$tipo}";
mkdir("../../../TimeZone/public/assets/img/products/product{$id}/");
$direccion = "../../../TimeZone/public/assets/img/products/product{$id}/" . $_FILES["imagenProducto"]["name"];
move_uploaded_file($_FILES["imagenProducto"]["tmp_name"], $direccion);


echo json_encode($resultado > 0);
