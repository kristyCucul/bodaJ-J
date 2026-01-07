<?php include_once("header.php"); ?>

<!-- MAIN CONTENT -->
<div class="container my-5">

  <h2 class="text-center mb-3">RSVP Confirmation</h2>

  <p class="text-center mb-5 text-muted">
    We sincerely appreciate you taking the time to confirm your attendance, as it helps us organize this very special day.
  </p>

  <!-- FORM -->
  <div class="ratio ratio-1x1" style="min-height: 1200px;">
    <iframe
      src="https://docs.google.com/forms/d/e/1FAIpQLSdp8IoJQ6vYSQaXBteFrwaNb0_Ee1_8UzboymWCQe5uvIU-Dw/viewform?embedded=true"
      style="border:0;"
      loading="lazy">
    </iframe>
  </div>

</div>

<!-- MENU BUTTON (LARGER AND ELEGANT) -->
<div class="container text-center my-5">
  <button
    class="btn rounded-pill fw-semibold shadow-lg px-5 py-3 fs-5"
    type="button"
    data-bs-toggle="offcanvas"
    data-bs-target="#offcanvasMenu"
    aria-controls="offcanvasMenu"
    style="background-color: #f5f5dc; color: #000;">
    ☰ Menu
  </button>
</div>

<!-- SIDE MENU -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">

  <div class="offcanvas-header border-bottom">
    <h5 class="offcanvas-title fw-bold text-uppercase" id="offcanvasMenuLabel">
      <i class="bi bi-info-circle-fill me-2"></i>More Information
    </h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>

  <div class="offcanvas-body px-4">
    <ul class="navbar-nav">

      <li class="nav-item mb-3">
        <a class="nav-link d-flex align-items-center fs-5" href="principal.php">
          <i class="bi bi-house-door-fill me-2"></i> Home
        </a>
      </li>

      <li class="nav-item mb-3">
        <a class="nav-link d-flex align-items-center fs-5" href="confirmacion.php">
          <i class="bi bi-clipboard-check-fill me-2"></i> RSVP Confirmation
        </a>
      </li>

      <li class="nav-item mb-3">
        <a class="nav-link d-flex align-items-center fs-5" href="ubicacion.php">
          <i class="bi bi-geo-alt-fill me-2"></i> Location
        </a>
      </li>

      <li class="nav-item mb-3">
        <a class="nav-link d-flex align-items-center fs-5" href="itinerario.php">
          <i class="bi bi-calendar-heart-fill me-2"></i> Itinerary
        </a>
      </li>

      <li class="nav-item mb-3">
        <a class="nav-link d-flex align-items-center fs-5" href="galeria.php">
          <i class="bi bi-images me-2"></i> Gallery
        </a>
      </li>

      <li class="nav-item mb-3">
        <a class="nav-link d-flex align-items-center fs-5" href="indicaciones.php">
          <i class="bi bi-map-fill me-2"></i> Directions
        </a>
      </li>

      <li class="nav-item mb-3">
        <a class="nav-link d-flex align-items-center fs-5" href="nuestra_informacion.php">
          <i class="bi bi-people-fill me-2"></i> Our Information
        </a>
      </li>

      <li class="nav-item mb-3">
        <a class="nav-link d-flex align-items-center fs-5" href="historia.php">
          <i class="bi bi-stars me-2"></i> Our Story
        </a>
      </li>

    </ul>
  </div>

</div>

<?php include_once("fooder.php"); ?>

