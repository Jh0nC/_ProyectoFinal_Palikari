<?php
session_start();
if (!isset($_SESSION['name'])) {
  header('Location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="./../assets/img/logo_whiteLine.png" type="image/x-icon" />
  <title>Palikari</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="./../assets/css/tienda.css">
  <link rel="stylesheet" href="./../assets/css/styles.css">
  <link rel="stylesheet" href="./../assets/css/navbar.css">
  <link rel="stylesheet" href="./../assets/css/bottonStyle.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
</head>

<body>

  <button class="shop-cart-btn btn btn-warning pt-2" type="button" data-bs-toggle="modal" data-bs-target="#shopCart">
    <h3><i class="bi bi-cart4 text-dark"></i></h3>
  </button>

  <div id="shop-cart">
  </div>

  <!-- Navbar -->
  <?php

  $navbarRoutes = array(
    'logoImgSrc' => './../assets/img/logo_whiteLine.png',

    'logo' => '../index.php',
    'inicio' => '../index.php',
    'comic' => '../index.php#comic',
    'equipo' => '../index.php#equipo',
    'tienda' => './../pages/tienda.php',
    'iniciarSesion' => './../pages/auth/login.php'
  );

  include_once './../partials/navbar.php';

  ?>

  <main>

    <div class="slideshow">
      <div class="slide">
        <div class="slide__wrap">
          <div class="slide__img">
            <img src="./../assets/img/tienda/camisa.png" alt="">
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
            <img src="./../assets/img/tienda/libro.png" alt="">
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
            <img src="./../assets/img/tienda/vaso.png" alt="">
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
        <i class="bi bi-chevron-left"></i>
      </button>
      <div class="boxnav__item boxnav__item--label">
        <span class="boxnav__label boxnav__label--current">1</span>
        <span class="boxnav__label boxnav__label--total"></span>
      </div>
      <button class="boxnav__item boxnav__item--next">
        <i class="bi bi-chevron-right"></i>
      </button>
    </nav>

    <button class="action action--details">+ detalles</button>
    <!-- details -->
    <div class="details-wrap">
      <div class="details">
        <div class="details__item details__item-img" data-direction="ttb">
          <div class="details__inner">
            <img src="./../assets/img/tienda/camisa.png" alt="Some image" />
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
            <img src="./../assets/img/tienda/libro.png" alt="Some image" />
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
            <img src="./../assets/img/tienda/vaso.png" alt="Some image" />
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

    <div class="row px-5" id="lista-productos">

    </div>

  </div>

  <!-- footer -->
  <div class="space"></div>
  <footer class="mt-5">
    <img src="../assets/img/logo_whiteLine.png">
  </footer>

  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js'></script>
  <script src='https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js'></script>
  <script src='https://assets.codepen.io/16327/gsap-latest-beta.min.js'></script>
  <script src='https://assets.codepen.io/16327/Observer.min.js'></script>
  <script src="../assets/js/tienda.js"></script>
  <script src="../assets/js/carrito.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


</body>

</html>