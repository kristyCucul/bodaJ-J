<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Galería de Boda</title>

  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
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
      margin: 0;
      font-family: 'Cormorant Garamond', serif;
    }

    header {
      text-align: center;
      padding: 40px 15px;
      background: rgba(138, 154, 116, 0.25);
      border-bottom: 3px solid var(--hot-fudge);
    }

    h1 {
      font-size: 2.4em;
      margin-bottom: 10px;
    }

    .elegante {
      font-family: 'Great Vibes', cursive;
      font-size: 30px;
    }

    .audio-player {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    /* ===== GALERÍA ===== */
    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 22px;
      padding: 45px 25px;
    }

    .card {
      background: var(--antique-white);
      padding: 14px;
      border-radius: 18px;
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
      border: 2px solid rgba(74, 59, 54, 0.2);
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-6px);
    }

    .card img {
      width: 100%;
      height: auto;
      border-radius: 14px;
      display: block;
      object-fit: cover;
    }

    /* Horizontales ocupan más espacio */
    .horizontal {
      grid-column: span 2;
    }

    /* Verticales mantienen proporción elegante */
    .vertical img {
      aspect-ratio: 3 / 4;
    }

    /* ===== VIDEO ===== */
    section h2 {
      margin: 40px 25px 20px;
      border-left: 6px solid var(--hot-fudge);
      padding-left: 14px;
      font-size: 2em;
    }

    .video video {
      width: 100%;
      max-width: 760px;
      border-radius: 18px;
      display: block;
      margin: 0 auto 40px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.3);
    }

    .texto {
      font-size: 18px;
      text-align: center;
      margin: 30px 20px;
      line-height: 1.6;
    }

    .upload-container {
      display: flex;
      justify-content: center;
      padding: 2rem 1rem;
      background: rgba(138, 154, 116, 0.3);
    }

    .upload-btn {
      background-color: var(--hot-fudge);
      color: var(--antique-white);
      font-size: 1.4rem;
      padding: 0.9rem 1.7rem;
      border-radius: 1.4rem;
      text-decoration: none;
      transition: 0.3s;
    }

    .upload-btn:hover {
      background-color: var(--oil-green);
      color: var(--hot-fudge);
      transform: scale(1.05);
    }

    @media (max-width: 600px) {
      .horizontal {
        grid-column: span 1;
      }
      h1 { font-size: 1.9em; }
      .elegante { font-size: 24px; }
    }
  </style>
</head>

<body>
<main style="margin-top:70px;">

<header>
  <h1>Galería de Fotos</h1>
  <p class="elegante">“Reproduce Nuestra Canción”</p>

  <div class="audio-player">
    <audio controls>
      <source src="AUDIO/the risong.mp3" type="audio/mp3">
    </audio>
  </div>
</header>

<div class="gallery">

  <!-- Verticales -->
  <div class="card vertical"><img src="multimedia/galeria/1.jpg"></div>
  <div class="card vertical"><img src="multimedia/galeria/5.jpeg"></div>
  <div class="card vertical"><img src="multimedia/galeria/6.jpeg"></div>
  <div class="card vertical"><img src="multimedia/galeria/8.jpeg"></div>
  <div class="card vertical"><img src="multimedia/galeria/10.jpeg"></div>
  <div class="card vertical"><img src="multimedia/galeria/12.jpeg"></div>
  <div class="card vertical"><img src="multimedia/galeria/13.jpeg"></div>
  <div class="card vertical"><img src="multimedia/galeria/14.jpeg"></div>
  <div class="card vertical"><img src="multimedia/galeria/15.jpeg"></div>
  <div class="card vertical"><img src="multimedia/galeria/23.jpeg"></div>
  <div class="card vertical"><img src="multimedia/galeria/24.jpeg"></div>
 

  <!-- Horizontales -->
  <div class="card horizontal"><img src="multimedia/galeria/2h.jpg"></div>
  <div class="card horizontal"><img src="multimedia/galeria/3h.jpg"></div>
  <div class="card horizontal"><img src="multimedia/galeria/4h.jpg"></div>
  <div class="card horizontal"><img src="multimedia/galeria/7h.jpeg"></div>
  <div class="card horizontal"><img src="multimedia/galeria/9h.jpeg"></div>
  <div class="card horizontal"><img src="multimedia/galeria/11h.jpeg"></div>
  <div class="card horizontal"><img src="multimedia/galeria/16h.jpeg"></div>
  <div class="card horizontal"><img src="multimedia/galeria/17h.jpeg"></div>
  <div class="card horizontal"><img src="multimedia/galeria/18h.jpeg"></div>
  <div class="card horizontal"><img src="multimedia/galeria/19h.jpeg"></div>
  <div class="card horizontal"><img src="multimedia/galeria/20h.jpeg"></div>
  <div class="card horizontal"><img src="multimedia/galeria/21h.jpeg"></div>
  <div class="card horizontal"><img src="multimedia/galeria/22h.jpeg"></div>
  <div class="card horizontal"><img src="multimedia/galeria/25h.jpeg"></div>


</div>

<section>
  <h2>Engagement Video</h2>
  <div class="video">
    <iframe 
      src="https://www.youtube.com/embed/sD_r3CTPQ9E"
      title="Engagement Video"
      frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
      allowfullscreen>
    </iframe>
  </div>
</section>


<p class="texto">
  Hemos creado una carpeta compartida donde podrás descargar todas las fotos de nuestra boda.<br>
  Si capturaste algún momento especial, ¡nos encantaría que lo compartieras también!
</p>

<div class="upload-container">
  <a class="upload-btn" target="_blank"
     href="https://drive.google.com/drive/folders/1aVNOw_hVojw2hYaUqcCF56hqKfWuCyOZ?usp=sharingXS">
    Subir mis fotos
  </a>
</div>

</main>

<footer>
  <?php include_once("fooder.php") ?>
</footer>
</body>
</html>

