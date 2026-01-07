<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php include_once("header.php") ?>

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

    .historias {
      max-width: 980px;
      margin: 120px auto 70px;
      background: rgba(255, 255, 255, 0.55);
      backdrop-filter: blur(6px);
      border-radius: 28px;
      padding: 50px 45px;
      box-shadow: 0 14px 40px rgba(0,0,0,0.25);
      border: 1px solid rgba(74, 59, 54, 0.25);
    }

    .historias h2 {
      text-align: center;
      font-size: 38px;
      color: var(--hot-fudge);
      margin-bottom: 50px;
      letter-spacing: 1px;
    }

    .historia {
      position: relative;
      margin-bottom: 50px;
      padding: 35px 40px;
      border-radius: 22px;
      background: linear-gradient(
        to bottom right,
        rgba(232, 227, 212, 0.9),
        rgba(232, 227, 212, 0.75)
      );
      border-left: 7px solid var(--oil-green);
    }

    .historia:last-child {
      margin-bottom: 0;
    }

    .historia h3 {
      font-size: 28px;
      color: var(--oil-green);
      text-align: center;
      margin-bottom: 20px;
      letter-spacing: 0.5px;
    }

    .historia p {
      font-size: 19px;
      line-height: 1.75;
      text-align: justify;
      margin: 0;
    }

    .historia::before {
      content: "✦";
      position: absolute;
      top: -14px;
      left: 25px;
      background-color: var(--antique-white);
      color: var(--oil-green);
      padding: 4px 10px;
      font-size: 18px;
    }

    @media (max-width: 768px) {
      .historias {
        margin: 100px 16px 50px;
        padding: 35px 25px;
      }

      .historias h2 {
        font-size: 30px;
      }

      .historia {
        padding: 28px 24px;
      }

      .historia h3 {
        font-size: 24px;
      }

      .historia p {
        font-size: 17px;
      }
    }
  </style>
</head>

<body>

<main>
  <section class="historias">

    <h2>Nuestra Historia</h2>

    <!-- HISTORIA JOHN -->
    <div class="historia">
      <h3>John</h3>
      <p>
        Cuando decidí ir a un viaje misionero a El Salvador, nunca imaginé que encontraría a la mujer con la que
        querría pasar el resto de mi vida. Mi intención era compartir el evangelio con personas que necesitaban
        escuchar acerca de Jesús, pero jamás pensé que ese lugar sería donde conocería a la mujer con la que
        algún día me casaría.
        <br><br>
        A medida que fui conociéndola, comprendí que ella era la persona que Dios había estado preparando para mí.
        Es una mujer bondadosa, considerada, llena de gratitud y que ama a Dios por encima de todo.
        Me siento profundamente bendecido de poder pasar el resto de mi vida junto a una mujer tan maravillosa.
      </p>
    </div>

    <!-- HISTORIA JACKY -->
    <div class="historia">
      <h3>Jacky</h3>
      <p>
        Siempre le pedía a Dios a alguien con quien compartir los últimos años de mi vida, alguien que me valorara
        y me diera el lugar que merezco. Nunca imaginé que esa persona sería alguien de otro país; fue algo
        inesperado, algo que surgió sin habernos conocido en persona desde el inicio.
        <br><br>
        Pero como me dijo John, fue Dios quien dijo: “ella es la indicada”. Y de la misma manera,
        Dios me confirmó a mí: “él es el correcto también”.
      </p>
    </div>

  </section>
</main>

<footer>
  <?php include_once("fooder.php") ?>
</footer>

</body>
</html>


