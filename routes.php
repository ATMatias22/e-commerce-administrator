<?php

function call($controller, $action)
{

  require_once("controller/$controller.php");

  $controller = new $controller;
  $controller->{$action}();
}

// Aca se configuran los controlares y actions disponibles
$controllers = array(
  "administradores" => ["vistaMenuInicial", "vistaLogin","login"]
);

if (array_key_exists($controller, $controllers)) {
  if (in_array($action, $controllers[$controller])) {
    call($controller, $action);
  }else{
    call('errores', 'errorRuta');
  } 
} else {
    call('errores','errorRuta');

}
