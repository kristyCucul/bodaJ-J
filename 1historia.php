<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

    <h2>Our Story</h2>

    <!-- JOHN'S STORY -->
    <div class="historia">
      <h3>John</h3>
      <p>
        When I decided to go on a missionary trip to El Salvador, I never imagined that I would find the woman
        with whom I would want to spend the rest of my life. My intention was to share the gospel with people
        who needed to hear about Jesus, but I never thought that this place would be where I would meet the woman
        I would someday marry.
        <br><br>
        As I got to know her, I understood that she was the person God had been preparing for me.
        She is a kind, thoughtful woman, full of gratitude, and someone who loves God above all else.
        I feel deeply blessed to be able to spend the rest of my life alongside such a wonderful woman.
      </p>
    </div>

    <!-- JACKY'S STORY -->
<div class="historia">
  <h3>Jacky</h3>
  <p>
    I always asked God for someone with whom to share the later years of my life, someone who would value me
    and give me the place I deserve. I never imagined that this person would be from another country; it was
    something unexpected, something that arose without us having met in person from the beginning.
    <br><br>
    But as John told me, it was God who said, “she is the one.” And in the same way,
    God confirmed to me as well: “he is the right one too.”
  </p>
</div>



<footer>
  <?php include_once("1fooder.php") ?>

</footer>
