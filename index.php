<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome | Bienvenidos</title>

  <!-- Tipografías -->
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600&family=Parisienne&display=swap" rel="stylesheet">

  <style>
    body {
      margin: 0;
      padding: 0;
      background: url('fondo-boda.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: 'Cormorant Garamond', serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      position: relative;
    }

    .overlay {
      position: absolute;
      inset: 0;
      backdrop-filter: blur(4px);
      background: rgba(0, 0, 0, 0.20);
    }

    .contenedor {
      position: relative;
      padding: 45px 40px;
      background: rgba(232, 227, 212, 0.75);
      border-radius: 18px;
      backdrop-filter: blur(10px);
      box-shadow: 0 10px 35px rgba(0,0,0,0.25);
      text-align: center;
      width: 90%;
      max-width: 420px;
      z-index: 2;
      border: 1px solid rgba(255,255,255,0.4);
    }

    h1 {
      margin: 0 0 10px 0;
      font-size: 46px;
      font-family: 'Parisienne', cursive;
      color: #4A3B36;
    }

    p {
      font-size: 20px;
      color: #4A3B36;
      margin-bottom: 30px;
    }

    .botones {
      display: flex;
      gap: 20px;
      justify-content: center;
      flex-wrap: wrap;
    }

    .btn-idioma {
      background-color: #8A9A74;
      color: #fff;
      border: none;
      padding: 14px 34px;
      border-radius: 12px;
      font-size: 18px;
      cursor: pointer;
      transition: 0.3s ease;
      font-weight: 600;
      min-width: 140px;
    }

    .btn-idioma:hover {
      background-color: #4A3B36;
      transform: translateY(-2px);
    }

    footer {
      position: absolute;
      bottom: 15px;
      width: 100%;
      text-align: center;
      color: #E8E3D4;
      font-size: 14px;
      text-shadow: 0 0 8px rgba(0,0,0,0.6);
      z-index: 2;
    }

    @media (max-width: 480px) {
      h1 {
        font-size: 38px;
      }
      p {
        font-size: 17px;
      }
    }
  </style>
</head>

<body>

  <div class="overlay"></div>

  <div class="contenedor">
    <h1>John & Jaky</h1>
    <p>Selecciona tu idioma<br>Select your language</p>

    <div class="botones">
      <button class="btn-idioma" onclick="location.href='contra.php'">
        ESPAÑOL
      </button>

      <button class="btn-idioma" onclick="location.href='1contra.php'">
        ENGLISH
      </button>
    </div>
  </div>

  <footer>
    © 2026 John & Jaky
  </footer>

</body>
</html>
