<?php
session_start();

require_once('./model/administradores.php');

class administradores{


  function login(){

      if (isset($_POST["username"]) && isset($_POST["password"])) {
        if (!empty($_POST["username"]) && !empty($_POST["password"])) {
          if (AdministradoresDAO::existeUsuario($_POST["username"], $_POST["password"])) {
            $_SESSION["usernameAdministrador"] = $_POST["username"];
            header("Location: ./index.php?controller=administradores&action=vistaMenuInicial");
          } else {
            $_SESSION["msg"] = "El usuario no existe";
           require_once('view/login.php');
          }
        } else {
          $_SESSION["msg"] = "Campos incompletos";
         require_once('view/login.php');
        }
      } else {
        $_SESSION["msg"] = "Campos incompletos";
       require_once('view/login.php');
      }
  }

  function vistaMenuInicial(){

    if(isset($_SESSION['usernameAdministrador'])){
      require_once('view/menu.php');
    }else{
      require_once('view/login.php');
    }
  }

  function vistaLogin(){

    if (!isset($_SESSION['usernameAdministrador'])) {
      require_once('view/login.php');
    } else {
      require_once('view/menu.php');
    }
  }


}
