<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wedding Guidelines</title>
  <?php include_once("1header.php") ?>

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
      background: rgba(138, 154, 116, 0.25);
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
      background: rgba(232, 227, 212, 0.85);
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
    <h2>Guidelines for the Big Day</h2>
    <ul>
      <li>Please arrive on time so you don’t miss any special moments.</li>
      <li>Maintain reverence at all times; remember that you are in the house of God.</li>

<footer>
  <?php include_once("1fooder.php") ?>
</footer>
