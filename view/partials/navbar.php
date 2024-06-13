<nav class="navbar navbar-expand-lg bg-dark opacity-75 position-fixed top-0 w-100">
  <div class="container-fluid">
    <a href=" <?php echo $navbarRoutes['logo'] ?> ">
      <img class="mx-5 navbar-logo-img" src=" <?php echo $navbarRoutes['logoImgSrc'] ?> " alt="LogoPalikari" />
    </a>

    <button class="navbar-toggler bg-warning" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse ms-5" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link fs-3 text-light" aria-current="page"
            href="<?php echo $navbarRoutes['inicio'] ?>">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-3 link-light" aria-current="page" href="<?php echo $navbarRoutes['comic'] ?>">Comic</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-3 text-light" aria-current="page"
            href="<?php echo $navbarRoutes['equipo'] ?>">Equipo</a>
        </li>
        <li class="nav-item">
          <?php
          if (isset($_SESSION['name'])) {
            echo '<a class="nav-link fs-3 link-light" aria-current="page" href="' . $navbarRoutes['tienda'] . '">Tienda</a>';
          } else {
            echo '<a class="nav-link fs-3 link-light" aria-current="page" href="' . $navbarRoutes['iniciarSesion'] . '">Tienda</a>';
          }
          // echo '<a class="nav-link fs-3 link-light" aria-current="page" href="' . $navbarRoutes['tienda'] . '">Tienda</a>';
          ?>
        </li>
      </ul>

      <div class="me-5 d-flex gap-4">

        <?php
        if (isset($_SESSION['name'])) {
          echo '
        <span class="btn text-light fs-4 text-decoration-none">
          ' . $_SESSION['name'] . '
          <i class="bi bi-person-circle fs-4 ms-3 text-light"></i>
        </span>';
        } else {
          echo '
        <a class="text-light fs-4 text-decoration-none" href=' . $navbarRoutes["iniciarSesion"] . '>
          Iniciar sesión
          <i class="bi bi-person-circle fs-4 ms-3 text-light"></i>
        </a>';
        }
        ?>

      </div>
    </div>
  </div>
</nav>