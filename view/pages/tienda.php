<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="./tienda.css">
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css'>

</head>

<body>

  <nav class="navbar navbar-expand-lg bg-dark opacity-75 position-fixed top-0 w-100">
    <div class="container-fluid">
      <img class="mx-5 navbar-logo" src="./img/logo_whiteLine.png" alt=" Pelikari Logo" width="100" />

      <button class="navbar-toggler bg-warning" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse ms-5" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link fs-3 text-light" aria-current="page" href="#inicio">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-3 text-light" aria-current="page" href="#equipo">Equipo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-3 link-light" aria-current="page" href="#comic">Comic</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-3 link-light" aria-current="page" href="tienda.html">Tienda</a>
          </li>
        </ul>

        <div class="me-5 d-flex gap-4">
          <a class="text-light fs-4 text-decoration-none" href="#">
            Iniciar sesión
            <i class="bi bi-person-circle fs-4 ms-3 text-light"></i>
          </a>
        </div>
      </div>
    </div>
  </nav>

  <main>

    <div class="slideshow">
      <div class="slide">
        <div class="slide__wrap">
          <div class="slide__img">
            <img src="./materialPagina/imagenes/camisa_promocion.jpg" alt="">
          </div>
          <div class="slide__title-wrap">
            <h3 class="slide__title">Camisas</h3>
            <h4 class="slide__subtitle">#promo-atenea</h4>
          </div>
        </div>
      </div>
      <div class="slide">
        <div class="slide__wrap">
          <div class="slide__img">
            <img src="./materialPagina/imagenes/libro_promocion.jpg" alt="">
          </div>
          <div class="slide__title-wrap">
            <h3 class="slide__title">Libros</h3>
            <h4 class="slide__subtitle">#Redactando una vida</h4>
          </div>
        </div>
      </div>
      <div class="slide">
        <div class="slide__wrap">
          <div class="slide__img">
            <img src="./materialPagina/imagenes/vaso_promocion.jpg" alt="">
          </div>
          <div class="slide__title-wrap">
            <h3 class="slide__title">Mugs</h3>
            <h4 class="slide__subtitle">#Tomandolalcaridad</h4>
          </div>
        </div>
      </div>
    </div><!-- /slideshow -->
    <nav class="boxnav">
      <button class="boxnav__item boxnav__item--prev">
        <svg class="icon icon--caret">
          <use xlink:href="#icon-caret"></use>
        </svg>
      </button>
      <div class="boxnav__item boxnav__item--label">
        <span class="boxnav__label boxnav__label--current">1</span>
        <span class="boxnav__label boxnav__label--total"></span>
      </div>
      <button class="boxnav__item boxnav__item--next">
        <svg class="icon icon--caret-rot">
          <use xlink:href="#icon-caret"></use>
        </svg>
      </button>
    </nav>
    <button class="action action--details">+ detalles</button>
    <!-- details -->
    <div class="details-wrap">
      <div class="details">
        <div class="details__item details__item-img" data-direction="ttb">
          <div class="details__inner">
            <img src="./materialPagina/imagenes/camisa_promocion.jpg" alt="Some image" />
          </div>
        </div>
        <div class="details__item details__item-sizes">
          <div class="details__inner details__inner--sizes">
            <span class="details__size">6</span>
            <span class="details__size">6.5</span>
            <span class="details__size details__size--selected">7</span>
            <span class="details__size">7.5</span>
            <span class="details__size">8</span>
            <span class="details__size">9</span>
            <span class="details__size details__size--disabled">9.5</span>
            <span class="details__size">10</span>
          </div>
        </div>
        <div class="details__item details__item--addtocart" data-direction="ttb">
          <div class="details__inner">
            <button class="action action--addtocart">
              <svg class="icon icon--cart">
                <use xlink:href="#icon-cart"></use>
              </svg>
            </button>
          </div>
        </div>
        <div class="details__item details__item-colors" data-direction="ttb">
          <div class="details__inner details__inner--grid details__inner--colors">
            <span class="details__color details__color--BeigeGray">Beige and Gray</span>
            <span class="details__color details__color--red">Red</span>
            <span class="details__color details__color--green">Green</span>
          </div>
        </div>
        <div class="details__item details__item-price">
          <div class="details__inner details__inner--price">$65</div>
        </div>
        <div class="details__item details__item--close" data-direction="ttb">
          <div class="details__inner">
            <button class="action action--close">Close</button>
          </div>
        </div>
      </div><!-- /details -->
      <div class="details">
        <div class="details__item details__item-img" data-direction="ttb">
          <div class="details__inner">
            <img src="./materialPagina/imagenes/libro_promocion.jpg" alt="Some image" />
          </div>
        </div>
        <div class="details__item details__item-sizes">
          <div class="details__inner details__inner--sizes">
            <span class="details__size">6</span>
            <span class="details__size details__size--disabled">6.5</span>
            <span class="details__size">7</span>
            <span class="details__size">7.5</span>
            <span class="details__size details__size--selected">8</span>
            <span class="details__size">9</span>
            <span class="details__size details__size--disabled">9.5</span>
            <span class="details__size details__size--disabled">10</span>
          </div>
        </div>
        <div class="details__item details__item--addtocart" data-direction="ttb">
          <div class="details__inner">
            <button class="action action--addtocart">
              <svg class="icon icon--cart">
                <use xlink:href="#icon-cart"></use>
              </svg>
            </button>
          </div>
        </div>
        <div class="details__item details__item-colors" data-direction="ttb">
          <div class="details__inner details__inner--grid details__inner--colors">
            <span class="details__color details__color--WhiteBlack">White and Black</span>
            <span class="details__color details__color--BlueBlack">Blue and Black</span>
            <span class="details__color details__color--PinkBlack">Pink and Black</span>
          </div>
        </div>
        <div class="details__item details__item-price">
          <div class="details__inner details__inner--price">$30</div>
        </div>
        <div class="details__item details__item--close" data-direction="ttb">
          <div class="details__inner">
            <button class="action action--close">Close</button>
          </div>
        </div>
      </div><!-- /details -->
      <div class="details">
        <div class="details__item details__item-img" data-direction="ttb">
          <div class="details__inner">
            <img src="./materialPagina/imagenes/vaso_promocion.jpg" alt="Some image" />
          </div>
        </div>
        <div class="details__item details__item-sizes">
          <div class="details__inner details__inner--sizes">
            <span class="details__size">6</span>
            <span class="details__size details__size--disabled">6.5</span>
            <span class="details__size">7</span>
            <span class="details__size details__size--disabled">7.5</span>
            <span class="details__size">8</span>
            <span class="details__size details__size--selected">9</span>
            <span class="details__size details__size--disabled">9.5</span>
            <span class="details__size">10</span>
          </div>
        </div>
        <div class="details__item details__item--addtocart" data-direction="ttb">
          <div class="details__inner">
            <button class="action action--addtocart">
              <svg class="icon icon--cart">
                <use xlink:href="#icon-cart"></use>
              </svg>
            </button>
          </div>
        </div>
        <div class="details__item details__item-colors" data-direction="ttb">
          <div class="details__inner details__inner--grid details__inner--colors">
            <span class="details__color details__color--WhiteRedBlue">White with Red and Blue trim</span>
            <span class="details__color details__color--WhiteGreenBlack">White with Green and Black trim</span>
            <span class="details__color details__color--sky">Sky</span>
          </div>
        </div>
        <div class="details__item details__item-price">
          <div class="details__inner details__inner--price">$45</div>
        </div>
        <div class="details__item details__item--close" data-direction="ttb">
          <div class="details__inner">
            <button class="action action--close">Close</button>
          </div>
        </div>
      </div><!-- /details -->
    </div>
  </main>

  <div class="container-fluid mt-5">
    <div class="row px-5">
      <div class="col-sm-4 p-3">
        <div class="bg-dark card rounded-3 opacity-75">
          <div class="card-head">
            <h3 class="text-light ms-5">
              Producto
            </h3>
          </div>
          <div class="card-body d-block">
            <div class="card-img">
              <img src="./materialPagina/imagenes/Camisas/atras_camisa_atenea.png" alt="">
            </div>
            <b class="text-light d-block mx-2">Detalles del producto:</b>
            <div class="list-unstyled text-light ms-4">
              <li>Detalle 1</li>
              <li>Detalle 2</li>
              <li>Detalle 3</li>
            </div>
          </div>
          <div class="card-footer d-flex justify-content-around align-items-center">
            <button class="btn btn-warning">
              Saber mas
            </button>
            <button class="btn btn-info">
              Agregar al carrito
            </button>
          </div>
        </div>
      </div>
      <div class="col-sm-4 p-3">
        <div class="bg-dark card rounded-3 opacity-75">
          <div class="card-head">
            <h3 class="text-light ms-5">
              Producto
            </h3>
          </div>
          <div class="card-body d-block">
            <div class="card-img">
              <img src="./materialPagina/imagenes/Camisas/atras_camisa_perseo.png" alt="">
            </div>
            <b class="text-light d-block mx-2">Detalles del producto:</b>
            <div class="list-unstyled text-light ms-4">
              <li>Detalle 1</li>
              <li>Detalle 2</li>
              <li>Detalle 3</li>
            </div>
          </div>
          <div class="card-footer d-flex justify-content-around align-items-center">
            <button class="btn btn-warning">
              Saber mas
            </button>
            <button class="btn btn-info">
              Agregar al carrito
            </button>
          </div>
        </div>
      </div>
      <div class="col-sm-4 p-3">
        <div class="bg-dark card rounded-3 opacity-75">
          <div class="card-head">
            <h3 class="text-light ms-5">
              Producto
            </h3>
          </div>
          <div class="card-body d-block">
            <div class="card-img">
              <img src="./materialPagina/imagenes/Camisas/atras_camisa_poseidon.png" alt="">
            </div>
            <b class="text-light d-block mx-2">Detalles del producto:</b>
            <div class="list-unstyled text-light ms-4">
              <li>Detalle 1</li>
              <li>Detalle 2</li>
              <li>Detalle 3</li>
            </div>
          </div>
          <div class="card-footer d-flex justify-content-around align-items-center">
            <button class="btn btn-warning">
              Saber mas
            </button>
            <button class="btn btn-info">
              Agregar al carrito
            </button>
          </div>
        </div>
      </div>
      <div class="col-sm-4 p-3">
        <div class="bg-dark card rounded-3 opacity-75">
          <div class="card-head">
            <h3 class="text-light ms-5">
              Producto
            </h3>
          </div>
          <div class="card-body d-block">
            <div class="card-img">
              <img src="./materialPagina/imagenes/Camisas/camisasjuntas_atenea.png" alt="">
            </div>
            <b class="text-light d-block mx-2">Detalles del producto:</b>
            <div class="list-unstyled text-light ms-4">
              <li>Detalle 1</li>
              <li>Detalle 2</li>
              <li>Detalle 3</li>
            </div>
          </div>
          <div class="card-footer d-flex justify-content-around align-items-center">
            <button class="btn btn-warning">
              Saber mas
            </button>
            <button class="btn btn-info">
              Agregar al carrito
            </button>
          </div>
        </div>
      </div>
      <div class="col-sm-4 p-3">
        <div class="bg-dark card rounded-3 opacity-75">
          <div class="card-head">
            <h3 class="text-light ms-5">
              Producto
            </h3>
          </div>
          <div class="card-body d-block">
            <div class="card-img">
              <img src="./materialPagina/imagenes/Camisas/camisasjuntas_perseo.png" alt="">
            </div>
            <b class="text-light d-block mx-2">Detalles del producto:</b>
            <div class="list-unstyled text-light ms-4">
              <li>Detalle 1</li>
              <li>Detalle 2</li>
              <li>Detalle 3</li>
            </div>
          </div>
          <div class="card-footer d-flex justify-content-around align-items-center">
            <button class="btn btn-warning">
              Saber mas
            </button>
            <button class="btn btn-info">
              Agregar al carrito
            </button>
          </div>
        </div>
      </div>
      <div class="col-sm-4 p-3">
        <div class="bg-dark card rounded-3 opacity-75">
          <div class="card-head">
            <h3 class="text-light ms-5">
              Producto
            </h3>
          </div>
          <div class="card-body d-block">
            <div class="card-img">
              <img src="./materialPagina/imagenes/Camisas/camisasjuntas_poseidon.png" alt="">
            </div>
            <b class="text-light d-block mx-2">Detalles del producto:</b>
            <div class="list-unstyled text-light ms-4">
              <li>Detalle 1</li>
              <li>Detalle 2</li>
              <li>Detalle 3</li>
            </div>
          </div>
          <div class="card-footer d-flex justify-content-around align-items-center">
            <button class="btn btn-warning">
              Saber mas
            </button>
            <button class="btn btn-info">
              Agregar al carrito
            </button>
          </div>
        </div>
      </div>
      <div class="col-sm-4 p-3">
        <div class="bg-dark card rounded-3 opacity-75">
          <div class="card-head">
            <h3 class="text-light ms-5">
              Producto
            </h3>
          </div>
          <div class="card-body d-block">
            <div class="card-img">
              <img src="./materialPagina/imagenes/Camisas/camisasjuntas_poseidon.png" alt="">
            </div>
            <b class="text-light d-block mx-2">Detalles del producto:</b>
            <div class="list-unstyled text-light ms-4">
              <li>Detalle 1</li>
              <li>Detalle 2</li>
              <li>Detalle 3</li>
            </div>
          </div>
          <div class="card-footer d-flex justify-content-around align-items-center">
            <button class="btn btn-warning">
              Saber mas
            </button>
            <button class="btn btn-info">
              Agregar al carrito
            </button>
          </div>
        </div>
      </div>
      <div class="col-sm-4 p-3">
        <div class="bg-dark card rounded-3 opacity-75">
          <div class="card-head">
            <h3 class="text-light ms-5">
              Producto
            </h3>
          </div>
          <div class="card-body d-block">
            <div class="card-img">
              <img src="./materialPagina/imagenes/Mugs/mugfinalGorgonas_Mesa de trabajo 1-01.png" alt="">
            </div>
            <b class="text-light d-block mx-2">Detalles del producto:</b>
            <div class="list-unstyled text-light ms-4">
              <li>Detalle 1</li>
              <li>Detalle 2</li>
              <li>Detalle 3</li>
            </div>
          </div>
          <div class="card-footer d-flex justify-content-around align-items-center">
            <button class="btn btn-warning">
              Saber mas
            </button>
            <button class="btn btn-info">
              Agregar al carrito
            </button>
          </div>
        </div>
      </div>
      <div class="col-sm-4 p-3">
        <div class="bg-dark card rounded-3 opacity-75">
          <div class="card-head">
            <h3 class="text-light ms-5">
              Producto
            </h3>
          </div>
          <div class="card-body d-block">
            <div class="card-img">
              <img src="./materialPagina/imagenes/Mugs/mugfinalGorgonas_Mesa de trabajo 1-02.png" alt="">
            </div>
            <b class="text-light d-block mx-2">Detalles del producto:</b>
            <div class="list-unstyled text-light ms-4">
              <li>Detalle 1</li>
              <li>Detalle 2</li>
              <li>Detalle 3</li>
            </div>
          </div>
          <div class="card-footer d-flex justify-content-around align-items-center">
            <button class="btn btn-warning">
              Saber mas
            </button>
            <button class="btn btn-info">
              Agregar al carrito
            </button>
          </div>
        </div>
      </div>
      <div class="col-sm-4 p-3">
        <div class="bg-dark card rounded-3 opacity-75">
          <div class="card-head">
            <h3 class="text-light ms-5">
              Producto
            </h3>
          </div>
          <div class="card-body d-block">
            <div class="card-img">
              <img src="./materialPagina/imagenes/Mugs/mugfinalGorgonas_Mesa de trabajo 1-03.png" alt="">
            </div>
            <b class="text-light d-block mx-2">Detalles del producto:</b>
            <div class="list-unstyled text-light ms-4">
              <li>Detalle 1</li>
              <li>Detalle 2</li>
              <li>Detalle 3</li>
            </div>
          </div>
          <div class="card-footer d-flex justify-content-around align-items-center">
            <button class="btn btn-warning">
              Saber mas
            </button>
            <button class="btn btn-info">
              Agregar al carrito
            </button>
          </div>
        </div>
      </div>
      <div class="col-sm-4 p-3">
        <div class="bg-dark card rounded-3 opacity-75">
          <div class="card-head">
            <h3 class="text-light ms-5">
              Producto
            </h3>
          </div>
          <div class="card-body d-block">
            <div class="card-img">
              <img src="./materialPagina/imagenes/Mugs/mugfinalMedusa_Mesa de trabajo 1-01.png" alt="">
            </div>
            <b class="text-light d-block mx-2">Detalles del producto:</b>
            <div class="list-unstyled text-light ms-4">
              <li>Detalle 1</li>
              <li>Detalle 2</li>
              <li>Detalle 3</li>
            </div>
          </div>
          <div class="card-footer d-flex justify-content-around align-items-center">
            <button class="btn btn-warning">
              Saber mas
            </button>
            <button class="btn btn-info">
              Agregar al carrito
            </button>
          </div>
        </div>
      </div>
      <div class="col-sm-4 p-3">
        <div class="bg-dark card rounded-3 opacity-75">
          <div class="card-head">
            <h3 class="text-light ms-5">
              Producto
            </h3>
          </div>
          <div class="card-body d-block">
            <div class="card-img">
              <img src="./materialPagina/imagenes/Mugs/mugfinalMedusa_Mesa de trabajo 1-02.png" alt="">
            </div>
            <b class="text-light d-block mx-2">Detalles del producto:</b>
            <div class="list-unstyled text-light ms-4">
              <li>Detalle 1</li>
              <li>Detalle 2</li>
              <li>Detalle 3</li>
            </div>
          </div>
          <div class="card-footer d-flex justify-content-around align-items-center">
            <button class="btn btn-warning">
              Saber mas
            </button>
            <button class="btn btn-info">
              Agregar al carrito
            </button>
          </div>
        </div>
      </div>
      <div class="col-sm-4 p-3">
        <div class="bg-dark card rounded-3 opacity-75">
          <div class="card-head">
            <h3 class="text-light ms-5">
              Producto
            </h3>
          </div>
          <div class="card-body d-block">
            <div class="card-img">
              <img src="./materialPagina/imagenes/Mugs/mugfinalMedusa_Mesa de trabajo 1-03.png" alt="">
            </div>
            <b class="text-light d-block mx-2">Detalles del producto:</b>
            <div class="list-unstyled text-light ms-4">
              <li>Detalle 1</li>
              <li>Detalle 2</li>
              <li>Detalle 3</li>
            </div>
          </div>
          <div class="card-footer d-flex justify-content-around align-items-center">
            <button class="btn btn-warning">
              Saber mas
            </button>
            <button class="btn btn-info">
              Agregar al carrito
            </button>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- footer -->
  <div class="space"></div>
  <footer class="mt-5">
    <img src="img/logo_whiteLine.png">
  </footer>

  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js'></script>
  <script src='https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js'></script>
  <script src='https://assets.codepen.io/16327/gsap-latest-beta.min.js'></script>
  <script src='https://assets.codepen.io/16327/Observer.min.js'></script>
  <script src=".//tienda.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


</body>

</html>