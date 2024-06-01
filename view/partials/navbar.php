<nav class="navbar navbar-expand-lg bg-dark opacity-75 position-fixed top-0 w-100">
  <div class="container-fluid">
    <a href=" <?php echo $navbarRoutes['logo'] ?> ">
      <img class="mx-5" src=" <?php echo $navbarRoutes['logoImgSrc'] ?> " alt="LogoPalikari" width="100" />
    </a>

    <button class="navbar-toggler bg-warning" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse ms-5" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link fs-3 text-light" aria-current="page" href="<?php echo $navbarRoutes['inicio'] ?>">Inicio</a>
        </li>
        <li class="nav-item">
        <a class="nav-link fs-3 link-light" aria-current="page" href="<?php echo $navbarRoutes['comic'] ?>">Comic</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-3 text-light" aria-current="page" href="<?php echo $navbarRoutes['equipo'] ?>">Equipo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-3 link-light" aria-current="page" href="<?php echo $navbarRoutes['tienda'] ?>">Tienda</a>
        </li>
      </ul>

      <div class="me-5 d-flex gap-4">
        <a class="text-light fs-4 text-decoration-none" href="<?php echo $navbarRoutes['iniciarSesion'] ?>">
          Iniciar sesión
          <i class="bi bi-person-circle fs-4 ms-3 text-light"></i>
        </a>
      </div>
    </div>
  </div>
</nav>