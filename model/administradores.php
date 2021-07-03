<?php
require_once('./conexion.php');

class AdministradoresDAO
{

  public static function existeUsuario($usuario, $pwd)
  {
    $con = Conexion::getConexion();
    $pStmt = $con->prepare('SELECT * FROM Administrador where user=:user AND password=:password');
    $pStmt->bindParam(':user', $usuario, PDO::PARAM_STR);
    $pStmt->bindParam(':password', $pwd, PDO::PARAM_STR);
    $pStmt->execute();
    $resultado = $pStmt->rowCount();
    return $resultado > 0 ? true : false;
  }



}







class Administrador
{

  private $id;
  private $user;
  private $password;

  function __construct($id, $user, $password)
  {
    $this->$id = $id;
    $this->user = $user;
    $this->password = $password;
  }

  public function getId()
  {
    return $this->id;
  }
  public function getUser()
  {
    return $this->user;
  }
  public function getPassword()
  {
    return $this->password;
  }
}
