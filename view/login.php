<?php
require_once("./view/constantes.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administrator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="./public/assets/index.css">
</head>

<body>

  <main>

    <div class="formulario">
      <?php if (isset($_SESSION['msg'])) {
        echo "<h2 style='color:red' class='col-11 col-md-8 col-lg-6 mx-auto'>{$_SESSION['msg']}</h2>";
        unset($_SESSION['msg']);
      }
      ?>
      <form class="col-11 col-md-8 col-lg-6 mx-auto mt-5" action="./index.php?controller=administradores&action=login#/" method="POST">
        <div class="mb-3">
          <label for="username" class="form-label">User</label>
          <input type="text" class="form-control" name="username" id="username">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" name='password' id="password">
        </div>

        <button type="submit" class="btn btn-primary col-12">Submit</button>
      </form>

    </div>

  </main>



  <?php
  require_once(FOOTER_TEMPLATE);
  ?>