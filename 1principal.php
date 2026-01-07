<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Our Wedding M&E</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600&display=swap" rel="stylesheet">

  <?php include_once("1header.php") ?>

  <style>
    body {
      background-color: #8A9A74;
      margin: 0;
      padding: 0;
      font-family: 'Cormorant Garamond', serif;
    }

    .img-contenedor {
      text-align: center;
      width: 100%;
      overflow: hidden;
    }

    .img-contenedor img {
      width: 100%;
      height: auto;
      display: block;
    }

    .btn-bajo-imagen {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .boton-elegante {
      padding: 20px 40px;
      background-color: #d8b37c;
      color: #4c1424;
      border: none;
      border-radius: 10px;
      font-size: 20px;
      font-family: 'Cormorant Garamond', serif;
      cursor: pointer;
      box-shadow: inset 0 -3px 0 rgba(0, 0, 0, 0.3),
                  0 6px 0 #827956,
                  0 10px 20px rgba(0, 0, 0, 0.2);
      transition: all 0.3s ease;
    }

    .boton-elegante:hover {
      background-color: #4c1424;
      color: #d8b37c;
      transform: translateY(-3px);
    }

    .boton-elegante:active {
      transform: translateY(2px);
      box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.3),
                  0 4px 0 #5a5335,
                  0 6px 10px rgba(0, 0, 0, 0.2);
    }

    .contenedor-principal {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 50px;
      padding: 40px 20px;
      flex-wrap: wrap;
    }

    .contenedor-izquierda img {
      max-width: 500px;
      width: 80%;
      height: auto;
      border-radius: 12px;
      display: block;
      margin: 0 auto;
    }

    .bloque-contador {
      display: flex;
      flex-direction: column;
      align-items: center;
      color: #fff;
      text-align: center;
    }

    .contador-titulo, .contador-titulo2 {
      font-size: 42px;
      margin: 10px 0;
      color: #d8b37c;
    }

    .contador {
      display: flex;
      justify-content: center;
      gap: 10px;
      flex-wrap: wrap;
    }

    .contador div {
      background: #fff;
      color: #000;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
      min-width: 50px;
      font-size: 25px;
      font-weight: bold;
    }

    .contador span {
      display: block;
      font-size: 10px;
      margin-top: 8px;
      font-weight: normal;
    }

    @media (max-width: 768px) {
      .boton-elegante {
        padding: 16px 28px;
        font-size: 16px;
      }

      .contador-titulo, .contador-titulo2 {
        font-size: 32px;
      }

      .contador div {
        padding: 15px;
        font-size: 24px;
      }

      .contenedor-principal {
        gap: 30px;
        padding: 20px 10px;
      }
    }

    @media (max-width: 480px) {
      .boton-elegante {
        padding: 12px 22px;
        font-size: 14px;
      }

      .contador-titulo, .contador-titulo2 {
        font-size: 26px;
      }

      .contador div {
        font-size: 20px;
        padding: 12px;
      }
    }

    .offcanvas {
      background-color: #4c1424;
    }

    .nav-link {
      color: #6c5c3f;
      font-weight: 500;
    }

    .nav-link:hover {
      color: #d8b37c;
    }
  </style>
</head>

<body>
  <main style="margin-top: 70px;">

    <!-- Image -->
    <div class="img-contenedor"> 
      <img src="multimedia/imagen principal (3).png" alt="Main wedding image" />
    </div>

    <!-- Button below image -->
    <div class="btn-bajo-imagen">
      <button class="boton-elegante" onclick="window.location.href='1historia.php'">
        Discover Our Story
      </button>
    </div>

    <!-- Countdown -->
    <div class="contenedor-principal">
      <div class="contenedor-izquierda">
        <img src="multimedia/3.jpg" alt="Calendar" />
      </div>

      <div class="bloque-contador">
        <h2 class="contador-titulo">Only...</h2>
        <div class="contador" id="contador">
          <div><div id="dias">0</div><span>Days</span></div>
          <div><div id="horas">0</div><span>Hours</span></div>
          <div><div id="minutos">0</div><span>Minutes</span></div>
          <div><div id="segundos">0</div><span>Seconds</span></div>
        </div>
        <h2 class="contador-titulo2">Until our wedding</h2>
      </div>
    </div>

    <!-- Countdown script -->
    <script>
      function actualizarContador() {
        const fechaBoda = new Date('2026-06-28T11:00:00');
        const ahora = new Date();
        const diferencia = fechaBoda - ahora;

        if (diferencia > 0) {
          const dias = Math.floor(diferencia / (1000 * 60 * 60 * 24));
          const horas = Math.floor((diferencia % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          const minutos = Math.floor((diferencia % (1000 * 60 * 60)) / (1000 * 60));
          const segundos = Math.floor((diferencia % (1000 * 60)) / 1000);

          document.getElementById('dias').innerText = dias;
          document.getElementById('horas').innerText = horas;
          document.getElementById('minutos').innerText = minutos;
          document.getElementById('segundos').innerText = segundos;
        } else {
          document.getElementById('contador').innerHTML = "<p>The big day has arrived! 💍✨</p>";
        }
      }

      actualizarContador();
      setInterval(actualizarContador, 1000);
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<div class="container text-center mt-5">
  <button class="btn rounded-pill px-4 py-2"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasRight"
          aria-controls="offcanvasRight"
          style="background-color: #f5f5dc; color: #000;">
    ☰ Menu
  </button>
</div>

<!-- Side menu (offcanvas) -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header border-bottom" style="border-color: #d8b37c;">
    <h5 class="offcanvas-title fw-bold text-uppercase" id="offcanvasRightLabel">
      <i class="bi bi-info-circle-fill me-2" style="color: #0f0d0bff;"></i>More Information
    </h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>

  <div class="offcanvas-body px-4">
    <ul class="navbar-nav">
      <li class="nav-item mb-3">
        <a class="nav-link d-flex align-items-center" href="1principal.php">
          <i class="bi bi-house-door-fill me-2"></i>Home
        </a>
       <li class="nav-item mb-3">
        <a class="nav-link d-flex align-items-center fs-5" href="1confirmacion.php">
          <i class="bi bi-clipboard-check-fill me-2"></i> RSVP Confirmation
        </a>
      </li>
      </li>
      <li class="nav-item mb-3">
        <a class="nav-link d-flex align-items-center" href="1ubicacion.php">
          <i class="bi bi-geo-alt-fill me-2"></i>Location
        </a>
      </li>
      <li class="nav-item mb-3">
        <a class="nav-link d-flex align-items-center" href="1itinerario.php">
          <i class="bi bi-calendar-heart-fill me-2"></i>Schedule
        </a>
      </li>
      <li class="nav-item mb-3">
        <a class="nav-link d-flex align-items-center" href="1galeria.php">
          <i class="bi bi-images me-2"></i>Gallery
        </a>
      </li>
      <li class="nav-item mb-3">
        <a class="nav-link d-flex align-items-center" href="1indicaciones.php">
          <i class="bi bi-map-fill me-2"></i>Guidelines
        </a>
      </li>
      <li class="nav-item mb-3">
        <a class="nav-link d-flex align-items-center" href="1nuestra_información.php">
          <i class="bi bi-people-fill me-2"></i>Our Information
        </a>
      </li>
      <li class="nav-item mb-3">
        <a class="nav-link d-flex align-items-center" href="1historia.php">
          <i class="bi bi-stars me-2"></i>Our Story
        </a>
      </li>
    </ul>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  </main>

  <footer><?php include_once("1fooder.php") ?></footer>
</body>
</html>



