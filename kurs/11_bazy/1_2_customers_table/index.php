<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Klienci</title>
</head>
<body>
    <h1>Lista klientów</h1>
<?php
    //połączenie z bazą danych
    $servername= "localhost";
    $username = "root";
    $password = "";
    $db = "teb1";

    $connect =  mysqli_connect($servername, $username, $password, $db);

    $sql = "SELECT * FROM customers";

    $result = $connect->query($sql);
    echo "<table>";
    echo "<tr>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Data urodzenia</th>
        <th>Wrost</th>
        </tr>";
    while ($row = $result->fetch_assoc()){
        if ($row['height'] == NULL) {
            $height = "-";    
        }else{
            $height = $row['height']." cm";
        }
        echo <<<ROW
        <tr>
            <td>$row[name]</td>
            <td>$row[surname]</td>
            <td>$row[birthday]</td>
            <td>$height</td>
        </tr>
        ROW;
    }
    echo "</table>";
    $connect->close();


?>
</body>
</html> 