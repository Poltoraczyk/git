<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesja 1</title>
</head>
<body>
    <h4>Strona startowa</h4>
    <?php
        echo "indentyfikator sesji: ", session_id();
        $_SESSION['name'] = 'Anna';
        echo "<hr> Imię: $_SESSION[name]<br>"
    ?>
    <a href="./2_sesje.php">Sesje 2</a>
</body>
</html>