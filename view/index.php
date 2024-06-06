<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="./assets/img/logo_whiteLine.png" type="image/x-icon" />
  <title>Palikari</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./assets/css/styles.css" />
  <link rel="stylesheet" href="./assets/css/navbar.css" />
  <link rel="stylesheet" href="./assets/css/bottonStyle.css" />
</head>

<body>



  <div class="w-100 h-100 mask" id="inicio">

    <!-- navbar -->
    <?php

    $navbarRoutes = array(
      'logoImgSrc' => './assets/img/logo_whiteLine.png',
      'logo' => 'index.php',
      'inicio' => 'index.php',
      'comic' => '#comic',
      'equipo' => '#equipo',
      'tienda' => './pages/tienda.php',
      'iniciarSesion' => './pages/auth/login.php'
    );

    include_once './partials/navbar.php';

    ?>

    <!-- seection #1 -->
    <section id="section1" class="section active">
      <div class="inicio">
        <div class="scroll">
          <p>Bienvenido a Palikari </p>
          <p>Unete a este viaje</p>
        </div>

        <img src="./assets/img/atn_levantando_lanza_2.gif" alt="" class="img-atenea" />
        <div class="inicio-content bg-dark p-3 rounded-4 opacity-75 shadow-lg mt-5">
          <h1>
            PALIKARI
            <ion-icon class="music-note-icon" name="musical-note-outline"></ion-icon>
          </h1>
          <p class="fw-light">
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
            <img src="./assets/img/iconos_personajes/atenea.png" class="" />
            <h3>Atenea</h3>
            <p class="d-block text-center">Descripción del personaje</p>
          </div>
          <div class="swiper-slide">
            <img src="./assets/img/iconos_personajes/humanamedusa.png" class="" />
            <h3>Medusa</h3>
            <p class="d-block text-center">Descripción del personaje</p>
          </div>
          <div class="swiper-slide">
            <img src="./assets/img/iconos_personajes/medusamo.png" class="" />
            <h3>medusamo</h3>
            <p class="d-block text-center">Descripción del personaje</p>
          </div>
          <div class="swiper-slide">
            <img src="./assets/img/iconos_personajes/perseo.png" class="" />
            <h3>Perseo</h3>
            <p class="d-block text-center">Descripción del personaje</p>
          </div>
          <div class="swiper-slide">
            <img src="./assets/img/iconos_personajes/poseidon.png" class="" />
            <h3>Poseidon</h3>
            <p class="d-block text-center">Descripción del personaje</p>
          </div>
          <div class="swiper-slide">
            <img src="./assets/img/iconos_personajes/rey.png" class="" />
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
          <img src="./assets/img/iconos_personajes/todes.png" alt="" />
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
          </div>
        </div>
      </div>
    </section>

    <!-- buttons -->
    <nav class="bottom-nav">
      <button onclick="prevSection()" class="btn btn-warning">
        <i class="bi bi-chevron-double-left"></i>
      </button>
      <button onclick="nextSection()" class="btn btn-warning">
        <i class="bi bi-chevron-double-right"></i>
      </button>
    </nav>
  </div>

  <div class="container-fluid pb-5 index-content">
    <div class="container-fluid p-5" id="comic">

      <!-- comic title -->
      <div class="row">
        <div class="d-flex justify-content-center my-2 mx-2 comic-title">
          <h2 class="d-inline border-top w-25 text-dark fw-bold border-warning mb-3" >
            COMIC
          </h2>
        </div>
      </div>
      <!-- comic -->
      <div class="row justify-content-center align-items-center second-prom-panel">
        <div class="col-sm comic">
          <img src="./assets/img/templo.png" alt="">
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

    <div class="row d-flex">
      <!-- Button trigger modal -->
      <div class="col-8 mx-auto d-flex align-items-end atenea-btn-box">
        <button type="button" data-bs-toggle="modal" data-bs-target="#ateneaModal" class="atenea-btn">
          <img src="./assets/img/tienda/boton/atenea_boton.png" alt="" class="">
          <div class="atenea-btn-text">
            <span>Conoce a Atenea</span>
            <i class="bi bi-caret-right"></i>
          </div>
        </button>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="ateneaModal" tabindex="-1" aria-labelledby="ateneaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="ateneaModalLabel">
                Palikari
              </h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      ¿Cuáles eran las habilidades distintivas
                      de Atenea en la mitología griega?
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body d-flex">
                      <div>
                        Atenea era conocida por su
                        sabiduría, estrategia militar y
                        habilidades en la guerra justa.
                        También se le asociaba con la
                        artesanía y las artes domésticas
                      </div>
                      <div>
                        <img src="./img/pepito22.webp" alt="" width="200px" height="200px" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      ¿Cuál era el símbolo animal de Atenea y
                      qué significado tenía?
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      El búho era el símbolo animal de Atenea,
                      representando la sabiduría y la
                      inteligencia en la mitología griega
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      ¿Quiénes fueron los padres de Atenea?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Atenea no tuvo una madre en el sentido
                      convencional. Según la mitología griega,
                      surgió completamente armada de la cabeza
                      de Zeus después de que este último
                      sufriera un fuerte dolor de cabeza.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                Close
              </button>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- nosotras -->
    <div class="container-fluid">

      <!-- titulo nosotras -->
      <div class="row">
        <div class="d-flex justify-content-center my-2 mx-2 comic-title">
          <h2 class="d-inline border-top w-25 text-dark fw-bold border-warning mb-3" >
            NOSOTRAS
          </h2>
        </div>
      </div>

      <div class="boxesContainer row justify-content-around">

        <div class="cardBox1 col-5 m-2 p-4">
          <div class="card">
            <div class="front">
              <h1 class="titulo-nosotras">Carolina Muñoz</h1>
              <hr class="line">
              <h6>DISEÑADORA</h6>
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
    <!-- <div class="space pb-5"></div> -->
  </div>

  <?php
  $footerRoutes = array(
    'logoImgSrc' => './assets/img/logo_whiteLine.png'
  );
  include_once './partials/footer.php';
  ?>
  <!-- footer -->

  <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script defer src="./assets/js/script.js"></script>
</body>

</html>