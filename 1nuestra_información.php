<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bride & Groom Information</title>

  <?php include_once("1header.php") ?>

  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600&display=swap" rel="stylesheet">

  <style>
    :root {
      --oil-green: #8A9A74;
      --hot-fudge: #4A3B36;
      --antique-white: #E8E3D4;
    }

    body {
      margin: 0;
      font-family: 'Cormorant Garamond', serif;
      background-color: var(--antique-white);
      color: var(--hot-fudge);
    }

    main {
      margin-top: 90px;
      padding: 20px;
    }

    .info-novios {
      max-width: 1000px;
      margin: auto;
      background: rgba(232, 227, 212, 0.85);
      border-radius: 22px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.25);
      padding: 35px;
    }

    .foto-novios {
      width: 55%;
      max-height: 420px;
      object-fit: cover;
      border-radius: 22px;
      margin: 0 auto 45px auto;
      display: block;
      border: 4px solid var(--hot-fudge);
    }

    h2 {
      text-align: center;
      font-size: 34px;
      margin-bottom: 30px;
      color: var(--hot-fudge);
    }

    .contenedor-info {
      display: flex;
      gap: 25px;
      flex-wrap: wrap;
    }

    .novio, .novia {
      flex: 1 1 45%;
      background: rgba(138, 154, 116, 0.18);
      padding: 25px;
      border-radius: 18px;
      border: 2px solid rgba(74, 59, 54, 0.25);
    }

    .titulo {
      text-align: center;
      font-size: 26px;
      margin-bottom: 18px;
      color: var(--hot-fudge);
      letter-spacing: 1px;
    }

    ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    li {
      font-size: 18px;
      margin: 12px 0;
      line-height: 1.5;
    }

    a {
      color: var(--hot-fudge);
      text-decoration: none;
      font-weight: 600;
    }

    a:hover {
      color: var(--oil-green);
      text-decoration: underline;
    }

    @media (max-width: 768px) {
      .contenedor-info {
        flex-direction: column;
      }

      .foto-novios {
        width: 100%;
      }
    }
  </style>
</head>

<body>

<main>
  <section class="info-novios">

    <img src="multimedia/galeria/1.jpg" alt="Bride and Groom Photo" class="foto-novios">

    <h2>📇 Bride & Groom Information</h2>

    <div class="contenedor-info">

      <!-- GROOM -->
      <div class="novio">
        <h3 class="titulo">💙 John Escamilla</h3>
        <ul>
          <li>📞 Phone: </li>
          <li>⛪ Church: </li>
          <li>🏦 Bank Account: </li>
          <li>
            ✉️ Email:
            <a href="">
              
            </a>
          </li>
        </ul>
      </div>

      <!-- BRIDE -->
      <div class="novia">
        <h3 class="titulo">💖 Jackelin Janeth Moran</h3>
        <ul>
          <li>📞 Phone: +503 7501-2807</li>
          <li>⛪ Church: San Salvador, Colonia Ferrocarril</li>
          <li>🏦 Account Number: 003550528184</li>
          <li>
            ✉️ Email:
            <a href="mailto:jackelinjanethmoranespinoza@gmail.com">
              jackelinjanethmoranespinoza@gmail.com
            </a>
          </li>
        </ul>
      </div>

    </div>
  </section>
</main>

<footer>
  <?php include_once("1fooder.php") ?>
</footer>

</body>
</html>
