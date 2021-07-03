<?php

require_once('../../conexion.php');

$array = (json_decode(file_get_contents('php://input')));
$con = Conexion::getConexion();
//ELIMINAR UN USUARIO
if ($array->metodo == 'eliminarUsuario') {
  $id = $array->id;
  $pStmt = $con->prepare('DELETE FROM Usuario where id=:id');
  $pStmt->bindParam(':id', $id, PDO::PARAM_INT);
  $pStmt->execute();
  $resultado = $pStmt->rowCount();
  $pStmt = null;
  echo json_encode($resultado > 0);
}

//ELIMINAR UNA SUSCRIPCION
if ($array->metodo == 'eliminarSuscripcion') {
  $id = $array->id;
  $pStmt = $con->prepare('DELETE FROM Suscripcion where id=:id');
  $pStmt->bindParam(':id', $id, PDO::PARAM_INT);
  $pStmt->execute();
  $resultado = $pStmt->rowCount();

  $pStmt = null;
  echo json_encode($resultado > 0);
}

function rmDir_rf($carpeta)
{
  foreach (glob($carpeta . "/*") as $archivos_carpeta) {
    if (is_dir($archivos_carpeta)) {
      rmDir_rf($archivos_carpeta);
    } else {
      unlink($archivos_carpeta);
    }
  }
  rmdir($carpeta);
}

//ELIMINAR UNA PRODUCTO
if ($array->metodo == 'eliminarProducto') {
  $id = $array->id;
  $pStmt = $con->prepare('DELETE FROM Producto where id=:id');
  $pStmt->bindParam(':id', $id, PDO::PARAM_INT);
  $pStmt->execute();
  $resultado = $pStmt->rowCount();
  $pStmt = null;
  $direccion = "../../../TimeZone/public/assets/img/products/product{$id}/";
  rmDir_rf($direccion);
 
  echo json_encode($resultado > 0);
}


//ELIMINAR COMENTARIO
if ($array->metodo == 'eliminarComentario') {
  $id = $array->id;
  $pStmt = $con->prepare('DELETE FROM Comentario where id=:id');
  $pStmt->bindParam(':id', $id, PDO::PARAM_INT);
  $pStmt->execute();
  $resultado = $pStmt->rowCount();
  $pStmt = null;
  echo json_encode($resultado > 0);
}



//MOSTRAR ADMINISTRADORES
if ($array->metodo == 'mostrarAdministradores') {
  $pStmt = $con->prepare('SELECT * FROM Administrador');
  $pStmt->execute();
  $resultado = $pStmt->fetchAll(PDO::FETCH_ASSOC);
  $pStmt = null;
  echo json_encode($resultado);
}



//MOSTRAR COMENTARIOS
if ($array->metodo == 'mostrarComentarios') {
  $pStmt = $con->prepare('SELECT * FROM Comentario');
  /* $pStmt = $con->prepare('SELECT Comentario.*, Usuario.user FROM Comentario inner join Usuario on Usuario.id = Comentario.id_usuario'); */
  $pStmt->execute();
  $resultado = $pStmt->fetchAll(PDO::FETCH_ASSOC);
  $pStmt = null;
  echo json_encode($resultado);
}

//MOSTRAR PRODUCOTOS
if ($array->metodo == 'mostrarProductos') {
  $pStmt = $con->prepare('SELECT * FROM Producto');
  $pStmt->execute();
  $resultado = $pStmt->fetchAll(PDO::FETCH_ASSOC);
  $pStmt = null;
  echo json_encode($resultado);
}

//MOSTRAR SUSCRIPCIONES
if ($array->metodo == 'mostrarSuscripciones') {
  $pStmt = $con->prepare('SELECT * FROM Suscripcion');
  $pStmt->execute();
  $resultado = $pStmt->fetchAll(PDO::FETCH_ASSOC);
  $pStmt = null;
  echo json_encode($resultado);
}

//MOSTRAR USUARIOS
if ($array->metodo == 'mostrarUsuarios') {
  $pStmt = $con->prepare('SELECT * FROM Usuario');
  $pStmt->execute();
  $resultado = $pStmt->fetchAll(PDO::FETCH_ASSOC);
  $pStmt = null;
  echo json_encode($resultado);
}

