<?php
require_once '../../../controller/userController.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Palikari</title>
  <link rel="shortcut icon" href="../../assets/img/logo_whiteLine.png" type="image/x-icon" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

  <link rel="stylesheet" href="../../assets/css/loginStyle.css" />
  <link rel="stylesheet" href="../../assets/css/navbar.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

  <?php

  $navbarRoutes = array(
    'logoImgSrc' => './../../assets/img/logo_whiteLine.png',

    'logo' => '../../index.php',
    'inicio' => '../../index.php',
    'comic' => '../../index.php#comic',
    'equipo' => '../../index.php#equipo',
    'tienda' => './../../pages/tienda.php',
    'iniciarSesion' => './../../pages/auth/login.php'
  );

  include_once './../../partials/navbar.php';

  ?>

  <img src="../../assets/img/templo.png" alt="" class="img-fondo">

  <section>
    <form method="post">

      <h1>Login</h1>

      <div class="inputbox">
        <i class="bi bi-envelope"></i>
        <input type="text" required placeholder="Correo" name="mail">
        <label for=""></label>
      </div>

      <div class="inputbox">
        <i class="bi bi-file-earmark-lock"></i>
        <input type="password" required placeholder="Contraseña" name="password">
        <label for=""></label>
      </div>

      <?php
      userController::userLogin()
        ?>

      <div>
        <button class="btn-login" type="submit">Iniciar sesion</button>
      </div>

      <div class="register">
        <p>No tienes cuenta? <a href="register.php">Registrate</a></p>
      </div>

    </form>
  </section>


  <script defer src="../../assets/js/script.js"></script>

  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</body>

</html>