<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Secciones Horizontales con Carrusel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./styles.css" />
</head>

<body>

  <div class="w-100 h-100 mask">
    <nav class="navbar navbar-expand-lg bg-dark opacity-75 position-fixed top-0 w-100 z-3">
      <div class="container-fluid">
        <img class="mx-5" src="./img/logo_whiteLine.png" alt=" Pelikari Logo" width="100" />

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
    <!-- seection #1 -->
    <section id="section1" class="section active">
      <div class="inicio">
        <div class="scroll">
          <p>Bienvenido a Palikari</p>
          <p>Unete a este viaje</p>
        </div>

        <img src="./img/atn_levantando_lanza_2.gif" alt="" class="img-atenea" />
        <div class="inicio-content bg-dark p-3 rounded-4 opacity-75 shadow-lg mt-5">
          <h1>
            PALIKARI
            <ion-icon class="music-note-icon" name="musical-note-outline"></ion-icon>
          </h1>
          <p>
            Atenea es la diosa griega de la sabiduría, la estrategia y la guerra
            justa, hija de Zeus. Nació completamente armada de la cabeza de su
            padre. Es símbolo de inteligencia y justicia, y se la representa con
            lanza y escudo. Patrona de las artes y la civilización, se le
            atribuyen invenciones como la brida y el arado. Jugó un papel clave
            en la guerra de Troya y apoyó a héroes como Perseo y Odiseo.
          </p>
        </div>
      </div>
    </section>

    <!-- section #2 -->
    <section id="section2" class="section">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="./img/iconos_personajes/atenea.png" class="" />
            <h3>Atenea</h3>
            <p class="d-block text-center">Descripción del personaje</p>
          </div>
          <div class="swiper-slide">
            <img src="./img/iconos_personajes/humanamedusa.png" class="" />
            <h3>Medusa</h3>
            <p class="d-block text-center">Descripción del personaje</p>
          </div>
          <div class="swiper-slide">
            <img src="./img/iconos_personajes/medusamo.png" class="" />
            <h3>medusamo</h3>
            <p class="d-block text-center">Descripción del personaje</p>
          </div>
          <div class="swiper-slide">
            <img src="./img/iconos_personajes/perseo.png" class="" />
            <h3>Perseo</h3>
            <p class="d-block text-center">Descripción del personaje</p>
          </div>
          <div class="swiper-slide">
            <img src="./img/iconos_personajes/poseidon.png" class="" />
            <h3>Poseidon</h3>
            <p class="d-block text-center">Descripción del personaje</p>
          </div>
          <div class="swiper-slide">
            <img src="./img/iconos_personajes/rey.png" class="" />
            <h3>Rey</h3>
            <p class="d-block text-center">Descripción del personaje</p>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>

    <!-- section #3 -->
    <section id="section3" class="section">
      <div class="w-100 h-100 about-page bg-secondary">
        <div class="bg info">
          <img src="./img/iconos_personajes/todes.png" alt="" />
          <div class="info-content">
            <h1>Comic info</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex doloribus quas totam odit alias ullam
              perspiciatis? Qui distinctio error, ipsa odit ipsum expedita nostrum earum maxime eligendi ab consequuntur
              laboriosam, ratione sed molestias hic veniam adipisci quia incidunt modi minus sunt. Unde quam mollitia,
              expedita vitae odit iste repudiandae dignissimos molestias, perspiciatis a quasi, at praesentium
              architecto
              hic nobis delectus in quos ex sed voluptate sunt impedit quo. Repudiandae, reprehenderit.
            </p>
            <div class="tag-container">
              <!-- <span>Timeless Hits</span>
              <span>Selected Playlists</span>
              <span>Remember & Discover</span>
              <span>Offline Enjoyment</span>
              <span>Ad-Free Nostalgia</span> -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- buttons -->
    <nav class="bottom-nav">
      <button onclick="prevSection()" class="btn btn-warning">Anterior</button>
      <button onclick="nextSection()" class="btn btn-warning">Siguiente</button>
    </nav>
  </div>

  <div class="container-fluid">
    <div class="container-fluid p-5" id="comic">

      <!-- comic title -->
      <div class="row">
        <div class="d-flex justify-content-center my-2 mx-2">
          <h2 class="d-inline border-top w-25 text-dark fw-bold border-warning mb-3" style="font-size: 4em">
            COMIC
          </h2>
        </div>
      </div>
      <!-- comic -->
      <div class="row justify-content-center align-items-center second-prom-panel">
        <div class="col-sm comic">
          <img src="./img/templo.png" alt="">
        </div>
        <div class="col-sm comic d-flex flex-column justify-content-around align-items-center text-center"
          style="background: rgb(20, 20, 20); opacity: 85%;">
          <div class="my-2">
            <h1 class="text-white">"CASTIGO MONSTRUOSO"</h1>
          </div>
          <div class="my-2 ">
            <p class="text-white-50">Castigo monstruoso presenta la historia de quien fue la mejor sacerdotiza
              de la diosa "Medusa" mediante un comic donde podras interactuar con los personajes y las
              escenas.</p>
            <h4 class="text-white">¡QUE ESPERAS, DISFRUTA DE ESTA GRAN ODISEA!</h4>
          </div>
          <div class="my-2">
            <button class="btn btn-outline-warning">COMIC</button>
          </div>
        </div>
      </div>
    </div>

    <!-- nosotras -->
    <div class="container mb-4">

      <!-- titulo nosotras -->
      <div class="row" id="equipo">
        <div class="d-flex justify-content-around my-3 mx-2" style="align-items: center;">
          <img height="50%" src="./assets/img/flecha.png" alt="">
          <h1 class="text-white">NOSOTRAS</h1>
          <img height="50%" src="./assets/img/flechahaciaizquierda.png" alt="">
        </div>
      </div>

      <div class="boxesContainer row justify-content-around mb-5">

        <div class="cardBox1 col-5 m-2 p-4">
          <div class="card">
            <div class="front">
              <h1 class="titulo">Carolina Muñoz</h1>
              <hr class="line" style="background: crimson;">
              <H6>DISEÑADORA</H6>
            </div>
            <div class="back">
              <h2>DISEÑADORA</h2>
              <br>
              <p>Creadora y diseñadora de pagina web y marca, encargada de organizar y
                actualizar informacion
                de
                "Palikari"
                Es una mujer organizada y creativa, con una gran capacidad de
                anilizis y solucion de
                problemas, en
                responsable y carismatica.
              </p>
            </div>
          </div>
        </div>

        <div class="cardBox2 col-5 m-2 p-4">
          <div class="card">
            <div class="front">
              <h1 class="titulo-nosotras">Mariana Sanchez</h1>
              <hr class="line">
              <h6>ILLUSTRADORA</h6>
            </div>
            <div class="back">
              <h2>ILLUSTRADORA</h2>
              <br>
              <p>Creadora de los personajes y diseños del fondo del comic "Castigo
                monstruoso" creadora de las
                voces y las
                interacciones
                en el comic interactivo, empatica y creativa, se carateriza por
                su esfuerzo y la dedicacion
                en lo que se
                desempeña,
                responsable y ordenada.
              </p>
            </div>
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

  <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <script defer src="./script.js"></script>
</body>

</html>