<?php

class Conexion
{

  private const HOST = 'localhost';
  private const USER = 'root';
  private const PASS = '';
  private const DB_NAME = 'Relojeria';
  private static $conexion = null; //pdo


  //pdo object
  public static function getConexion()
  {
    try {
      if (self::$conexion == null) {
        self::$conexion = new PDO('mysql:host=' . self::HOST . ';dbname=' . self::DB_NAME, self::USER, self::PASS);
        self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
      return self::$conexion;
    } catch (PDOException $err) {
      die($err->getMessage());
    }
  }


  public static function desconectar(){
    self::$conexion = null;
  }
}

