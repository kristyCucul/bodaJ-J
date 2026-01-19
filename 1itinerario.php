<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include_once("1header.php") ?>
  <!-- Romantic font -->
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;700&display=swap" rel="stylesheet">
</head>

<style>
  body {
    background-color: #E8E3D4; /* Antique White */
    color: #4A3B36; /* Brown Earth */
    font-family: 'Cormorant Garamond', serif;
  }

  .contenedor-principal {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 50px;
    flex-wrap: wrap;
  }

  .contenedor-izquierda img {
    max-width: 600px;
    height: 400px;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(74, 59, 54, 0.25);
  }

  .bloque-contador {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .contador {
    display: flex;
    justify-content: center;
    gap: 20px;
    font-size: 28px;
    flex-wrap: wrap;
  }

  .contador div {
    background: #8A9A74;
    color: #E8E3D4;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 6px 15px rgba(74, 59, 54, 0.3);
    min-width: 90px;
    text-align: center;
  }

  .contador span {
    display: block;
    font-size: 18px;
    margin-top: 5px;
  }

  .contador-titulo,
  .contador-titulo2 {
    font-size: 40px;
    margin: 15px 0;
    color: #4A3B36;
  }

  .itinerario-boda {
    background: linear-gradient(to bottom right, #E8E3D4, #ffffff);
    padding: 4rem 2rem;
    color: #4A3B36;
  }

  .titulo-itinerario {
    text-align: center;
    font-size: 2.5rem;
    color: #8A9A74;
    margin-bottom: 3rem;
    font-weight: bold;
  }

  .timeline {
    display: flex;
    flex-direction: column;
    gap: 2rem;
    max-width: 800px;
    margin: 0 auto;
    position: relative;
  }

  .timeline::before {
    content: '';
    position: absolute;
    left: 50%;
    width: 4px;
    height: 100%;
    background: #8A9A74;
    transform: translateX(-50%);
  }

  .timeline-item {
    background: #ffffff;
    border: 2px solid #8A9A74;
    padding: 1.5rem;
    position: relative;
    width: 100%;
    max-width: 360px;
    border-radius: 14px;
    box-shadow: 0 6px 20px rgba(74, 59, 54, 0.15);
  }

  .timeline-item:nth-child(odd) {
    align-self: flex-start;
  }

  .timeline-item:nth-child(even) {
    align-self: flex-end;
  }

  .timeline-time {
    font-weight: bold;
    color: #4A3B36;
    font-size: 1.1rem;
    margin-bottom: 0.5rem;
  }

  .timeline-content {
    color: #8A9A74;
    font-size: 1.1rem;
  }

  @media (max-width: 768px) {
    .timeline::before {
      left: 8px;
    }

    .timeline-item {
      align-self: flex-start !important;
      margin-left: 2rem;
      max-width: 100%;
    }
  }
</style>

<body>
<main style="margin-top: 30px;">
  <div class="contenedor-principal">
    <div class="contenedor-izquierda">
      <img src="multimedia/calendar.png" alt="Calendar">
    </div>

    <div class="bloque-contador">
      <h2 class="contador-titulo">Time left...</h2>

      <div class="contador" id="contador">
        <div><div id="dias">0</div><span>Days</span></div>
        <div><div id="horas">0</div><span>Hours</span></div>
        <div><div id="minutos">0</div><span>Minutes</span></div>
        <div><div id="segundos">0</div><span>Seconds</span></div>
      </div>

      <h2 class="contador-titulo2">Until our wedding</h2>
    </div>
  </div>

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

  <!-- Wedding itinerary section -->
  <section class="itinerario-boda">
    <h2 class="titulo-itinerario">Our Wedding Itinerary</h2>

    <div class="timeline">
      <div class="timeline-item">
        <div class="timeline-time">10:00 a.m – 10:30 a.m</div>
        <div class="timeline-content">Guest arrival and welcome</div>
      </div>

      <div class="timeline-item">
        <div class="timeline-time">11:00 a.m – 1:30 p.m</div>
        <div class="timeline-content">Blessing ceremony</div>
      </div>

      <div class="timeline-item">
        <div class="timeline-time">1:40 p.m – 2:00 p.m</div>
        <div class="timeline-content">Blessing of the couple</div>
      </div>

      <div class="timeline-item">
        <div class="timeline-time">2:00 p.m – 2:30 p.m</div>
        <div class="timeline-content">Celebration banquet</div>
      </div>

      <div class="timeline-item">
        <div class="timeline-time">2:40 p.m – 4:30 p.m</div>
        <div class="timeline-content">Reception and final celebration</div>
      </div>
    </div>
  </section>
</main>
</body>

<footer>
  <?php include_once("1fooder.php") ?>
</footer>
</html>

