<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zakupy</title>
</head>
<body>
    <h1>Zakupy</h1>
    <?php
        $result = 0;
        if ($_GET['mouse'] > 0) {
            $result = $_GET['mouse'] * $_SESSION['price']['mouse'];
        }

        if ($_GET['keyboard'] > 0) {
            $result = $_GET['keyboard'] * $_SESSION['price']['keyboard'];
        }

        echo "Suma: ",$result,"zł";
    ?>
</body>
</html>