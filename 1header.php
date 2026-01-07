<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>John & Jaky</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600&family=Parisienne&display=swap" rel="stylesheet" />

<style>
    :root {
      --oil-green: #8A9A74;
      --hot-fudge: #4A3B36;
      --antique-white: #E8E3D4;
    }

    html, body {
      max-width: 100%;
      overflow-x: hidden;
    }

    body {
      background-color: var(--antique-white);
      font-family: 'Cormorant Garamond', serif;
      padding-top: 70px;
      margin: 0;
      color: var(--hot-fudge);
    }

    /* NAVBAR */
    .mi-nav {
      background-color: var(--hot-fudge);
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1050;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.35);
    }

    /* Title */
    .titulo-boda {
      font-family: 'Parisienne', cursive;
      font-size: 36px;
      color: var(--antique-white);
      letter-spacing: 1px;
    }

    /* OFFCANVAS – FINAL BACKGROUND FIX */
    .offcanvas {
      background-color: rgba(138, 154, 116, 0.92) !important;
      backdrop-filter: blur(6px);
      border-left: 3px solid var(--hot-fudge);
      box-shadow: -4px 0px 18px rgba(0, 0, 0, 0.25);
    }

    /* Menu header */
    .offcanvas-header {
      background-color: rgba(232, 227, 212, 0.45) !important;
      border-bottom: 2px solid var(--hot-fudge);
      padding-top: 20px;
      padding-bottom: 20px;
    }

    /* Menu title */
    .offcanvas-title {
      color: var(--hot-fudge);
      font-size: 24px;
      letter-spacing: 3px;
      font-weight: 600;
      text-transform: uppercase;
    }

    /* Close button */
    .btn-close {
      filter: invert(20%) sepia(8%) saturate(800%) hue-rotate(330deg);
    }

    /* Menu links */
    .offcanvas .nav-link {
      color: var(--antique-white) !important;
      font-size: 18px;
      padding: 12px 8px;
      border-radius: 8px;
      transition: 0.25s ease;
      background: rgba(74, 59, 54, 0.15);
    }

    .offcanvas .nav-link:hover {
      background: var(--antique-white);
      color: var(--hot-fudge) !important;
      transform: translateX(8px);
      box-shadow: 0 4px 10px rgba(0,0,0,0.25);
    }

    /* Icons */
    .offcanvas .nav-link i {
      color: var(--antique-white);
      transition: 0.25s ease;
    }

    .offcanvas .nav-link:hover i {
      color: var(--hot-fudge);
    }

    /* Divider line */
    .offcanvas hr {
      border-color: var(--hot-fudge);
      opacity: 0.45;
    }

    /* Bottom image */
    .offcanvas .img-fluid.rounded {
      border: 4px solid var(--hot-fudge);
      border-radius: 14px;
    }

    /* Bible verse */
    .verse {
      background: rgba(232, 227, 212, 0.65);
      border-left: 5px solid var(--hot-fudge);
      padding: 14px 16px;
      border-radius: 10px;
      color: var(--hot-fudge);
      font-size: 19px;
      line-height: 1.4;
    }
</style>

</head>

<body>

  <!-- MAIN NAV -->
  <nav class="navbar mi-nav">
    <div class="container-fluid justify-content-between align-items-center">
      <span class="navbar-brand ms-2 fw-bold titulo-boda">John & Jacky</span>

      <button class="btn btn-outline-light" type="button" data-bs-toggle="offcanvas"
              data-bs-target="#menu" aria-controls="menu">
        <i class="bi bi-list fs-3"></i>
      </button>
    </div>
  </nav>

<!-- OFFCANVAS -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="menu" aria-labelledby="menuLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="menuLabel">
      <i class="bi bi-info-circle-fill me-2"></i>More Information
    </h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>

  <div class="offcanvas-body px-4">
    <ul class="navbar-nav">

      <li class="nav-item mb-3">
        <a class="nav-link d-flex align-items-center" href="principal.php">
          <i class="bi bi-house-door-fill me-2"></i>Home
        </a>
      </li>

      <li class="nav-item mb-3">
        <a class="nav-link d-flex align-items-center" href="ubicación.php">
          <i class="bi bi-geo-alt-fill me-2"></i>Location
        </a>
      </li>

      <li class="nav-item mb-3">
        <a class="nav-link d-flex align-items-center" href="itinerario.php">
          <i class="bi bi-calendar-heart-fill me-2"></i>Schedule
        </a>
      </li>

      <li class="nav-item mb-3">
        <a class="nav-link d-flex align-items-center" href="galeria.php">
          <i class="bi bi-images me-2"></i>Gallery
        </a>
      </li>

      <li class="nav-item mb-3">
        <a class="nav-link d-flex align-items-center" href="indicaciones.php">
          <i class="bi bi-map-fill me-2"></i>Directions
        </a>
      </li>

      <li class="nav-item mb-3">
        <a class="nav-link d-flex align-items-center" href="nuestra_información.php">
          <i class="bi bi-people-fill me-2"></i>Our Information
        </a>
      </li>

      <li class="nav-item mb-3">
        <a class="nav-link d-flex align-items-center" href="historia.php">
          <i class="bi bi-stars me-2"></i>Our Story
        </a>
      </li>

    </ul>

    <hr class="my-4" />

    <div class="text-center">
      <img src="multimedia/J.jpg" alt="Mario and Ester" class="img-fluid rounded shadow" />

      <p class="verse">
        “Though one may be overpowered, two can defend themselves.
        A cord of three strands is not quickly broken.”<br>
        — Ecclesiastes 4:12
      </p>
    </div>
  </div>
</div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Close the menu when clicking any link
    document.querySelectorAll('.offcanvas .nav-link').forEach(link => {
      link.addEventListener('click', () => {
        const offcanvas = bootstrap.Offcanvas.getInstance(document.getElementById('menu'));
        if (offcanvas) offcanvas.hide();
      });
    });
  </script>

</body>
</html>
