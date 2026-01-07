<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wedding Location</title>
   <?php include_once("1header.php") ?>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600&display=swap" rel="stylesheet">
</head>
<style>
  .ubicaciones-section {
  background-color: #8A9A74; /* beige */
  padding: 40px 20px;
  text-align: center;
  font-family: 'Cormorant Garamond', serif;
}

.ubicaciones-section h2 {
  color: #4A3B36; /* dark burgundy */
  font-size: 50px;
  margin-bottom: 30px;
}

.ubicaciones-container {
  display: flex;
  flex-wrap: wrap;
  gap: 30px;
  justify-content: center;
}

.ubicacion-card {
  background-color: #E8E3D4;
  border: 2px solid #4A3B36;
  border-radius: 18px;
  padding: 20px;
  width: 100%;
  max-width: 450px;
  margin: 0 auto; /* centered */
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
  transition: transform 0.3s;
  justify-content: center;
}

.ubicacion-card:hover {
  transform: translateY(-5px);
}

.ubicacion-card h3 {
  color: #8A9A74;
  font-size: 28px;
  margin-bottom:50px;
}

.ubicacion-card p {
  color: #111111; /* black */
  font-size: 25px;
  margin-bottom: 15px;
}

.ubicacion-card iframe {
  width: 100%;
  height: 400px;
  border: none;
  border-radius: 10px;
}

/* Responsive */
@media screen and (max-width: 768px) {
  .ubicaciones-container {
    flex-direction: column;
    align-items: center;
  }
}

</style>
<body>
<section class="ubicaciones-section">
  <h2>Wedding Location</h2>
  
    <div class="ubicacion-card">
      <p>Main Street 15, San Salvador</p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.4040702428833!2d-89.2158139!3d13.693959999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f63313e4779aa3d%3A0xba896f11af6e21b1!2sCentro%20de%20Estudios%20de%20El%20Salvador!5e0!3m2!1ses!2ssv!4v1766426705556!5m2!1ses!2ssv"
        width="700" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

</body>
<footer>
  <?php include_once("1fooder.php") ?>
</footer>
</html>

