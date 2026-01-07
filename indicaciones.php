<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Indicaciones para la Boda</title>
  <?php include_once("header.php") ?>

  <style>
    :root {
      --oil-green: #8A9A74;
      --hot-fudge: #4A3B36;
      --antique-white: #E8E3D4;
    }

    body {
      background-color: var(--antique-white);
      color: var(--hot-fudge);
      font-family: 'Cormorant Garamond', serif;
      margin: 0;
      padding-top: 90px;
    }

    .indicaciones {
      max-width: 850px;
      margin: 0 auto 60px;
      background: rgba(138, 154, 116, 0.25); /* Oil Green translúcido */
      backdrop-filter: blur(4px);
      border-radius: 22px;
      padding: 35px 40px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.25);
      border: 2px solid rgba(74, 59, 54, 0.35);
    }

    .indicaciones h2 {
      text-align: center;
      font-size: 2.6em;
      color: var(--hot-fudge);
      margin-bottom: 30px;
      letter-spacing: 1px;
    }

    .indicaciones ul {
      list-style: none;
      padding-left: 0;
      margin: 0;
    }

    .indicaciones li {
      background: rgba(232, 227, 212, 0.85); /* Antique White */
      margin-bottom: 16px;
      padding: 16px 22px;
      border-radius: 12px;
      font-size: 1.15em;
      display: flex;
      align-items: flex-start;
      gap: 14px;
      color: var(--hot-fudge);
      box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    }

    .indicaciones li::before {
      content: "✔";
      color: var(--oil-green);
      font-size: 1.3em;
      margin-top: 2px;
      flex-shrink: 0;
    }

    @media (max-width: 600px) {
      .indicaciones {
        padding: 25px 22px;
      }

      .indicaciones h2 {
        font-size: 2em;
      }

      .indicaciones li {
        font-size: 1.05em;
      }
    }
  </style>
</head>

<body>

  <div class="indicaciones">
    <h2>Indicaciones para el Gran Día</h2>
    <ul>
      <li>Llega con puntualidad para no perderte ningún momento especial.</li>
      <li>Guarda reverencia en todo momento; recuerda que estás en la casa de Dios.</li>
      <li>Viste con elegancia y decoro, recordando que esta es una celebración sagrada.</li>
      <li>Evita usar colores similares al vestido de la novia (blanco, beige).</li>
      <li>No olvides confirmar tu asistencia.</li>
      <li>Si llevas niños, mantente pendiente de su cuidado.</li>
      <li>Respeta los tiempos y espacios del evento.</li>
      <li>Apaga o silencia tu celular durante la ceremonia.</li>
      <li>Puedes tomar fotos, pero sin interrumpir a los fotógrafos oficiales.</li>
      <li>Comparte las fotos que tomes en la carpeta que hemos preparado para ti 📷</li>
      <li>Sobre todo… ¡disfruta, celebra y comparte con nosotros este día tan especial!</li>
    </ul>
  </div>

</body>

<footer>
  <?php include_once("fooder.php") ?>
</footer>
</html>
