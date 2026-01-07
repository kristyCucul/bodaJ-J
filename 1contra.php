<?php 
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $clave = $_POST['clave'];

  // Check the password
  if ($clave === '28062026') {
    header('Location: 1principal.php');
    exit();
  } else {
    $error = "Incorrect password. Please try again.";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to Our Wedding</title>

  <!-- Elegant fonts -->
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
      top: 0; left: 0;
      width: 100%; height: 100%;
      backdrop-filter: blur(4px);
      background: rgba(0, 0, 0, 0.20);
    }

    .formulario {
      position: relative;
      padding: 45px 40px;
      background: rgba(232, 227, 212, 0.7); /* Antique White */
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
      color: #4A3B36; /* Hot Fudge */
    }

    p {
      font-size: 20px;
      color: #4A3B36; /* Hot Fudge */
      margin-bottom: 25px;
    }

    input[type="password"] {
      padding: 12px;
      width: 100%;
      border-radius: 10px;
      border: 1px solid #8A9A74; /* Oil Green */
      font-size: 18px;
      background: #E8E3D4; /* Antique White */
      color: #4A3B36;
      margin-top: 10px;
      text-align: center;
    }

    button {
      margin-top: 25px;
      background-color: #8A9A74; /* Oil Green */
      color: #fff;
      border: none;
      padding: 12px 30px;
      border-radius: 10px;
      font-size: 18px;
      cursor: pointer;
      transition: 0.3s ease;
      font-weight: 600;
    }

    button:hover {
      background-color: #4A3B36; /* Hot Fudge */
    }

    .error {
      margin-top: 15px;
      color: #b33a3a;
      font-size: 16px;
      font-weight: bold;
    }

    footer {
      text-align: center;
      margin-top: 30px;
      color: #E8E3D4;
      font-size: 14px;
      position: absolute;
      bottom: 15px;
      width: 100%;
      z-index: 2;
      text-shadow: 0 0 8px rgba(0,0,0,0.6);
    }

    @media (max-width: 480px) {
      h1 {
        font-size: 38px;
      }
      .formulario {
        padding: 35px 25px;
      }
      p {
        font-size: 17px;
      }
    }
  </style>
</head>
<body>

  <div class="overlay"></div>

  <div class="formulario">
    <h1>John & Jaky</h1>
    <p>Enter the password to access</p>

    <form method="post">
      <input type="password" name="clave" placeholder="Password" required>
      <button type="submit">Enter</button>
    </form>

    <?php if (!empty($error)) : ?>
      <div class="error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
  </div>

</body>
</html>
