<?php
  session_start();
  require_once './php/usersAPI.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blinkee</title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
  </style>
  <link rel="stylesheet" href="./css/profilestyle.css">
  <link rel="icon" href="./img/productos2/logoshop.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
  <link rel="stylesheet" href="./css/flash.css">

  <!-- ===== Link Swiper's CSS ===== -->
  <!-- ===== Link Swiper's CSS ===== -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <!-- ===== Fontawesome CDN Link ===== -->
  <script src="https://kit.fontawesome.com/9c8b8bf025.js" crossorigin="anonymous"></script>
  <!-- Script cambio de pagina -->
  <script defer src="https://unpkg.com/swup@latest/dist/swup.min.js"></script>
  <script defer src="./js/swupScript.js"></script>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/styleMP.css">
  <link rel="stylesheet" href="./css/searchBarStyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <link rel="stylesheet" href="./css/flash.css">
  <link rel="stylesheet" href="./css/onBoarding.css">

  <link rel="stylesheet" href="./css/navBar/hamBar.css">


</head>

<body>

    <?php
      $API = new API_Users;
      if($API->Select()){
        
      }
      echo $_SESSION['user'];
    ?>
  <button class="onboarding-btn" style="display: none;">Show Demo</button>

  <div class="onboarding-overlay"></div>

  <div class="onboarding-container">
    <div class="content">
      <a href="#" class="skip-btn">Skip</a>

      <div class="dots">
        <div class="dot active"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>

      <div class="steps">
        <div class="step">
          <div class="image">
            <img style="height: 450px; width: 540px ; padding-left: 10px; padding-top: 10px;" src="./img/onBoarding/paso1-1.jpg" alt="" srcset="">
          </div>

          <h3>Paso 1</h3>
          <p>
            Puedes ver distintas categorias de nuestros productos por medio de la pagina principal. Puedes empezar por
            el catalogo de blinkees.
            O tambi??n puedes dar click <a href="./platillaProductos.html">aqu??</a>.
          </p>
        </div>

        <div class="step">
          <div class="image">
            <img style="height: 450px; width: 550px ;" src="./img/onBoarding/obd1.jpg" alt="" srcset="">

          </div>

          <h3>Paso 2</h3>
          <p>
            Agrega al carrito cualquier producto que desees comprar. Se vera reflejado en tu carrito personal.
          </p>
        </div>

        <div class="step">
          <div class="image">
            <img style="height: 550px; padding-left: 55px; padding-top: 10px;" src="./img/onBoarding/paso1-3.jpg" alt="" srcset="">

          </div>

          <h3>Paso 3</h3>
          <p>
            Ingresa tu m??todo de pago, direcci??n y finaliza la compra.
          </p>
        </div>

        <div class="step">
          <div class="image">
            <img style="height: 550px; object-fit: cover;" src="./img/Pink Online Shopping Instagram Post.png" alt="" srcset="">

          </div>

          <h3>??Gracias por visitar nuestra p??gina!</h3>
          <p>
            Si tienes alguna duda, no dudes en contactarnos por WhatsApp, Correo o tel??fono.
          </p>
        </div>
      </div>

      <button class="next-btn">Next</button>
    </div>
  </div>

  <div class="whole" style="overflow-x: hidden; position: relative;">

    <!-- MENU  -->
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-15e83d5b-2dba-4407-b7d7-2858a466b23f"></div>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="bootstrap" viewBox="0 0 118 94">
        <title>Bootstrap</title>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z">
        </path>
      </symbol>
      <symbol id="home" viewBox="0 0 16 16">
        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z">
        </path>
      </symbol>
      <symbol id="speedometer2" viewBox="0 0 16 16">
        <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z">
        </path>
        <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z">
        </path>
      </symbol>
      <symbol id="table" viewBox="0 0 16 16">
        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z">
        </path>
      </symbol>
      <symbol id="people-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z">
        </path>
      </symbol>
      <symbol id="grid" viewBox="0 0 16 16">
        <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z">
        </path>
      </symbol>
      <symbol id="collection" viewBox="0 0 16 16">
        <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z">
        </path>
      </symbol>
      <symbol id="calendar3" viewBox="0 0 16 16">
        <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z">
        </path>
        <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z">
        </path>
      </symbol>
      <symbol id="chat-quote-fill" viewBox="0 0 16 16">
        <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM7.194 6.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z">
        </path>
      </symbol>
      <symbol id="cpu-fill" viewBox="0 0 16 16">
        <path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"></path>
        <path d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5z">
        </path>
      </symbol>
      <symbol id="gear-fill" viewBox="0 0 16 16">
        <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z">
        </path>
      </symbol>
      <symbol id="speedometer" viewBox="0 0 16 16">
        <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z">
        </path>
        <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z">
        </path>
      </symbol>
      <symbol id="toggles2" viewBox="0 0 16 16">
        <path d="M9.465 10H12a2 2 0 1 1 0 4H9.465c.34-.588.535-1.271.535-2 0-.729-.195-1.412-.535-2z"></path>
        <path d="M6 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm.535-10a3.975 3.975 0 0 1-.409-1H4a1 1 0 0 1 0-2h2.126c.091-.355.23-.69.41-1H4a2 2 0 1 0 0 4h2.535z">
        </path>
        <path d="M14 4a4 4 0 1 1-8 0 4 4 0 0 1 8 0z"></path>
      </symbol>
      <symbol id="tools" viewBox="0 0 16 16">
        <path d="M1 0L0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z">
        </path>
      </symbol>
      <symbol id="chevron-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
        </path>
      </symbol>
      <symbol id="geo-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z">
        </path>
      </symbol>

      <symbol id="star" viewBox="0 0 16 16">
        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
      </symbol>
    </svg>
    <header class="p-3 border-bottom">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="./index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
            <img class="bi me-2" width="40" height="32" src="./img/productos2/logoshop.png" alt="">
          </a>

          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="./index.php" class="nav-link px-2 link-secondary">Inicio</a></li>
            <li><a href="./pagProductos.php" class="nav-link px-2 link-dark">Productos</a></li>
            <li><a href="./loginNew.php" class="nav-link px-2 link-dark">Conviertete en vendedor</a></li>
          </ul>

          <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input type="search" class="form-control" placeholder="Buscar..." aria-label="Search">
          </form>

          <!-- If there is a user signed in, we hide the buttons and show his profile picture -->
          <?php
          if (isset($_SESSION['user'])) {
            echo "<div class='dropdown text-end col-lg-auto mb-3 mb-lg-0 me-lg-3'>
                        <a href='#' class='d-block link-dark text-decoration-none dropdown-toggle' data-bs-toggle='dropdown' aria-expanded='false'>
                            <img src='./img/Productos/jinx.jpg' alt='mdo' width='32' height='32' class='rounded-circle'>
                        </a>
                        <ul class='dropdown-menu text-small'>
                            <li><a class='dropdown-item' href='./perfil.php'>Perfil</a></li>
                            <li>
                                <hr class='dropdown-divider'>
                            </li>
                            <li><a class='dropdown-item' href='./landingPage.html'>Salir</a></li>
                        </ul>
                    </div>";
          } else {
            echo "<div class='col-11 text-end col-lg-auto mb-3 mb-lg-0 me-lg-3'>
                        <a href='./loginNew.php'><button type='button' class='btn btn-outline-primary me-2' style='border: #f9af23; color: #f9af23;'>Inicia sesi??n</button></a>
                        <a href='./loginNew.php'><button type='button' class='btn btn-primary' style='background-color: #f9af23; color: #ffffff; border-color: black;'>Registrate</button></a>
                    </div>";
          }
          ?>


          <div class="btn-group">
            <a href="./carrito.php"><button type="button" class="btn btn-outline-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z">
                  </path>
                </svg>
                <span class="visually-hidden">Button</span>
              </button>
            </a>
          </div>
        </div>
      </div>
    </header>

    <div id="swup" class="anuncios transition-fade">
      <div class="product-collection">
        <div class="container">
          <div class="product-collection-wrapper">
            <!-- product col left -->
            <div class="product-col-left flex">
              <div class="product-col-content">
                <h2 class="md-title">Lo mejor de hoy </h2>
                <p class="text-light">Explora el catalogo de la mejor p??gina para la compra de productos en linea</p>
                <a href="./pagProductos.php"><button type="button" class="btn-dark" style="background-color: #feab0f;">Explora ahora</button></a>
              </div>
            </div>

            <!-- product col right -->
            <div class="product-col-right">
              <div class="product-col-r-top flex">
                <div class="product-col-content">
                  <h2 class="sm-title">Productos de temporada </h2>
                  <h2 class="md-title">Colecci??n de verano </h2>
                  <a href="./pagProductos.php?categoria=verano"><button type="button" class="btn-dark">Compra ahora</button></a>
                </div>
              </div>

              <div class="product-col-r-bottom">
                <!-- left -->
                <div class="flex">
                  <div class="product-col-content">
                    <h2 class="sm-title">Destacados</h2>
                    <h2 class="md-title">Los m??s vendidos </h2>
                    <a href="./pagProductos.php?categoria=masVendidos"><button type="button" class="btn-dark">Compra ahora</button></a>
                  </div>
                </div>
                <!-- right -->
                <div class="flex">
                  <div class="product-col-content">
                    <h2 class="sm-title">Tecnologia </h2>
                    <h2 class="md-title">Consolas y computadoras </h2>
                    <a href="./pagProductos.php?categoria=tecnologia"><button type="button" class="btn-dark">Compra ahora</button></a>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="pago-seguro-banner" style="overflow-x:hidden;">
      <img src="./img/pago-seguro.png" alt="">
    </div>

    <!-- Slider -->
    <div class="img-slider ">
      <div class="slide ">
        <img src="./img/slider2.png" alt="">
        <div class="info">
        </div>
      </div>

      <div class="slide active ">
        <img src="./img/slider5.png" alt="">
        <div class="info">
        </div>
      </div>

      <div class="slide ">
        <img src="./img/slider4.png" alt="">
        <div class="info">
        </div>
      </div>

      <div class="slide ">
        <img src="./img/slider3.webp" alt="">

        <div class="info">
        </div>
      </div>


      <div class="slide ">
        <img src="./img/verano.png" alt="">
        <div class="info">
        </div>
      </div>

      <div class="navigation">
        <div class="btn active"></div>
        <div class="btn"></div>
        <div class="btn"></div>
        <div class="btn"></div>
        <div class="btn"></div>
      </div>



    </div>
    <!-- Slider items recientemente vistos -->
    <div class="titulo-recientes transition-fade">
      <h1>Nuestros productos mas vendidos</h1>
    </div>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item ">
          <div class="album py-5 bg-light">
            <div class="container">
              <div class="productos">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                  <div class="col">
                    <div class="card shadow-sm">
                      <img src="./img/productos2/D_NQ_NP_2X_600484-MLA50342682195_062022-F.webp" role="img" preserveAspectRatio="xMidYMid slice" width="100%" height="225" focusable="false" alt="" style="object-fit: scale-down;width: 90%;height: 250px; cursor: pointer;">
                      <div class="card-body">
                        <p class="card-text">Telefono Redmi 30211</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Detalles</button>
                          </div>
                          <small class="fw-bolder">$4,000.00</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card shadow-sm">
                      <img src="./img/productos2/D_NQ_NP_722150-MLM51165123516_082022-O.webp" role="img" preserveAspectRatio="xMidYMid slice" width="100%" height="225" focusable="false" alt="" style="object-fit: scale-down;width: 90%;height: 250px; cursor: pointer;">
                      <div class="card-body">
                        <p class="card-text">Television Hisense 4K 43"</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Detalles</button>
                          </div>
                          <small class="fw-bolder">$14,000.00</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card shadow-sm">
                      <img src="./img/productos2/D_NQ_NP_2X_711640-MLA40178190244_122019-F.webp" role="img" preserveAspectRatio="xMidYMid slice" width="100%" height="225" focusable="false" alt="" style="object-fit: scale-down;width: 90%;height: 250px; cursor: pointer;">
                      <div class="card-body">
                        <p class="card-text">SSD Kingston 200gb</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Detalles</button>
                          </div>
                          <small class="fw-bolder">$1,000.00</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item active">
          <div class="album py-5 bg-light">
            <div class="container">
              <div class="productos">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                  <div class="col">
                    <div class="card shadow-sm">
                      <img src="./img/productos2/D_NQ_NP_883334-CBT49464632903_032022-O.webp" role="img" preserveAspectRatio="xMidYMid slice" width="100%" height="225" focusable="false" alt="" style="object-fit: scale-down;width: 90%;height: 250px; cursor: pointer;">
                      <div class="card-body">
                        <p class="card-text">Camara especial para cuidar tu casa</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Detalles</button>
                          </div>
                          <small class="fw-bolder">$400.00</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card shadow-sm">
                      <img src="./img/productos2/D_NQ_NP_881267-MLM50433913078_062022-O.webp" role="img" preserveAspectRatio="xMidYMid slice" width="100%" height="225" focusable="false" alt="" style="object-fit: scale-down;width: 90%;height: 250px; cursor: pointer;">
                      <div class="card-body">
                        <p class="card-text">Rasuradora para hombres color verde economica</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Detalles</button>
                          </div>
                          <small class="fw-bolder">$300.00</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card shadow-sm">
                      <img src="./img/productos2/D_NQ_NP_725015-CBT49582012318_042022-O.webp" role="img" preserveAspectRatio="xMidYMid slice" width="100%" height="225" focusable="false" alt="" style="object-fit: scale-down;width: 90%;height: 250px; cursor: pointer;">
                      <div class="card-body">
                        <p class="card-text">Caja sorpresa y misterio hasta $10,000 en valor</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Detalles</button>
                          </div>
                          <small class="fw-bolder">$4,000.00</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="album py-5 bg-light">
            <div class="container">
              <div class="productos">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                  <div class="col">
                    <div class="card shadow-sm">
                      <img src="./img/productos2/D_NQ_NP_628327-MLA46540625608_062021-O.webp" role="img" preserveAspectRatio="xMidYMid slice" width="100%" height="225" focusable="false" alt="" style="object-fit: scale-down;width: 90%;height: 250px; cursor: pointer;">

                      <div class="card-body">
                        <p class="card-text">Audifonos JBL inalambricos</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Detalles</button>
                          </div>
                          <small class="fw-bolder">$2,000.00</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card shadow-sm">
                      <img src="./img/productos2/D_NQ_NP_604252-MLM49285788555_032022-O.webp" role="img" preserveAspectRatio="xMidYMid slice" width="100%" height="225" focusable="false" alt="" style="object-fit: scale-down;width: 90%;height: 250px; cursor: pointer;">

                      <div class="card-body">
                        <p class="card-text">Silla gamer blanco y negro economica</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Detalles</button>
                          </div>
                          <small class="fw-bolder">$2,500.00</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card shadow-sm">
                      <img src="./img/productos2/D_NQ_NP_725015-CBT49582012318_042022-O.webp" role="img" preserveAspectRatio="xMidYMid slice" width="100%" height="225" focusable="false" alt="" style="object-fit: scale-down;width: 90%;height: 250px; cursor: pointer;">

                      <div class="card-body">
                        <p class="card-text">Caja sorpresa y misterio hasta $100,000 en valor</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Detalles</button>
                          </div>
                          <small class="fw-bolder">$40,000.00</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="fondo">
      <!-- PRODUCTOS DESTACADOS -->
      <h1 style="text-align: center; top: 30px;">Los mas populares</h1>
      <div class="container-productos2" id="productos">


        <div id="carouselExampleCaptions2" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item ">
              <div class="album py-5 bg-light">
                <div class="container">
                  <div class="productos">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                      <div class="col">
                        <div class="card shadow-sm">
                          <img src="./img/productos2/D_NQ_NP_2X_600484-MLA50342682195_062022-F.webp" role="img" preserveAspectRatio="xMidYMid slice" width="100%" height="225" focusable="false" alt="" style="object-fit: scale-down;width: 90%;height: 250px; cursor: pointer;">
                          <div class="card-body">
                            <p class="card-text">Telefono Redmi 30211</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Detalles</button>
                              </div>
                              <small class="fw-bolder">$4,000.00</small>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card shadow-sm">
                          <img src="./img/productos2/D_NQ_NP_722150-MLM51165123516_082022-O.webp" role="img" preserveAspectRatio="xMidYMid slice" width="100%" height="225" focusable="false" alt="" style="object-fit: scale-down;width: 90%;height: 250px; cursor: pointer;">
                          <div class="card-body">
                            <p class="card-text">Television Hisense 4K 43"</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Detalles</button>
                              </div>
                              <small class="fw-bolder">$14,000.00</small>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card shadow-sm">
                          <img src="./img/productos2/D_NQ_NP_2X_711640-MLA40178190244_122019-F.webp" role="img" preserveAspectRatio="xMidYMid slice" width="100%" height="225" focusable="false" alt="" style="object-fit: scale-down;width: 90%;height: 250px; cursor: pointer;">
                          <div class="card-body">
                            <p class="card-text">SSD Kingston 200gb</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Detalles</button>
                              </div>
                              <small class="fw-bolder">$1,000.00</small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="album py-5 bg-light">
                <div class="container">
                  <div class="productos">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                      <div class="col">
                        <div class="card shadow-sm">
                          <img src="./img/productos2/D_NQ_NP_883334-CBT49464632903_032022-O.webp" role="img" preserveAspectRatio="xMidYMid slice" width="100%" height="225" focusable="false" alt="" style="object-fit: scale-down;width: 90%;height: 250px; cursor: pointer;">
                          <div class="card-body">
                            <p class="card-text">Camara especial para cuidar tu casa</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Detalles</button>
                              </div>
                              <small class="fw-bolder">$400.00</small>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card shadow-sm">
                          <img src="./img/productos2/D_NQ_NP_881267-MLM50433913078_062022-O.webp" role="img" preserveAspectRatio="xMidYMid slice" width="100%" height="225" focusable="false" alt="" style="object-fit: scale-down;width: 90%;height: 250px; cursor: pointer;">
                          <div class="card-body">
                            <p class="card-text">Rasuradora para hombres color verde economica</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Detalles</button>
                              </div>
                              <small class="fw-bolder">$300.00</small>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card shadow-sm">
                          <img src="./img/productos2/D_NQ_NP_725015-CBT49582012318_042022-O.webp" role="img" preserveAspectRatio="xMidYMid slice" width="100%" height="225" focusable="false" alt="" style="object-fit: scale-down;width: 90%;height: 250px; cursor: pointer;">
                          <div class="card-body">
                            <p class="card-text">Caja sorpresa y misterio hasta $10,000 en valor</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Detalles</button>
                              </div>
                              <small class="fw-bolder">$4,000.00</small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item active">
              <div class="album py-5 bg-light">
                <div class="container">
                  <div class="productos">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                      <div class="col">
                        <div class="card shadow-sm">
                          <img src="./img/productos2/D_NQ_NP_628327-MLA46540625608_062021-O.webp" role="img" preserveAspectRatio="xMidYMid slice" width="100%" height="225" focusable="false" alt="" style="object-fit: scale-down;width: 90%;height: 250px; cursor: pointer;">

                          <div class="card-body">
                            <p class="card-text">Audifonos JBL inalambricos</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Detalles</button>
                              </div>
                              <small class="fw-bolder">$2,000.00</small>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card shadow-sm">
                          <img src="./img/productos2/D_NQ_NP_604252-MLM49285788555_032022-O.webp" role="img" preserveAspectRatio="xMidYMid slice" width="100%" height="225" focusable="false" alt="" style="object-fit: scale-down;width: 90%;height: 250px; cursor: pointer;">

                          <div class="card-body">
                            <p class="card-text">Silla gamer blanco y negro economica</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Detalles</button>
                              </div>
                              <small class="fw-bolder">$2,500.00</small>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card shadow-sm">
                          <img src="./img/productos2/D_NQ_NP_725015-CBT49582012318_042022-O.webp" role="img" preserveAspectRatio="xMidYMid slice" width="100%" height="225" focusable="false" alt="" style="object-fit: scale-down;width: 90%;height: 250px; cursor: pointer;">

                          <div class="card-body">
                            <p class="card-text">Caja sorpresa y misterio hasta $100,000 en valor</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Detalles</button>
                              </div>
                              <small class="fw-bolder">$40,000.00</small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>




      </div>

      <div id="carouselExampleCaptions3" class="carousel slide" data-bs-ride="carousel">
        <h1 style="text-align: center;">Recomendados para t??</h1>
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="album py-5 bg-light">
              <div class="container">
                <div class="productos">
                  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                      <div class="card shadow-sm">
                        <img src="./img/productos2/D_NQ_NP_2X_600484-MLA50342682195_062022-F.webp" role="img" preserveAspectRatio="xMidYMid slice" width="100%" height="225" focusable="false" alt="" style="object-fit: scale-down;width: 90%;height: 250px; cursor: pointer;">
                        <div class="card-body">
                          <p class="card-text">Telefono Redmi 30211</p>
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                              <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                              <button type="button" class="btn btn-sm btn-outline-secondary">Detalles</button>
                            </div>
                            <small class="fw-bolder">$4,000.00</small>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card shadow-sm">
                        <img src="./img/productos2/D_NQ_NP_722150-MLM51165123516_082022-O.webp" role="img" preserveAspectRatio="xMidYMid slice" width="100%" height="225" focusable="false" alt="" style="object-fit: scale-down;width: 90%;height: 250px; cursor: pointer;">
                        <div class="card-body">
                          <p class="card-text">Television Hisense 4K 43"</p>
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                              <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                              <button type="button" class="btn btn-sm btn-outline-secondary">Detalles</button>
                            </div>
                            <small class="fw-bolder">$14,000.00</small>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card shadow-sm">
                        <img src="./img/productos2/D_NQ_NP_2X_711640-MLA40178190244_122019-F.webp" role="img" preserveAspectRatio="xMidYMid slice" width="100%" height="225" focusable="false" alt="" style="object-fit: scale-down;width: 90%;height: 250px; cursor: pointer;">
                        <div class="card-body">
                          <p class="card-text">SSD Kingston 200gb</p>
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                              <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                              <button type="button" class="btn btn-sm btn-outline-secondary">Detalles</button>
                            </div>
                            <small class="fw-bolder">$1,000.00</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="album py-5 bg-light">
              <div class="container">
                <div class="productos">
                  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                      <div class="card shadow-sm">
                        <img src="./img/productos2/D_NQ_NP_883334-CBT49464632903_032022-O.webp" role="img" preserveAspectRatio="xMidYMid slice" width="100%" height="225" focusable="false" alt="" style="object-fit: scale-down;width: 90%;height: 250px; cursor: pointer;">
                        <div class="card-body">
                          <p class="card-text">Camara especial para cuidar tu casa</p>
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                              <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                              <button type="button" class="btn btn-sm btn-outline-secondary">Detalles</button>
                            </div>
                            <small class="fw-bolder">$400.00</small>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card shadow-sm">
                        <img src="./img/productos2/D_NQ_NP_881267-MLM50433913078_062022-O.webp" role="img" preserveAspectRatio="xMidYMid slice" width="100%" height="225" focusable="false" alt="" style="object-fit: scale-down;width: 90%;height: 250px; cursor: pointer;">
                        <div class="card-body">
                          <p class="card-text">Rasuradora para hombres color verde economica</p>
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                              <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                              <button type="button" class="btn btn-sm btn-outline-secondary">Detalles</button>
                            </div>
                            <small class="fw-bolder">$300.00</small>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card shadow-sm">
                        <img src="./img/productos2/D_NQ_NP_725015-CBT49582012318_042022-O.webp" role="img" preserveAspectRatio="xMidYMid slice" width="100%" height="225" focusable="false" alt="" style="object-fit: scale-down;width: 90%;height: 250px; cursor: pointer;">
                        <div class="card-body">
                          <p class="card-text">Caja sorpresa y misterio hasta $10,000 en valor</p>
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                              <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                              <button type="button" class="btn btn-sm btn-outline-secondary">Detalles</button>
                            </div>
                            <small class="fw-bolder">$4,000.00</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="album py-5 bg-light">
              <div class="container">
                <div class="productos">
                  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                      <div class="card shadow-sm">
                        <img src="./img/productos2/D_NQ_NP_628327-MLA46540625608_062021-O.webp" role="img" preserveAspectRatio="xMidYMid slice" width="100%" height="225" focusable="false" alt="" style="object-fit: scale-down;width: 90%;height: 250px; cursor: pointer;">

                        <div class="card-body">
                          <p class="card-text">Audifonos JBL inalambricos</p>
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                              <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                              <button type="button" class="btn btn-sm btn-outline-secondary">Detalles</button>
                            </div>
                            <small class="fw-bolder">$2,000.00</small>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card shadow-sm">
                        <img src="./img/productos2/D_NQ_NP_604252-MLM49285788555_032022-O.webp" role="img" preserveAspectRatio="xMidYMid slice" width="100%" height="225" focusable="false" alt="" style="object-fit: scale-down;width: 90%;height: 250px; cursor: pointer;">

                        <div class="card-body">
                          <p class="card-text">Silla gamer blanco y negro economica</p>
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                              <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                              <button type="button" class="btn btn-sm btn-outline-secondary">Detalles</button>
                            </div>
                            <small class="fw-bolder">$2,500.00</small>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card shadow-sm">
                        <img src="./img/productos2/D_NQ_NP_725015-CBT49582012318_042022-O.webp" role="img" preserveAspectRatio="xMidYMid slice" width="100%" height="225" focusable="false" alt="" style="object-fit: scale-down;width: 90%;height: 250px; cursor: pointer;">

                        <div class="card-body">
                          <p class="card-text">Caja sorpresa y misterio hasta $100,000 en valor</p>
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                              <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                              <button type="button" class="btn btn-sm btn-outline-secondary">Detalles</button>
                            </div>
                            <small class="fw-bolder">$40,000.00</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- FOOTER -->
      <section class="footer" style="overflow-y: hidden;">


        <div class="social">
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-snapchat"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-github"></i></a>
        </div>



        <ul class="list">
          <li>
            <a href="./index.php">Inicio</a>
          </li>
          <li>
            <a href="#">Servicios</a>
          </li>
          <li>
            <a href="#">Sobre nosotros</a>
          </li>
          <li>
            <a href="#">Terminos</a>
          </li>
          <li>
            <a href="#">Politica de privacidad</a>
          </li>
        </ul>

        <div class="pago" style="overflow-x:hidden;">
          <img src="./img/pago.png" alt="">
        </div>

        <p class="copyright">
          LMAD FCFM @ 2022
        </p>

      </section>

    </div>
    <script src="./js/searchBar.js"></script>
    <script src="./js/searchBarScript.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./js/productos.js"></script>



    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
      var currentSlidesPerView;

      function updateSwiperSlides(windowWidth) {
        var totalSlidesPerView;
        if (windowWidth > 1000) {
          totalSlidesPerView = 3;
        } else if (windowWidth > 800) {
          totalSlidesPerView = 2;
        } else {
          totalSlidesPerView = 1;
        }

        if (currentSlidesPerView === totalSlidesPerView) return;

        currentSlidesPerView = totalSlidesPerView;

        //Initialize Swiper
        new Swiper('.mySwiper', {
          slidesPerView: currentSlidesPerView,
          spaceBetween: 10,
          slidesPerGroup: currentSlidesPerView,
          loop: true,
          loopFillGroupWithBlank: false,
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        });
      }
      $.ajax({
        type: "GET",
        dataType: "json",
        url: "RevisarSesion"
      }).done(function(data) {
        console.log(data);
        if (data.respuesta == false) {
          alert("No cuentas con una sesion activa");
        } else {
          alert("Hola");
          document.getElementById("loginUser").style.display = 'none';
        }

      }).fail(function(jqXHR, textEstado) {
        console.log("La solicitud regreso con un error: " + textEstado);
      });




      //OnLoad: (check the screen size when the page loads)
      $(document).ready(function() {

        windowWidth = $(window).width();
        updateSwiperSlides(windowWidth);

        //onResize (check the screen size when the page resizes)
        $(window).resize(function() {
          windowWidth = $(window).width();
          updateSwiperSlides(windowWidth);
        });
      });
    </script>


    <!-- On boarding -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="./js/onBoarding.js"></script>
    <script src="./js/searchBar.js"></script>
    <script src="./js/searchBarScript.js"></script>


    <script src="./js/searchBarScript.js"></script>
    <script src="./js/onBoarding.js"></script>


</body>

</html>