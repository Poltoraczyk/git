<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>Klienci</title>
</head>
<body>
  <?php
    if (isset($_SESSION['error'])) {
      echo $_SESSION['error'];
      unset($_SESSION['error']);
  }

  ?>
  <h1>Lista stron</h1>
  <a href="./site/klient.php">Klienci</a>
  <a href="./site/miasto.php">Miasta</a>
  <a href="./site/wojewodztwo.php">Województwa</a>
  <a href="./site/klient_usuwanie.php">klienci usuwanie</a>
  <a href="./site/klient_dodawanie.php">klienci dodawanie</a>
</body>
</html>