<?php
require_once('../conexion.php');


session_start();
/* unset($_SESSION['usernameAdministrador']); */
session_destroy();
header('Location: ../index.php');