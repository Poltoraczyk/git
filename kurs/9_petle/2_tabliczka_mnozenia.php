<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/tabliczka.css">
    <title>Tabliczka mnożenia</title>
</head>
<body>
    <form action="" method="get">
    <input type="number" name="rozmiar" placeholder="rozmiar"><br><br>
    <input type="submit" value="Zatwierdź"><hr>
    </form>
    <?php
    if (isset($_GET['rozmiar'])) {
    echo '<table>';
    $count = $_GET['rozmiar'];
    $row=1;
    do {
        echo '<tr>';
        $col=1;
        do {
            echo '<td>',$row * $col,'</td>';
            $col++;
        } while ($col <= $count);
            $row++;
            echo '</tr>';
        } while ($row <= $count);
    echo '</table>';
    }
    
?>
</body>
</html>