<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nuestra Boda M&E</title>

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
      overflow-x: hidden;
    }

    main {
      margin-top: 70px;
    }

    /* IMAGEN */
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

    /* BOTÓN */
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
      box-shadow:
        inset 0 -3px 0 rgba(0, 0, 0, 0.3),
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
      box-shadow:
        inset 0 2px 4px rgba(0, 0, 0, 0.3),
        0 4px 0 #5a5335,
        0 6px 10px rgba(0, 0, 0, 0.2);
    }

    /* CONTENEDOR PRINCIPAL */
    .contenedor-principal {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 60px;
      padding: 60px 20px;
      flex-wrap: wrap;
    }

    /* CALENDARIO */
    .calendar {
      background: #8fa27a;
      padding: 30px;
      border-radius: 15px;
      text-align: center;
      width: 400px;
      max-width: 100%;
      box-shadow: 0 10px 25px rgba(0,0,0,0.3);
    }

    .calendar h1 {
      color: #f5f5f5;
      font-size: 32px;
      margin-bottom: 20px;
      letter-spacing: 2px;
    }

    .days {
      display: grid;
      grid-template-columns: repeat(7, 1fr);
      color: #f0f0f0;
      font-size: 14px;
      margin-bottom: 10px;
      gap: 5px;
    }

    .dates {
      display: grid;
      grid-template-columns: repeat(7, 1fr);
      gap: 10px;
    }

    .date {
      padding: 10px;
      font-size: 18px;
      color: #000;
      background: rgba(255,255,255,0.7);
      border-radius: 10px;
    }

    .wedding {
      border: 2px solid #c8a96a;
      border-radius: 50%;
      font-weight: bold;
      position: relative;
      background: white;
    }

    .wedding::after {
      content: "❤";
      position: absolute;
      bottom: -18px;
      left: 50%;
      transform: translateX(-50%);
      font-size: 14px;
      color: white;
    }

    /* CONTADOR */
    .bloque-contador {
      display: flex;
      flex-direction: column;
      align-items: center;
      color: white;
      text-align: center;
    }

    .contador-titulo,
    .contador-titulo2 {
      font-size: 42px;
      margin: 10px 0;
      color: #d8b37c;
    }

    .contador {
      display: flex;
      justify-content: center;
      gap: 15px;
      flex-wrap: wrap;
      margin-top: 15px;
    }

    .contador div {
      background: white;
      color: black;
      padding: 20px;
      border-radius: 12px;
      min-width: 90px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
      font-size: 28px;
      font-weight: bold;
    }

    .contador span {
      display: block;
      font-size: 12px;
      margin-top: 8px;
      font-weight: normal;
    }

    /* MENÚ */
    .offcanvas {
      background-color: #4c1424;
    }

    .nav-link {
      color: #d8b37c;
      font-weight: 500;
      transition: 0.3s;
    }

    .nav-link:hover {
      color: white;
      transform: translateX(5px);
    }

    /* FOOTER */
    footer {
      width: 100%;
      display: block;
      margin-top: 80px;
      clear: both;
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {
      .contenedor-principal {
        flex-direction: column;
        gap: 40px;
        padding: 40px 15px;
      }

      .contador-titulo,
      .contador-titulo2 {
        font-size: 32px;
      }

      .contador div {
        min-width: 75px;
        padding: 15px;
        font-size: 22px;
      }

      .boton-elegante {
        padding: 15px 28px;
        font-size: 16px;
      }

      .calendar {
        width: 100%;
      }
    }

    @media (max-width: 480px) {
      .contador {
        gap: 10px;
      }

      .contador div {
        min-width: 65px;
        font-size: 18px;
      }

      .contador-titulo,
      .contador-titulo2 {
        font-size: 26px;
      }
    }
  </style>
</head>

<body>

<main>

  <!-- IMAGEN -->
  <div class="img-contenedor">
    <img src="multimedia/imagen principal (3).png" alt="Imagen de boda">
  </div>

  <!-- BOTÓN -->
  <div class="btn-bajo-imagen">
    <button class="boton-elegante"
      onclick="window.location.href='1historia.php'">
      Descubre Nuestra Historia
    </button>
  </div>

  <!-- CALENDARIO + CONTADOR -->
  <div class="contenedor-principal">

    <!-- CALENDARIO -->
    <div class="calendar">

      <h1>Junio 2026</h1>

      <div class="days">
        <div>Lun</div>
        <div>Mar</div>
        <div>Mié</div>
        <div>Jue</div>
        <div>Vie</div>
        <div>Sáb</div>
        <div>Dom</div>
      </div>

      <div class="dates">

        <div class="date">1</div>
        <div class="date">2</div>
        <div class="date">3</div>
        <div class="date">4</div>
        <div class="date">5</div>
        <div class="date">6</div>
        <div class="date">7</div>

        <div class="date">8</div>
        <div class="date">9</div>
        <div class="date">10</div>
        <div class="date">11</div>
        <div class="date">12</div>
        <div class="date">13</div>
        <div class="date">14</div>

        <div class="date">15</div>
        <div class="date">16</div>
        <div class="date">17</div>
        <div class="date">18</div>
        <div class="date">19</div>
        <div class="date">20</div>
        <div class="date">21</div>

        <div class="date">22</div>
        <div class="date">23</div>
        <div class="date">24</div>
        <div class="date">25</div>
        <div class="date">26</div>
        <div class="date">27</div>

        <div class="date wedding">28</div>

        <div class="date">29</div>
        <div class="date">30</div>

      </div>
    </div>

    <!-- CONTADOR -->
    <div class="bloque-contador">

      <h2 class="contador-titulo">Solo...</h2>

      <div class="contador" id="contador">

        <div>
          <div id="dias">0</div>
          <span>Días</span>
        </div>

        <div>
          <div id="horas">0</div>
          <span>Horas</span>
        </div>

        <div>
          <div id="minutos">0</div>
          <span>Minutos</span>
        </div>

        <div>
          <div id="segundos">0</div>
          <span>Segundos</span>
        </div>

      </div>

      <h2 class="contador-titulo2">
        Para nuestra boda
      </h2>

    </div>

  </div>

  <!-- BOTÓN MENÚ -->
  <div class="container text-center mt-5">
    <button
      class="btn rounded-pill px-4 py-2"
      type="button"
      data-bs-toggle="offcanvas"
      data-bs-target="#offcanvasRight"
      aria-controls="offcanvasRight"
      style="background-color: #f5f5dc; color: #000;">

      ☰ Menú

    </button>
  </div>

  <!-- MENÚ LATERAL -->
  <div class="offcanvas offcanvas-end"
       tabindex="-1"
       id="offcanvasRight"
       aria-labelledby="offcanvasRightLabel">

    <div class="offcanvas-header border-bottom"
         style="border-color: #d8b37c;">

      <h5 class="offcanvas-title fw-bold text-uppercase"
          id="offcanvasRightLabel">

        <i class="bi bi-info-circle-fill me-2"></i>
        Más Información

      </h5>

      <button type="button"
              class="btn-close"
              data-bs-dismiss="offcanvas"
              aria-label="Cerrar">
      </button>

    </div>

    <div class="offcanvas-body px-4">

      <ul class="navbar-nav">

        <li class="nav-item mb-3">
          <a class="nav-link d-flex align-items-center"
             href="1principal.php">
            <i class="bi bi-house-door-fill me-2"></i>Inicio
          </a>
        </li>

        <li class="nav-item mb-3">
          <a class="nav-link d-flex align-items-center"
             href="1confirmacion.php">
            <i class="bi bi-clipboard-check-fill me-2"></i>
            Confirmación RSVP
          </a>
        </li>

        <li class="nav-item mb-3">
          <a class="nav-link d-flex align-items-center"
             href="1ubicacion.php">
            <i class="bi bi-geo-alt-fill me-2"></i>Ubicación
          </a>
        </li>

        <li class="nav-item mb-3">
          <a class="nav-link d-flex align-items-center"
             href="1itinerario.php">
            <i class="bi bi-calendar-heart-fill me-2"></i>Itinerario
          </a>
        </li>

        <li class="nav-item mb-3">
          <a class="nav-link d-flex align-items-center"
             href="1galeria.php">
            <i class="bi bi-images me-2"></i>Galería
          </a>
        </li>

        <li class="nav-item mb-3">
          <a class="nav-link d-flex align-items-center"
             href="1indicaciones.php">
            <i class="bi bi-map-fill me-2"></i>Indicaciones
          </a>
        </li>

        <li class="nav-item mb-3">
          <a class="nav-link d-flex align-items-center"
             href="1nuestra_información.php">
            <i class="bi bi-people-fill me-2"></i>Nuestra Información
          </a>
        </li>

        <li class="nav-item mb-3">
          <a class="nav-link d-flex align-items-center"
             href="1historia.php">
            <i class="bi bi-stars me-2"></i>Nuestra Historia
          </a>
        </li>

      </ul>

    </div>
  </div>

</main>

<!-- FOOTER -->
<footer class="mt-5">
  <?php include_once("1fooder.php") ?>
</footer>

<!-- SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<script>
function actualizarContador() {

  const fechaBoda = new Date('2026-06-28T11:00:00');
  const ahora = new Date();

  const diferencia = fechaBoda - ahora;

  if (diferencia > 0) {

    const dias = Math.floor(diferencia / (1000 * 60 * 60 * 24));

    const horas = Math.floor(
      (diferencia % (1000 * 60 * 60 * 24))
      / (1000 * 60 * 60)
    );

    const minutos = Math.floor(
      (diferencia % (1000 * 60 * 60))
      / (1000 * 60)
    );

    const segundos = Math.floor(
      (diferencia % (1000 * 60))
      / 1000
    );

    document.getElementById('dias').innerText = dias;
    document.getElementById('horas').innerText = horas;
    document.getElementById('minutos').innerText = minutos;
    document.getElementById('segundos').innerText = segundos;

  } else {

    document.getElementById('contador').innerHTML =
      "<p>¡El gran día ha llegado! 💍✨</p>";

  }
}

actualizarContador();

setInterval(actualizarContador, 1000);
</script>

</body>
</html>
