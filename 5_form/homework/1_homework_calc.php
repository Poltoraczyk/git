<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="1_hwstyle.css">
    <title>Obliczenia</title>
</head>
<body>
    <?php

        $pole = $_SESSION['a'] * $_SESSION['b'];
        $obwod = ($_SESSION['a'] + $_SESSION['b']) * 2;     

        if (!empty($_SESSION['a'])&& !empty($_SESSION['b'])&& $_SESSION['pomiar'] == "pole") {
            echo "Pole wynosi $_SESSION[a] x $_SESSION[b] = $pole [cm<sup>2</sup>]";
        }elseif (!empty($_SESSION['a'])&& !empty($_SESSION['b'])&& $_SESSION['pomiar'] == "obwod") {
            echo "Obwód wynosi ($_SESSION[a] + $_SESSION[b]) * 2 = $obwod [cm]";
        }else {
    ?>
    <script>
      history.back();
    </script>
    <?php
 }
 
?>
    <br><a href="./1_homework.php">Powrót do obliczen</a>
</body>
</html>