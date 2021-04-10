<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesja 3</title>
</head>
<body>
    <h4>Strona 3</h4>
    <?php
        echo "indentyfikator sesji: ", session_id();
        echo "<hr> Imię: $_SESSION[name]<br>";
        unset($_SESSION['name']);
    ?>
  <a href="./2_sesje.php">Strona startowa</a>
</body>
</html>
<!-- usunac na stronie 3 zmienna sesyjna name i cofnac sie do drugiej strony i sprawdzic wynik -->